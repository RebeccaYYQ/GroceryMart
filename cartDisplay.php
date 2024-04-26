<?php
$conn = mysqli_connect("localhost", "root", "", "progintas1");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit;
}

$cartProductIds = $_POST["cartProductIds"];

//if the cart is empty, display message and stop the rest of the PHP
if (empty($cartProductIds)) {
    echo "<p>Your cart is empty.</p>";
    exit();
}

$query_string = "select * from as1db where product_id in ($cartProductIds)";

//show the DB results
$result = mysqli_query($conn, $query_string);
$num_rows = mysqli_num_rows($result);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='productItem flex'>
                        <img src='images/{$row['product_id']}.jpg' class='productItemImage'>
                        <p class='productItemContent'><b>{$row['product_name']}</b><br>
                        <span id='{$row['product_id']}Price'>\${$row['unit_price']}</span> per {$row['unit_quantity']} <br>
                        Stock: {$row['in_stock']}</p>
                        <div class='flex'>
                            <button class='quantityBtn' type='button' onClick='itemGridCart(\"minus\", \"{$row['product_id']}\")'>-</button>
                            <p class='quantityField' id='{$row['product_id']}Quantity'>0</p>
                            <button class='quantityBtn' type='button' onClick='itemGridCart(\"plus\", \"{$row['product_id']}\")'>+</button>
                        </div>
                    </div>";
    }
}

mysqli_close($conn);
