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

    <?php
        $submitCartIds = $_REQUEST['submitCartIds'];
        $submitCartQuantity = $_REQUEST['submitCartQuantity'];

        echo "id: " . $submitCartIds . " quant " . $submitCartQuantity;
    ?>

    <main>
        <h2>Delivery Confirmation</h2>
        <p>Thanks for ordering!<br>
            An email with the order details will be sent to </p>
        <p>Your order details are:</p>

    </main>
</body>

</html>