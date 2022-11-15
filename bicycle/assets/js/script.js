// Code for switching cards

document.getElementById('card__switch1').onchange = () => {
	document.getElementById('section-card__content').classList.remove("active2");
	document.getElementById('section-card__content').classList.add("active1");
};

document.getElementById('card__switch2').onchange = () => {
	document.getElementById('section-card__content').classList.remove("active1");
	document.getElementById('section-card__content').classList.add("active2");
};


document.getElementById('charact__btn').onclick = function() {
	let value = document.querySelectorAll('.section-card__add-charact__input')[0].value;
	console.log(value);
}