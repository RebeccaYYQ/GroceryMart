// if the user clicks on the +/- buttons, change the number shown. Does not allow numbers below 0
//save this value to localStorage
function itemGridCart(operator, productId) {
    var quantity = document.getElementById(`${productId}Quantity`);
    var quantityInt = Number(quantity.textContent);
    if (operator == "plus") {
        quantityInt++;
    }
    else if (operator == "minus" && quantityInt == 0) {
        //do nothing, it cannot go below 0
    }
    else {
        quantityInt--;
    }
    quantity.textContent = quantityInt;

    //add to local storage
    localStorage.setItem(productId, quantityInt);

    updateCartQuantity();

    //if the page is the shopping cart and quantity is now 0, refresh the page
    if (location.pathname == "/ProgIntAs1/cart.php" && quantityInt == 0) {
        location.reload();
    }
};

//iterate through local storage. Sum up all the items the user has in their cart. Display it.
function updateCartQuantity() {
    var key, value, sum = 0;
    for (let i = 0; i < localStorage.length; i++) {
        key = localStorage.key(i);
        value = Number(localStorage.getItem(key));
        sum += value;
    }
    document.getElementById("cartQuantity").textContent = sum;
}

//clear the local storage (i.e. cart) and refresh the page
function clearCart() {
    localStorage.clear();
    location.reload();
}

//validate the email to also have a . in it
function validEmail() {
    var email = document.forms["deliveryForm"]["email"].value;

    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address");
        return false;
    }
}