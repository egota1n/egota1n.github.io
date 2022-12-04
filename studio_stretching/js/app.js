let elem = document.getElementsByClassName('block--photos__atmosphere')[0].clientWidth;

const flightPath = {
	curviness: 1.25,
	autoRotate: false,
	values: [
		{x: 0, y: 0},
		{x: -elem+window.innerWidth, y: 0},
	]
};

const tween = new TimelineLite();

tween.add(
	TweenLite.to(".block--photos__atmosphere", 1, {
		bezier: flightPath,
		ease: Power1.easeInOut
	})
);

const controller = new ScrollMagic.Controller();

const scene = new ScrollMagic.Scene({
	triggerElement: ".scroll__slider",
	duration: 2000,
	triggerHook: 0
})

.setTween(tween)
.setPin('.scroll__slider')
.addIndicators({
    opacityStart: "rgba(255,255,255,0.5)",
    colorEnd: "rgba(255,255,255,0.5)",
    colorTrigger : "rgba(255,255,255,1)",
    name:name
})
.removeIndicators()
.addTo(controller);