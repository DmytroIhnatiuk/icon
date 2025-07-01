import 'aos/dist/aos.css'
import 'swiper/css'
import 'swiper/css/effect-cards'
import 'swiper/css/navigation'
import 'swiper/css/pagination'
import 'swiper/css/thumbs'
import '../scss/style.scss'
import '../scss/tailwind/index.scss'

import AOS from 'aos'
import * as flsFunctions from './core/functions.js'
import './libs/dynamic_adapt.js'
import burger from './modules/burger.js'
import { headerFixed } from './modules/index.js'
import { scrollToAnchor } from './modules/scrollToAnchor.js'
import { reviewsSlider } from './modules/sliders.js'
import tabs from './modules/tabs.js'

window.FLS = true

flsFunctions.isWebp()
flsFunctions.addTouchClass()
flsFunctions.fullVHfix()

window.addEventListener('DOMContentLoaded', () => {
	try {
		AOS.init({ once: true })
		scrollToAnchor()
		headerFixed()
		burger()
		tabs()
		reviewsSlider()
	} catch (e) {
		console.error(e)
	}
})
