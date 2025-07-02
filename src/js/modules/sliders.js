import Swiper from 'swiper'
import { Autoplay, Navigation, Pagination } from 'swiper/modules'

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
function ownersSlider() {
	const item = document.querySelector('[data-swiper="ownersSlider"]')
	if (!item) return

	new Swiper(item, {
		modules: [Pagination, Autoplay],
		spaceBetween: 24,
		autoplay: true,
		breakpoints: {
			320: {
				slidesPerView: 1,
			},
			760: {
				slidesPerView: 2,
			},

			1024: {
				slidesPerView: 4,
			},
		},
		pagination: {
			el: item.querySelector('.swiper-pagination'),
			clickable: true,
		},
		loop: true,
	})
	console.log(item.querySelector('.swiper-pagination'))
}

export { ownersSlider, reviewsSlider }
