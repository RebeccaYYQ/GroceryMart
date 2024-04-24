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
        <form method="POST" action="search.php" class="flex" id="searchBar">
            <input type="text" id="search" name="query" placeholder="Search items">
            <button id="searchButton" type="submit" class="align-right"><span class="material-symbols-outlined">search</span></button>
        </form>
        <span class="material-symbols-outlined md-60 align-right">shopping_cart</span>
    </header>
    <header>
        <nav>
            <ul class="flex">
                <li><a href="#" class="active navLink">Home</a></li>
                <li><a href="#" class="navLink">Frozen</a></li>
                <li><a href="#" class="navLink">Fresh</a></li>
                <li><a href="#" class="navLink">Beverages</a></li>
                <li><a href="#" class="navLink">Pet Food</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h2>Home</h2>
        </section>


    </main>


</body>

</html>

<?php
// Check if the search query is set
if (isset($_POST['query'])) {
    // Get the search query
    $query = $_POST['query'];

    // Perform search functionality here
    // For example, you can search a database or files for the query
    // Display search results here
    echo "<h2>Search Results for '$query':</h2>";
    echo "<p>No search results found.</p>"; // Placeholder message
}
?>