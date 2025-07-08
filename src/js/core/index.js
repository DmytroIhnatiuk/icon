import {body, header} from "./elementsNodeList.js";


function getElement(selector, element = document) {
    return element.querySelector(selector);
}

function getElements(selector, element = document) {
    return element.querySelectorAll(selector);
}

function disableScrollAndSwipes(scrollPosition) {
    body.style.position = 'fixed';
    body.style.top = `-${scrollPosition}px`;
    body.classList.add('fixed');
    header.style.top = `0px`;
    body.style.overflow = 'hidden';
}

function enableScrollAndSwipes(scrollPosition) {
    body.style.position = 'relative';
    body.style.top = '0';
    body.style.overflow = 'auto';
    body.classList.remove('fixed');
    window.scrollTo({
        top: +scrollPosition,
        behavior: "auto"
    });
    // window.scrollTo(0, scrollPosition);

}
function preventDefault(e) {
    const modal = document.querySelector('.modal .accordion'); // Укажите ваш селектор модального окна
    if (modal && modal.contains(e.target)) {
        // Если событие происходит внутри модального окна, не блокируем
        return;
    }
    e.preventDefault();
    e.stopPropagation();
    return false;
}
function disableScroll() {
    window.addEventListener('wheel', preventDefault, {passive: false});
    window.addEventListener('touchmove', preventDefault, {passive: false});
}

function enableScroll() {
    window.removeEventListener('wheel', preventDefault, {passive: false});
    window.removeEventListener('touchmove', preventDefault, {passive: false});
}


export {
    disableScrollAndSwipes,
    enableScrollAndSwipes,
    getElements,
    getElement,
    enableScroll,
    disableScroll,

};