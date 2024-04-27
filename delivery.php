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

    <!-- update the cart -->
    <script>
        //update the Cart quantity number
        updateCartQuantity();

        // // Retrieve the customer's cart productIds from localStorage
        // var cartProductIds = [];
        // //Variable to store each item's price
        // var cartProductPrice = [];

        // //retrieve data from localStorage 
        // for (let i = 0; i < localStorage.length; i++) {
        //     key = localStorage.key(i);
        //     value = Number(localStorage.getItem(key));

        //     //if value is greater than 0, save it to the list
        //     value > 0 ? cartProductIds.push(key) : value;
        // };

        // // Send value to server using AJAX
        // var xhr = new XMLHttpRequest();
        // xhr.open("POST", "cartDisplay.php", true);
        // xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        // xhr.send("cartProductIds=" + cartProductIds);

        // // AJAX request completed successfully
        // xhr.onreadystatechange = function() {
        //     if (xhr.readyState === 4 && xhr.status === 200) {

        //     }
        // } 
    </script>

    <main>
        <h2>Delivery Details</h2>

        <form id="deliveryForm" class="flex" action="deliveryConfirm.php" onsubmit="return validEmail()" method="post">
            <label class= "formLabel" for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="mobile">Mobile Number:</label>
            <input type="text" id="mobile" name="mobile" pattern="\d{10}" title="Please enter a 10-digit mobile number" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="street">Street:</label>
            <input type="text" id="street" name="street" required><br>

            <label for="suburb">Suburb:</label>
            <input type="text" id="suburb" name="suburb" required><br>

            <label for="state">State:</label>
            <select id="state" name="state" required>
                <option value="">Select State</option>
                <option value="NSW">NSW</option>
                <option value="VIC">VIC</option>
                <option value="QLD">QLD</option>
                <option value="WA">WA</option>
                <option value="SA">SA</option>
                <option value="TAS">TAS</option>
                <option value="ACT">ACT</option>
                <option value="NT">NT</option>
            </select><br>

            <input type="submit" value="Submit Order" class="deliveryBtn">
        </form>
    </main>
</body>

</html>