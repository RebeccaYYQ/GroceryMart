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
</body>

</html>

<?php
$conn = mysqli_connect("localhost", "root", "", "progintas1");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit;
}

//put queries here
$query_string = "select * from as1db";

$result = mysqli_query($conn, $query_string);
$num_rows = mysqli_num_rows($result);
if ($num_rows > 0) {
    print "<table border='0'>";
    while ($a_row = mysqli_fetch_row($result)) {
        print "<tr>\n";
        foreach ($a_row as $field)
            print "\t<td>$field</td>\n";
        print "</tr>";
    }
    print "</table>";
}

mysqli_close($conn);
?>