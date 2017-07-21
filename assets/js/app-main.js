var dirTema = document.querySelector("meta[name='theme_path']").getAttribute('content');

require.config({
	baseUrl: '/',
    urlArgs: "v=002",
	waitSeconds : 60,
	shim: {
		"bootstrap"	: {
			deps: ['jquery'],
		},
		"flexslider" : {
			deps : ['jquery'],
		},
		'jq_ui' : {
			deps : ['jquery'],
		},
		"noty" : {
			deps : ['jquery'],
		},
        "js_socials" : {
            deps : ['jquery']
        }
	},

	paths: {
		// LIBRARY
		bootstrap 		: ['//maxcdn.bootstrapcdn.com/bootstrap/2.2.1/js/bootstrap.min','js/bootstrap.min'],
        flexslider      : '//d3kamn3rg2loz7.cloudfront.net/assets/farmashop/assets/js/lib/jquery.flexslider',
		fancybox		: '//d3kamn3rg2loz7.cloudfront.net/assets/farmashop/assets/js/lib/jquery.fancybox',
		jquery 			: '//d3kamn3rg2loz7.cloudfront.net/assets/farmashop/assets/js/lib/jquery-1.7.2.min',
		respond			: '//d3kamn3rg2loz7.cloudfront.net/assets/farmashop/assets/js/lib/respond',
		sharrre			: '//d3kamn3rg2loz7.cloudfront.net/assets/farmashop/assets/js/lib/jquery.sharrre',
        js_socials      : '//cdn.jsdelivr.net/jquery.jssocials/1.3.1/jssocials.min',

		// ROUTE
        router          : '//d3kamn3rg2loz7.cloudfront.net/js/router',
		jq_ui			: '//d3kamn3rg2loz7.cloudfront.net/js/jquery-ui',
		noty			: '//d3kamn3rg2loz7.cloudfront.net/js/jquery.noty',
		cart          	: '//d3kamn3rg2loz7.cloudfront.net/js/shop_cart',

		// CONTROLLER
		blog            : dirTema+'/assets/js/pages/blog',
		home            : dirTema+'/assets/js/pages/home',
		main            : dirTema+'/assets/js/pages/default',
		member          : dirTema+'/assets/js/pages/member',
		produk          : dirTema+'/assets/js/pages/produk',
	}
});
require([
	'router',
	'bootstrap',
	'main',
	'cart',
], function(router,b,main,cart){
	// BLOG
	router.define('blog/*', 'blog@run');
	
	// HOME
	router.define('/','home@run');
	router.define('home', 'home@run');

	// MEMBER
	router.define('member/*', 'member@run');

	// PRODUK
	router.define('produk/*', 'produk@run');
	
	router.run();
	main.run();
	cart.run();
});