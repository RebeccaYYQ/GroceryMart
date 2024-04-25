<header>
    <nav>

        <form action="index.php" method="POST">
            <ul class="flex">
                <li><button type="submit" name="category" class="navButton" value="Home">Home</button></li>
                <li>
                    <div class="dropdown flex">
                        <button type="submit" name="category" class="navButton" value="Frozen">Frozen</button>
                        <div class="dropdownContent">
                            <a href="#">Frozen Meat</a>
                            <a href="#">Ice Cream</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown flex">
                        <button type="submit" name="category" class="navButton" value="Fresh">Fresh</button>
                        <div class="dropdownContent">
                            <a href="#">Fruit</a>
                            <a href="#">Vegetables</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown flex">
                        <button type="submit" name="category" class="navButton" value="Beverages">Beverages</button>
                        <div class="dropdownContent">
                            <a href="#">Coffee</a>
                            <a href="#">Juice</a>
                            <a href="#">Tea</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown flex">
                        <button type="submit" name="category" class="navButton" value="Household">Household</button>
                        <div class="dropdownContent">
                            <a href="#">Cleaning</a>
                            <a href="#">Medicine</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown flex">
                        <button type="submit" name="category" class="navButton" value="Pet Food">Pet Food</button>
                        <div class="dropdownContent">
                            <a href="#">Cat</a>
                            <a href="#">Dog</a>
                            <a href="#">Small Animals</a>
                        </div>
                    </div>
                </li>


            </ul>
            <!-- <ul class="flex">
                <select name="sDegree">
                    <option>Bachelor</option>
                    <option>Masters</option>
                    <option>PhD</option>
                </select>


                <li><a href="index.php" class="navLink">Home</a></li>
                <li><a href="navSearch.php" class="navLink" name="Frozen">Frozen</a></li>
                <li><a href="navSearch.php" class="navLink" name="Fresh">Fresh</a></li>
                <li><a href="navSearch.php" class="navLink" name="Beverages">Beverages</a></li>
                <li><a href="navSearch.php" class="navLink" name="Pet Food">Pet Food</a></li>
            </ul> -->
        </form>
    </nav>
</header>