$(function () {
    
});

document.addEventListener("DOMContentLoaded", () => {
	var orderButton = document.querySelector('.button__wrap .js-order');
	var orderPopUp = document.querySelector('.order__popup.js-order');

	if (orderButton) {
		orderButton.addEventListener('click', function () {
			if (orderPopUp) {
				orderPopUp.classList.add("_visible");
			}
		})
	}
});