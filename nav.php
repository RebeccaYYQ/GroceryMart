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