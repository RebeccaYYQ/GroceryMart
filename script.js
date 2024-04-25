// if the user clicks on the +/- buttons, change the number shown. Does not allow numbers below 0
function itemGridCart(operator) {
    var quantity = document.getElementById('1001Quantity');
    var quantityInt = Number(quantity.textContent);
    if(operator == "plus") {
        quantityInt++;
    }
    else if (operator == "minus" && quantityInt == 0) {
        //do nothing, it cannot go below 0
    }
    else {
        quantityInt--;
    }
    quantity.textContent = quantityInt;
}