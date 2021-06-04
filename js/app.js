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
//
// const popupLinks = document.querySelectorAll('.js-button')
// let unlock = true;
//
// if (popupLinks.length > 0) {
//     for (let index = 0; index < popupLinks.length; index++){
//         const  popupLink = popupLinks[index];
//         popupLink.addEventListener('click', function (e){
//             const popupName = popupLink.getAttribute('href').replace('#','');
//             const curentPopup = document.getElementById(popupName);
//             popupOpen(curentPopup);
//             e.preventDefault();
//         })
//     }
// }
//
// const  popupCloseIcon = document.querySelectorAll('.js-close');
// if (popupCloseIcon.length >0 ) {
//     for (let index = 0; index < popupCloseIcon.length; index++) {
//         const el = popupCloseIcon[index];
//         el.addEventListener('click', function (e) {
//             popupClose(el.closest('.popup'));
//             e.preventDefault();
//         });
//     }
// }
//
// function popupOpen(curentPopup) {
//     if (curentPopup && unlock){
//         curentPopup.classList.add('open');
//         curentPopup.addEventListener('click', function (e) {
//             if (!e.target.closest('.popup__content')) {
//                 popupClose(e.target.closest('.popup'));
//         }});
//     }
// }
//
// const burger = document.querySelector('.header__burger');
// burger.addEventListener('click', (event) => {
//     if (window.pageYOffset > topOfSet) {
//         button.classList.add('visible');
//     } else {
//         button.classList.remove('visible')
//     }
// })


//  Получите модальный
const modal = document.getElementById('js_popup');

//  Получите кнопку, открывающую модальное окно
const btn = document.getElementsByClassName("js_button")[0];

//  Получите элемент <span>, закрывающий модальный
const span = document.getElementsByClassName("close")[0];

// Когда пользователь нажимает кнопку, открывается модальный
btn.onclick = function() {
    modal.style.display = "block";
}

//Когда пользователь нажимает <span> (x), закройте модальный
span.onclick = function() {
    modal.style.display = "none";
}

// Когда пользователь щелкает где-нибудь за пределами модального окна, закройте его.
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}





























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
