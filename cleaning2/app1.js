// init controller
var controller = new ScrollMagic.Controller({
	globalSceneOptions: {triggerHook: 0.3}
	// globalSceneOptions: {duration: 150}
});


// build scenes
new ScrollMagic.Scene({
	triggerElement: ".item-stages1",
})
.setClassToggle(".stages__line", "active1_1") // add class toggle
.addIndicators() // add indicators (requires plugin)
.removeIndicators()
.addTo(controller);

new ScrollMagic.Scene({
	triggerElement: ".item-stages2",
})
.setClassToggle(".stages__line", "active1_2") // add class toggle
.addIndicators() // add indicators (requires plugin)
.removeIndicators()
.addTo(controller);

new ScrollMagic.Scene({
	triggerElement: ".item-stages3",
})
.setClassToggle(".stages__line", "active1_3") // add class toggle
.addIndicators() // add indicators (requires plugin)
.removeIndicators()
.addTo(controller);