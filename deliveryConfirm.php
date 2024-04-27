<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="script.js"></script>
    <title>Grocery Mart</title>
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
        <h2>Delivery Confirmation</h2>

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

        echo "<p>Thanks for ordering $name!<br>
        An email with the order details will be sent to $email</p>
        <p>Your order details are:</p>";
        
        //show the DB results
        $result = mysqli_query($conn, $query_string);
        $num_rows = mysqli_num_rows($result);

        //turn cartQuantity into an array
        $quantArray = explode(",", $submitCartQuantity);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            $i = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<p><b>{$row['product_name']}</b><br>
                        Quantity: $quantArray[$i]</p>";
                $i++;                
            }
        }

        mysqli_close($conn);
        ?>

    </main>
</body>

</html>