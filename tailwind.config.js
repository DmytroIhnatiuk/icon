/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ['./src/**/*.{html,htm,js}'],
	theme: {
		container: {
			padding: 'var(--container-gap)',
			center: true,
			screens: {
				sm: '100%',
				md: '100%',
				lg: '100%',
				xl: '100%',
			},
		},
		fontFamily: {
			body: 'Manrope',
		},

		spacing: {
			0: '0',
			1: '1px',
			2: '.02rem',
			4: '.04rem',
			6: '.06rem',
			8: '.08rem',
			10: '.1rem',
			12: '.12rem',
			14: '.14rem',
			16: '.16rem',
			20: '.2rem',
			24: '.24rem',
			26: '.26rem',
			32: '.32rem',
			36: '.36rem',
			40: '.4rem',
			50: '.5rem',
			100: '1rem',
		},
		borderWidth: {
			DEFAULT: '1px',
		},
		extend: {
			fontSize: {
				s: '.14rem',
				m: '.16rem',
				l: '.20rem',
			},
			colors: {
				bg: '#FBF8F5',
				white: '#FFFEFE',
				black: '#2D2D2D',
				khaki: '#6A6F4F',
				'light-khaki': 'rgba(134, 140, 88, 0.40)',
				'off-white': '#F6F0E7',
				gray: '#5E5E5E',
				'light-gray': '#CACACA',
				red: 'var(--red)',
			},

			borderRadius: {
				DEFAULT: '50%',
				8: '0.08rem',
				20: '0.2rem',
				30: '0.3rem',
			},
		},
	},
	plugins: [
		function ({ addUtilities }) {
			addUtilities({
				'.flex-center': {
					display: 'flex',
					alignItems: 'center',
					justifyContent: 'center',
				},
				'.position-0': {
					position: 'absolute',
					top: '0',
					right: '0',
					bottom: '0',
					left: '0',
				},
				'.-position-1': {
					position: 'absolute',
					top: '-1px',
					right: '-1px',
					bottom: '-1px',
					left: '-1px',
				},
				'.position-center': {
					position: 'absolute',
					top: '50%',
					left: '50%',
					transform: 'translate(-50%, -50%)',
				},
			})

			const base = {
				'.h1': { fontSize: '.36rem', lineHeight: '120%' },
				'.h2': { fontSize: '.28rem', lineHeight: '120%' },
				'.h3': { fontSize: '.16rem', lineHeight: '120%' },
				'.h4': { fontSize: '.18rem', lineHeight: '120%' },
			}

			const sm = {
				'@media (min-width: 640px)': {
					'.h1': { fontSize: '.6rem', lineHeight: '120%' },
					'.h2': { fontSize: '.36rem', lineHeight: '120%' },
					'.h3': { fontSize: '.18rem', lineHeight: '120%' },
					'.h4': { fontSize: '.18rem', lineHeight: '120%' },
				},
			}

			const lg = {
				'@media (min-width: 1024px)': {
					'.h1': { fontSize: '.8rem', lineHeight: '120%' },
					'.h2': { fontSize: '.4rem', lineHeight: '120%' },
					'.h3': { fontSize: '.2rem', lineHeight: '120%' },
					'.h4': { fontSize: '.2rem', lineHeight: '120%' },
				},
			}

			addUtilities(base)
			addUtilities(sm)
			addUtilities(lg)
		},
	],
}
