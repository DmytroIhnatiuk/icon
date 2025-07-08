import {header} from "../core/elementsNodeList.js";
import {enableScroll, getElement, getElements} from "../core/index.js";


let loc = location.origin;
const scrollToAnchor = function () {
    if (header) {
        const links = getElements(".scroll-to");
        const burger = getElement('.burger')
        const menu = document.querySelector('header')
        const body = document.body
        links.forEach((link) => {
            link.addEventListener("click", function (event) {
                event.preventDefault();

                const blockID = link.getAttribute("href");
                const headerHeight = header.offsetHeight;
                if (
                    burger &&
                    burger.classList.contains("active")
                ) {
                    enableScroll()
                    // burger.dataset.position = '0'
                    setTimeout(() => {
                        burger.classList.remove('active')
                        menu.classList.remove('active')
                        body.classList.remove('active')
                    }, 100)
                }

                // scrollToAnotherPage(blockID, "#services");
                window.scrollTo({
                    top: getElement(`${blockID}`).offsetTop - headerHeight,
                    behavior: "smooth",
                });
            });
        });
    }
};

function scrollToAnotherPage(el, target) {
    if (target) {
        if (el === target) {
            location.href = `${loc}${target}`;
        }
    } else {
        return;
    }
}

export {scrollToAnchor};
