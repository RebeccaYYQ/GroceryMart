<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="script.js"></script>
    <title>Grocery Mart | Confirmation</title>
</head>

<body>
    <header class="flex">
        <a href="index.php" class="flex"><img id="shopIcon" src="images/shopIcon.png">
            <h1>Grocery Mart</h1>
        </a>
        <div class="align-right flex">
            <a href="cart.php" class="flex">
                <span class="material-symbols-outlined md-60">shopping_cart</span>
                <span id="cartQuantity">0</span>
            </a>
        </div>
    </header>

    <main>
        <?php
        $submitCartIds = $_REQUEST['submitCartIds'];
        $submitCartQuantity = $_REQUEST['submitCartQuantity'];
        $email = $_REQUEST['email'];
        $name = $_REQUEST['name'];

        //connect to DB
        $conn = mysqli_connect("localhost", "root", "", "progintas1");
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit;
        }

        $query_string = "select * from as1db where product_id in ($submitCartIds)";

        //show the DB results
        $result = mysqli_query($conn, $query_string);
        $num_rows = mysqli_num_rows($result);

        //turn cartQuantity and id into arrays
        $quantArray = explode(",", $submitCartQuantity);
        $idArray = explode(",", $submitCartIds);

        //a string for the results
        $receiptString = "";

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {

                //find the index for that item, so that the correct quantity can be retrieved
                $index = array_search($row['product_id'], $idArray);

                //confirm that the quantity ordered is not above the stock amount
                if ($quantArray[$index] > $row['in_stock']) {
                    echo "<h2>Cart Error</h2>
                        <p>The amount of {$row['product_name']} in stock is {$row['in_stock']}. You have ordered {$quantArray[$index]}.</p>
                        <p>Please return to the shopping cart to fix this.<br>
                        Apologies for the lack of stock, and thank you.</p>
                        <input type='button' value='Return to Cart' class='cartButtons' onclick='window.location.href = \"cart.php\"'>";
                    exit;
                }
                //if the amount ordered is fine
                else {
                    $receiptString .= "<p><b>{$row['product_name']}</b><br>
                    Quantity: $quantArray[$index]</p>";
                }
            }
        }

        //print the results. If the user has no mistakes, it will go here
        echo "<h2>Delivery Confirmation</h2>
        <p>Thanks for ordering $name!<br>
        An email with the order details will be sent to $email</p>
        <p>Your order details are:</p>";
        echo $receiptString;

        // //update DB to reflect user's order
        for ($i = 0; $i < count($idArray); $i++) {
            $query_string = "UPDATE as1db SET in_stock = in_stock - $quantArray[$i] WHERE product_id = $idArray[$i]";
            mysqli_query($conn, $query_string);
        }

        mysqli_close($conn);

        // clear the cart after ordering
        echo "<script>clearCart();</script>";
        ?>
    </main>
</body>

</html>