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
            <form method="POST" action="index.php" class="flex" id="searchBar">
                <input type="text" id="search" name="searchQuery" placeholder="Search items" size="47">
                <button id="searchButton" type="submit" class="align-right"><span class="material-symbols-outlined">search</span></button>
            </form>
            <a href="cart.html" class="flex">
                <span class="material-symbols-outlined md-60">shopping_cart</span>
                <span id="cartQuantity">0</span>
            </a>
        </div>
    </header>
    <header>
        <nav>
            <form action="index.php" method="POST">
                <ul class="flex">
                    <li><button type="submit" name="category" class="navButton" value="Home">Home</button></li>
                    <li>
                        <div class="dropdown flex">
                            <button type="submit" name="category" class="navButton" value="Frozen">Frozen</button>
                            <div class="dropdownContent">
                                <button type="submit" name="subCategory" class="navSubButton" value="Frozen Meat">Frozen Meat</button>
                                <button type="submit" name="subCategory" class="navSubButton" value="Ice Cream">Ice Cream</button>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown flex">
                            <button type="submit" name="category" class="navButton" value="Fresh">Fresh</button>
                            <div class="dropdownContent">
                                <button type="submit" name="subCategory" class="navSubButton" value="Fruit">Fruit</button>
                                <button type="submit" name="subCategory" class="navSubButton" value="Vegetable">Vegetable</button>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown flex">
                            <button type="submit" name="category" class="navButton" value="Beverages">Beverages</button>
                            <div class="dropdownContent">
                                <button type="submit" name="subCategory" class="navSubButton" value="Coffee">Coffee</button>
                                <button type="submit" name="subCategory" class="navSubButton" value="Juice">Juice</button>
                                <button type="submit" name="subCategory" class="navSubButton" value="Tea">Tea</button>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown flex">
                            <button type="submit" name="category" class="navButton" value="Household">Household</button>
                            <div class="dropdownContent">
                                <button type="submit" name="subCategory" class="navSubButton" value="Cleaning">Cleaning</button>
                                <button type="submit" name="subCategory" class="navSubButton" value="Medicine">Medicine</button>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown flex">
                            <button type="submit" name="category" class="navButton" value="Pet Food">Pet Food</button>
                            <div class="dropdownContent">
                                <button type="submit" name="subCategory" class="navSubButton" value="Cat">Cat</button>
                                <button type="submit" name="subCategory" class="navSubButton" value="Dog">Dog</button>
                                <button type="submit" name="subCategory" class="navSubButton" value="Small Animals">Small Animals</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </form>
        </nav>
    </header>

    <main>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "progintas1");
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit;
        }

        //if category is set, then use it. Else if subCategory is set, use that. Else if its a search, use that query. Else use home (i.e. when page first opens)
        if (isset($_POST['category']) && $_POST['category'] != 'Home') {
            $category = $title = $_POST['category'];
            $query_string = "select * from as1db where product_category = '$category'";
        } else if (isset($_POST['subCategory'])) {
            $subCategory = $title = $_POST['subCategory'];
            $query_string = "select * from as1db where product_subcategory = '$subCategory'";
        } else if (isset($_POST['searchQuery'])) {
            $searchQuery = $_POST['searchQuery'];
            $title = "Search results for '" . $searchQuery . "'";
            $query_string = "select * from as1db where product_name like '%$searchQuery%'";
        } else {
            $category = $title = 'Home';
            $query_string = "select * from as1db";
        }

        //set the page title and cart quantity
        echo "<h2>$title</h2>
                <section class='itemGrid flex'>";

        echo "<script>updateCartQuantity();</script>";

        //show the DB results
        $result = mysqli_query($conn, $query_string);
        $num_rows = mysqli_num_rows($result);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='productItem flex'>
                        <img src='images/{$row['product_id']}.jpg' class='productItemImage'>
                        <p class='productItemContent'><b>{$row['product_name']}</b><br>
                        \${$row['unit_price']} per {$row['unit_quantity']} <br>
                        Stock: {$row['in_stock']}</p>
                        <div class='flex'>
                            <button class='quantityBtn' type='button' onClick='itemGridCart(\"minus\", \"{$row['product_id']}\")'>-</button>
                            <p class='quantityField' id='{$row['product_id']}Quantity'>0</p>";
                //if the item is not in stock, show a button that is disabled
                if ($row['in_stock'] == 0) {
                    echo   "<button disabled class='quantityBtn' type='button' onClick='itemGridCart(\"plus\", \"{$row['product_id']}\")'>+</button>";
                } else {
                    echo   "<button class='quantityBtn' type='button' onClick='itemGridCart(\"plus\", \"{$row['product_id']}\")'>+</button>";
                }
                echo "</div>
                    </div>";

                //updating the quantity field with values from localStorage. If null, set it to 0
                echo "<script>
                    var itemQuantity = localStorage.getItem('{$row['product_id']}');
                    itemQuantity == null ? itemQuantity = '0' : itemQuantity;
                
                    document.getElementById('{$row['product_id']}Quantity').textContent = itemQuantity;
                </script>";
            }
        }
        mysqli_close($conn);
        ?>
        </section>
    </main>


</body>

</html>