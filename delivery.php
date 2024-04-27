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

    <script>
        //update the Cart quantity number
        updateCartQuantity();
    </script>

    <main>
        <h2>Delivery Details</h2>

        <form id="deliveryForm" class="flex" action="deliveryConfirm.php" onsubmit="return validEmail()" method="post">
            <label class="formLabel" for="name">Name:</label>
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

            <!-- Send order details through a hidden field in the form -->
            <input type="text" id="submitCartIds" name="submitCartIds" value="null">
            <input type="text" id="submitCartQuantity" name="submitCartQuantity" value="null">
        </form>
    </main>

    <script>
        // Retrieve the customer's cart productIds from localStorage
        var cartProductIds = [];
        //Variable to store each item's quantity
        var cartProductQuantity = [];

        //retrieve data from localStorage 
        for (let i = 0; i < localStorage.length; i++) {
            key = localStorage.key(i);
            value = Number(localStorage.getItem(key));

            //if value is greater than 0, save it to the list
            if (value > 0) {
                cartProductIds.push(key);
                cartProductQuantity.push(value);
            }
        };

        //send this data to the form submission
        document.getElementById("submitCartIds").value = cartProductIds;
        document.getElementById("submitCartQuantity").value = cartProductQuantity;
    </script>
</body>

</html>