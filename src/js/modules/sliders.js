import Swiper from 'swiper'
import { Navigation } from 'swiper/modules'

function reviewsSlider() {
	const item = document.querySelector('[data-swiper="reviewsSlider"]')
	if (!item) return

	new Swiper(item, {
		modules: [Navigation],
		spaceBetween: 24,
		breakpoints: {
			320: {
				slidesPerView: 1,
			},
			1024: {
				slidesPerView: 2,
			},
		},
		loop: true,
		navigation: {
			nextEl: item.querySelector('.btn-next'),
			prevEl: item.querySelector('.btn-prev'),
		},
	})
}

export { reviewsSlider }
