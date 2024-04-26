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