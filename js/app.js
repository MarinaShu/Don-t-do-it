const buttonUp = document.querySelector('#buttonUp');
buttonUp.addEventListener('click', scrollToStart);

function scrollToStart(event) {
    event.preventDefault();
    window.scroll({
        left: 0,
        top: 0,
        behavior: 'smooth',
    })
}

window.addEventListener('scroll', (event) => {
    const button = document.querySelector('#buttonUp');
    const topOfSet = 400;
    if (window.pageYOffset > topOfSet) {
        button.classList.add('visible');
    } else {
        button.classList.remove('visible')
    }
})

const smoothLinks = document.querySelectorAll('.js-menu-item');
smoothLinks.forEach(smoothLink => {
    smoothLink.addEventListener('click', (Event) => {
        Event.preventDefault();
        const id = smoothLink.getAttribute('href');

        document.querySelector(id).scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    })
})

const buttons = document.querySelectorAll('.js_button');
console.log(buttons)
buttons.forEach(button => {
    button.addEventListener('click', (event) => {
        console.log(event);
        event.target.classList.add('active');
    })
})
const span = document.querySelector('#close');
const modal = document.querySelector('#js_popup');
modal.addEventListener('click', (event) => {
    console.log(event);
    event.target.classList.remove('active');})

span.addEventListener('click', (event) => {
    console.log(event);
    event.target.classList.remove('active');})




//
//
//window.addEventListener('load', function () {
//    setBodyLoaded();
//    setAnimatedBlockLoaded();
//});
//
//function setBodyLoaded() {
//    let body = document.getElementsByTagName('body')[0];
//    body.classList.add('loaded');
//}
//
//function setAnimatedBlockLoaded() {
//    const animatedBlock = document.getElementById('animatedBlock');
//    if (!animatedBlock) {
//        return;
//    }
//
//    let reached = false;
//    const ANIMATED_BLOCK_OFFSET = 300;
//
//    window.addEventListener('scroll', () => {
//        if (window.pageYOffset + window.innerHeight > animatedBlock.offsetTop + ANIMATED_BLOCK_OFFSET) {
//            if (!reached) {
//                animatedBlock.classList.add('loaded');
//                reached = true;
//            }
//
//        }
//    })
//}
