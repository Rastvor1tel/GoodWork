$(function () {
    
})

document.addEventListener("DOMContentLoaded", () => {
	var orderButton = document.querySelector('.button__wrap .js-order');
	var orderPopUp = document.querySelector('.order__popup.js-order');

	orderButton.addEventListener('click', function(){
		orderPopUp.classList.add("_visible");
	})
});