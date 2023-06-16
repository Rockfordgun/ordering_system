function increment() {
  var quantityInput = document.getElementById("quantity");
  quantityInput.value = parseInt(quantityInput.value) + 1;
}

function decrement() {
  var quantityInput = document.getElementById("quantity");
  var currentValue = parseInt(quantityInput.value);
  if (currentValue > 0) {
    quantityInput.value = currentValue - 1;
  }
}
