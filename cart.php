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

    <!-- update the cart, make an AJAX query to send localStorage items to PHP so that items can be shown -->
    <script>
        //update the Cart quantity number
        updateCartQuantity();

        // Retrieve the customer's cart productIds from localStorage
        var cartProductIds = [];

        for (let i = 0; i < localStorage.length; i++) {
            key = localStorage.key(i);
            value = Number(localStorage.getItem(key));

            //if value is greater than 0, save it to the list
            value > 0 ? cartProductIds.push(key) : value;
        };

        // Send value to server using AJAX
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "cartDisplay.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send("cartProductIds=" + cartProductIds);

        // AJAX request completed successfully
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Updating page content
                console.log(xhr.responseText);
                document.getElementById("cartGridDisplay").innerHTML = xhr.responseText;

                //updating the quantity field with values from localStorage.
                for (var productId of cartProductIds) {
                    var itemQuantity = localStorage.getItem(productId);
                    document.getElementById(productId + 'Quantity').textContent = itemQuantity;
                };
            }
        }
    </script>

    <main>
        <h2>Shopping Cart</h2>
        <section class='itemGrid flex' id="cartGridDisplay">

        </section>

        <script>
            //updating the quantity field with values from localStorage.
            for (productId in cartProductIds) {
                var itemQuantity = localStorage.getItem(productId);
                document.getElementById(productId + 'Quantity').textContent = itemQuantity;
            };
        </script>
    </main>
</body>

</html>