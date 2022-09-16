/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
		'./**/*.html',
		'./**/*.blade.php'
	],
	theme: {
		screens: {
			'xs': '360px',
			'sm': '640px',
			'md': '768px',
			'lg': '1024px',
			'xl': '1280px',
			'2xl': '1536px',
		},
		extend: {
			animation: {
				'spin': 'spin 3s linear infinite',
				'portal': 'spin 1s linear infinite'
			}
		}
	},
	plugins: [
		require('tailwindcss-debug-screens'),
	]
}
