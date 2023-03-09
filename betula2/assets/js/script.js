// Scroll

const anchors = document.querySelectorAll('a[href*="#"]')

for (let anchor of anchors) {
anchor.addEventListener('click', function (e) {
    e.preventDefault()
    
    const blockID = anchor.getAttribute('href').substr(1)
    
    document.getElementById(blockID).scrollIntoView({
    behavior: 'smooth',
    block: 'start'
    })
})
}


let test = document.querySelectorAll('.contact-form input')

function inputStyle(){
    setInterval(() => {
        test.forEach(function callback(element) {
            if (element.value == "") {
                element.classList.remove("introduced");
            } else{
                element.classList.add("introduced");
            }
        })
    }, "1");
}



window.onload = function () {
    setTimeout(() => {
        document.body.classList.add('loaded_hiding');
        window.setTimeout(function () {
            document.body.classList.add('loaded');
            document.body.classList.remove('loaded_hiding');
        }, 500);
    }, 3000)
}