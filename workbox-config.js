module.exports = {
	globDirectory: '.',
	globPatterns: [
		'**/*.{php,css,png,jpg,js,eot,svg,ttf,woff,woff2,scss,otf,pdn,jpeg,json,html,md,rar}'
	],
	swDest: 'sw.js',
	ignoreURLParametersMatching: [
		/^utm_/,
		/^fbclid$/
	]
};