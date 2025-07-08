import 'aos/dist/aos.css'
import 'swiper/css'
import 'swiper/css/autoplay'
import 'swiper/css/effect-cards'
import 'swiper/css/navigation'
import 'swiper/css/pagination'
import 'swiper/css/thumbs'
import '../scss/tailwind/index.scss'
import '../scss/style.scss'


import AOS from 'aos'
import * as flsFunctions from './core/functions.js'
import './libs/dynamic_adapt.js'
import burger from './modules/burger.js'
import {headerFixed} from './modules/index.js'
import {scrollToAnchor} from './modules/scrollToAnchor.js'
import {ownersSlider, reviewsSlider} from './modules/sliders.js'
import tabs from './modules/tabs.js'
import Form from "./modules/Form.js";
import {getElement, getElements} from "./core/index.js";
import modalsEvents from "./modules/modalsEvents.js";
import {modal} from "./modules/modal.js";

window.FLS = true

flsFunctions.isWebp()
flsFunctions.addTouchClass()
flsFunctions.fullVHfix()

window.addEventListener('DOMContentLoaded', () => {
    try {
        AOS.init({once: true})
        if (getElement('[data-form="footer"]')) {
            new Form('[data-form="footer"]').init();
        }
        scrollToAnchor()
        headerFixed()
        burger()
        tabs()
        reviewsSlider()
        ownersSlider()
        getElements('[data-target]').forEach(item => {
                item?.addEventListener('click', () => {
                    modalsEvents(item);
                    modal.openModal()
                })
            }
        )
    } catch (e) {
        console.error(e)
    }
})
