let x1 = document.querySelector('.program-block1').classList
let x2 = document.querySelector('.program-block2').classList
let x3 = document.querySelector('.program-block3').classList
let x4 = document.querySelector('.program-block4').classList
let x5 = document.querySelector('.program-block5').classList

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


// document.getElementById('program__link-block1').onclick = () => {
//     document.getElementById('input-program1').checked = true;
// };

// document.getElementById('program__link-block2').onclick = () => {
//     document.getElementById('input-program2').checked = true;
// };

// document.getElementById('program__link-block3').onclick = () => {
//     document.getElementById('input-program3').checked = true;
// };

// document.getElementById('program__link-block4').onclick = () => {
//     document.getElementById('input-program4').checked = true;
// };

// document.getElementById('program__link-block5').onclick = () => {
//     document.getElementById('input-program5').checked = true;
// };