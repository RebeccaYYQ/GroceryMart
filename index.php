<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Grocery Mart</title>
</head>

<body>
    <header class="flex">
        <img id="shopIcon" src="images/shopIcon.png">
        <h1>Grocery Mart</h1>
        <div class="align-right flex">
            <form method="POST" action="search.php" class="flex" id="searchBar">
                <input type="text" id="search" name="query" placeholder="Search items" size="47">
                <button id="searchButton" type="submit" class="align-right"><span class="material-symbols-outlined">search</span></button>
            </form>
            <span class="material-symbols-outlined md-60">shopping_cart</span>
        </div>
    </header>
    <?php require 'nav.php'; ?>

    <main>
        <h2>Home</h2>

        <section class="itemGrid flex">
            <div class="productItem flex">
                <img src="images/shopIcon.png" class="productItemImage">
                <p class="productItemContent"><b>Product Name</b><br>
                    Price per unit <br>
                    Stock:</p>
                <form method="post" action="process.php">
                    <button class="quantity-btn" type="button" name="decrease">-</button>
                    <input type="number" class="quantity-field" name="quantity" value="1">
                    <button class="quantity-btn" type="button" name="increase">+</button>
                    <button class="submit-btn" type="submit" name="submit">Submit</button>
                </form>
            </div>
            <div class="productItem flex">
                <img src="images/shopIcon.png" class="productItemImage">
                <p class="productItemContent"><b>Product Name</b><br>
                    Price per unit <br>
                    Stock:</p>
                <form method="post" action="process.php">
                    <button class="quantity-btn" type="button" name="decrease">-</button>
                    <input type="number" class="quantity-field" name="quantity" value="1">
                    <button class="quantity-btn" type="button" name="increase">+</button>
                    <button class="submit-btn" type="submit" name="submit">Submit</button>
                </form>
            </div>
            <div class="productItem flex">
                <img src="images/shopIcon.png" class="productItemImage">
                <p class="productItemContent"><b>Product Name</b><br>
                    Price per unit <br>
                    Stock:</p>
                <form method="post" action="process.php">
                    <button class="quantity-btn" type="button" name="decrease">-</button>
                    <input type="number" class="quantity-field" name="quantity" value="1">
                    <button class="quantity-btn" type="button" name="increase">+</button>
                    <button class="submit-btn" type="submit" name="submit">Submit</button>
                </form>
            </div>
            <div class="productItem flex">
                <img src="images/shopIcon.png" class="productItemImage">
                <p class="productItemContent"><b>Product Name</b><br>
                    Price per unit <br>
                    Stock:</p>
                <form method="post" action="process.php">
                    <button class="quantity-btn" type="button" name="decrease">-</button>
                    <input type="number" class="quantity-field" name="quantity" value="1">
                    <button class="quantity-btn" type="button" name="increase">+</button>
                    <button class="submit-btn" type="submit" name="submit">Submit</button>
                </form>
            </div>
            <div class="productItem flex">
                <img src="images/shopIcon.png" class="productItemImage">
                <p class="productItemContent"><b>Product Name</b><br>
                    Price per unit <br>
                    Stock:</p>
                <form method="post" action="process.php">
                    <button class="quantity-btn" type="button" name="decrease">-</button>
                    <input type="number" class="quantity-field" name="quantity" value="1">
                    <button class="quantity-btn" type="button" name="increase">+</button>
                    <button class="submit-btn" type="submit" name="submit">Submit</button>
                </form>
            </div>
            <div class="productItem flex">
                <img src="images/shopIcon.png" class="productItemImage">
                <p class="productItemContent"><b>Product Name</b><br>
                    Price per unit <br>
                    Stock:</p>
                <form method="post" action="process.php">
                    <button class="quantity-btn" type="button" name="decrease">-</button>
                    <input type="number" class="quantity-field" name="quantity" value="1">
                    <button class="quantity-btn" type="button" name="increase">+</button>
                    <button class="submit-btn" type="submit" name="submit">Submit</button>
                </form>
            </div>
        </section>
    </main>


</body>

</html>