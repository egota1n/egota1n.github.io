let x1 = document.querySelector('.program-block1').classList
let x2 = document.querySelector('.program-block2').classList
let x3 = document.querySelector('.program-block3').classList
let x4 = document.querySelector('.program-block4').classList
let x5 = document.querySelector('.program-block5').classList
let x6 = document.querySelector('.program-block6').classList
let x7 = document.querySelector('.program-block7').classList
let x8 = document.querySelector('.program-block8').classList
let x9 = document.querySelector('.program-block9').classList
let x10 = document.querySelector('.program-block10').classList
let x11 = document.querySelector('.program-block11').classList
let x12 = document.querySelector('.program-block12').classList

document.getElementById('input-program1').onclick = () => {
    x1.remove("active");
    x2.remove("active");
    x3.remove("active");
    x4.remove("active");
    x5.remove("active");
    x1.add("active");
};

document.getElementById('input-program2').onclick = () => {
	x1.remove("active");
    x2.remove("active");
    x3.remove("active");
    x4.remove("active");
    x5.remove("active");
    x2.add("active");
};

document.getElementById('input-program3').onclick = () => {
	x1.remove("active");
    x2.remove("active");
    x3.remove("active");
    x4.remove("active");
    x5.remove("active");
    x3.add("active");
};

document.getElementById('input-program4').onclick = () => {
	x1.remove("active");
    x2.remove("active");
    x3.remove("active");
    x4.remove("active");
    x5.remove("active");
    x4.add("active");
};

document.getElementById('input-program5').onclick = () => {
	x1.remove("active");
    x2.remove("active");
    x3.remove("active");
    x4.remove("active");
    x5.remove("active");
    x5.add("active");
};

document.getElementById('input-program6').onclick = () => {
	x6.remove("active");
    x7.remove("active");
    x8.remove("active");
    x9.remove("active");
    x10.remove("active");
    x6.add("active");
};

document.getElementById('input-program7').onclick = () => {
	x6.remove("active");
    x7.remove("active");
    x8.remove("active");
    x9.remove("active");
    x10.remove("active");
    x7.add("active");
};

document.getElementById('input-program8').onclick = () => {
	x6.remove("active");
    x7.remove("active");
    x8.remove("active");
    x9.remove("active");
    x10.remove("active");
    x8.add("active");
};

document.getElementById('input-program9').onclick = () => {
	x6.remove("active");
    x7.remove("active");
    x8.remove("active");
    x9.remove("active");
    x10.remove("active");
    x9.add("active");
};

document.getElementById('input-program10').onclick = () => {
	x6.remove("active");
    x7.remove("active");
    x8.remove("active");
    x9.remove("active");
    x10.remove("active");
    x10.add("active");
};

document.getElementById('input-program11').onclick = () => {
	x11.remove("active");
    x12.remove("active");
    x11.add("active");
};

document.getElementById('input-program12').onclick = () => {
	x11.remove("active");
    x12.remove("active");
    x12.add("active");
};

setInterval(function(){
    if (document.querySelector('.program1').classList.contains("active")){
        document.querySelector('.program-switch-all .program-switch').classList.remove("program-switch2");
        document.querySelector('.program-switch-all .program-switch').classList.remove("program-switch3");
        document.querySelector('.program-switch-all .program-switch').classList.add("program-switch1");
    }

    if (document.querySelector('.program2').classList.contains("active")){
        document.querySelector('.program-switch-all .program-switch').classList.remove("program-switch1");
        document.querySelector('.program-switch-all .program-switch').classList.remove("program-switch3");
        document.querySelector('.program-switch-all .program-switch').classList.add("program-switch2");
    }

    if (document.querySelector('.program3').classList.contains("active")){
        document.querySelector('.program-switch-all .program-switch').classList.remove("program-switch1");
        document.querySelector('.program-switch-all .program-switch').classList.remove("program-switch2");
        document.querySelector('.program-switch-all .program-switch').classList.add("program-switch3");
    }
}, 40)


document.querySelector('.program-block5 .content__about-block-arrow-next').onclick = () => {
    document.querySelector('.program1').classList.remove("active");
    document.querySelector('.program3').classList.remove("active");
    document.querySelector('.program2').classList.add("active");
};

document.querySelector('.program-block6 .content__about-block-arrow-prev').onclick = () => {
    document.querySelector('.program2').classList.remove("active");
    document.querySelector('.program3').classList.remove("active");
    document.querySelector('.program1').classList.add("active");
};

document.querySelector('.program-block10 .content__about-block-arrow-next').onclick = () => {
    document.querySelector('.program1').classList.remove("active");
    document.querySelector('.program2').classList.remove("active");
    document.querySelector('.program3').classList.add("active");
};

document.querySelector('.program-block11 .content__about-block-arrow-prev').onclick = () => {
    document.querySelector('.program1').classList.remove("active");
    document.querySelector('.program3').classList.remove("active");
    document.querySelector('.program2').classList.add("active");
};

document.querySelector('.program-switch-next').onclick = () => {
    if(document.querySelector('.program1').classList.contains("active")){
        document.querySelector('.program1').classList.remove("active");
        document.querySelector('.program3').classList.remove("active");
        document.querySelector('.program2').classList.add("active");
    } else {
        document.querySelector('.program1').classList.remove("active");
        document.querySelector('.program2').classList.remove("active");
        document.querySelector('.program3').classList.add("active");
        console.log("message")
    }
};

document.querySelector('.program-switch-prev').onclick = () => {
    if(document.querySelector('.program3').classList.contains("active")){
        document.querySelector('.program1').classList.remove("active");
        document.querySelector('.program3').classList.remove("active");
        document.querySelector('.program2').classList.add("active");
    } else {
        document.querySelector('.program3').classList.remove("active");
        document.querySelector('.program2').classList.remove("active");
        document.querySelector('.program1').classList.add("active");
    }
};


document.querySelector('#section__question-input1').onclick = () => {
    if (document.getElementById('section__question-input1').checked){
		document.querySelector('.section__question-content1').classList.add("active");
	} else{
		document.querySelector('.section__question-content1').classList.remove("active");
	}
};

document.querySelector('#section__question-input2').onclick = () => {
    if (document.getElementById('section__question-input2').checked){
		document.querySelector('.section__question-content2').classList.add("active");
	} else{
		document.querySelector('.section__question-content2').classList.remove("active");
	}
};

document.querySelector('#section__question-input3').onclick = () => {
    if (document.getElementById('section__question-input3').checked){
		document.querySelector('.section__question-content3').classList.add("active");
	} else{
		document.querySelector('.section__question-content3').classList.remove("active");
	}
};

document.querySelector('#section__question-input4').onclick = () => {
    if (document.getElementById('section__question-input4').checked){
		document.querySelector('.section__question-content4').classList.add("active");
	} else{
		document.querySelector('.section__question-content4').classList.remove("active");
	}
};

document.querySelector('#section__question-input5').onclick = () => {
    if (document.getElementById('section__question-input5').checked){
		document.querySelector('.section__question-content5').classList.add("active");
	} else{
		document.querySelector('.section__question-content5').classList.remove("active");
	}
};


