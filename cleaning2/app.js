// init controller
var controller = new ScrollMagic.Controller({
	globalSceneOptions: {triggerHook: 0.3}
	// globalSceneOptions: {duration: 150}
});


// build scenes
new ScrollMagic.Scene({
	triggerElement: ".item-stages1",
})
.setClassToggle(".stages__line", "active1") // add class toggle
.addIndicators() // add indicators (requires plugin)
.removeIndicators()
.addTo(controller);

new ScrollMagic.Scene({
	triggerElement: ".item-stages2",
})
.setClassToggle(".stages__line", "active2") // add class toggle
.addIndicators() // add indicators (requires plugin)
.removeIndicators()
.addTo(controller);

new ScrollMagic.Scene({
	triggerElement: ".item-stages3",
})
.setClassToggle(".stages__line", "active3") // add class toggle
.addIndicators() // add indicators (requires plugin)
.removeIndicators()
.addTo(controller);






// const flightPath = {
// 	curviness: 1.25,
// 	autoRotate: true,
// 	values: [
// 		{x: 100, y: -20},
// 		{x: 300, y: 10},
// 		{x: 500, y: 100},
// 		{x: 750, y: -100},
// 		{x: 350, y: -50},
// 		{x: 600, y: 100},
// 		{x: 800, y: 0},
// 		{x: window.innerWidth, y: -250},
// 	]
// };

// const tween = new TimelineLite();

// tween.add(
// 	TweenLite.to(".paper-plane", 1, {
// 		bezier: flightPath,
// 		ease: Power1.easeInOut
// 	})
// );

// const controller = new ScrollMagic.Controller();

// const scene = new ScrollMagic.Scene({
// 	triggerElement: ".animation",
// 	duration: 2000,
// 	triggerHook: 0
// })

// .setTween(tween)
// .setPin('.animation')
// .addIndicators({
//     opacityStart: "rgba(255,255,255,0.5)",
//     colorEnd: "rgba(255,255,255,0.5)",
//     colorTrigger : "rgba(255,255,255,1)",
//     name:name
// })
// .addTo(controller);