
try{

// Add CLASS
const cols = document.querySelectorAll('.item-stages');
cols.forEach((elem, i) => {
  elem.classList.add('item-stages' + i);
})

// Сhecking for the number of steps
const matches = document.getElementsByClassName('stages__item').length;
console.log(matches);

if (matches == 4){

	const element = document.querySelector('.stages');
	element.classList.add('stages-4');

	// init controller
	var controller = new ScrollMagic.Controller({
		globalSceneOptions: {triggerHook: 0.3}
		// globalSceneOptions: {duration: 150}
	});


	// build scenes
	new ScrollMagic.Scene({
		triggerElement: ".item-stages0",
	})
	.setClassToggle(".stages__line", "active1_1") // add class toggle
	.addIndicators() // add indicators (requires plugin)
	.removeIndicators()
	.addTo(controller);

	new ScrollMagic.Scene({
		triggerElement: ".item-stages1",
	})
	.setClassToggle(".stages__line", "active1_2") // add class toggle
	.addIndicators() // add indicators (requires plugin)
	.removeIndicators()
	.addTo(controller);

	new ScrollMagic.Scene({
		triggerElement: ".item-stages2",
	})
	.setClassToggle(".stages__line", "active1_3") // add class toggle
	.addIndicators() // add indicators (requires plugin)
	.removeIndicators()
	.addTo(controller);

} else {

const element = document.querySelector('.stages');
element.classList.add('stages-6');

// init controller
var controller = new ScrollMagic.Controller({
	globalSceneOptions: {triggerHook: 0.3}
	// globalSceneOptions: {duration: 150}
});


// build scenes
new ScrollMagic.Scene({
	triggerElement: ".item-stages0",
})
.setClassToggle(".stages__line", "active2_1") // add class toggle
.addIndicators() // add indicators (requires plugin)
.removeIndicators()
.addTo(controller);

new ScrollMagic.Scene({
	triggerElement: ".item-stages1",
})
.setClassToggle(".stages__line", "active2_2") // add class toggle
.addIndicators() // add indicators (requires plugin)
.removeIndicators()
.addTo(controller);

new ScrollMagic.Scene({
	triggerElement: ".item-stages2",
})
.setClassToggle(".stages__line", "active2_3") // add class toggle
.addIndicators() // add indicators (requires plugin)
.removeIndicators()
.addTo(controller);

new ScrollMagic.Scene({
	triggerElement: ".item-stages3",
})
.setClassToggle(".stages__line", "active2_4") // add class toggle
.addIndicators() // add indicators (requires plugin)
.removeIndicators()
.addTo(controller);

new ScrollMagic.Scene({
	triggerElement: ".item-stages4",
})
.setClassToggle(".stages__line", "active2_5") // add class toggle
.addIndicators() // add indicators (requires plugin)
.removeIndicators()
.addTo(controller);
}


}

catch (e) {
	
}