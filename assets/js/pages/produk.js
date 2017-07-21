define(['jquery','jq_ui','fancybox','flexslider','js_socials'], function($)
{
	return new function()
	{
		var self = this;
		var URL = window.location.protocol + "//" + window.location.host;
		self.run = function()
		{
			slider();
			share();
			
			// Fancybox function
			// $('#flexslider-product .slides a').fancybox();

			// $(".collapse").collapse();

			$('.fancybox').fancybox({
				padding: 10,
				openEffect : 'elastic',
				openSpeed  : 150,
				closeEffect : 'elastic',
				closeSpeed  : 150
			});
		};

		var share = function(){
			var link = document.querySelector("meta[name='url']").getAttribute('content');
			var text = document.querySelector("meta[name='DC.Title']").getAttribute('content');

			$("#share").jsSocials({
				url: link,
				text: text,
				showCount: false,
				showLabel: false,
				shareIn: "popup",
				shares: ["twitter", "facebook", "googleplus", "pinterest", "stumbleupon", "line", "whatsapp"]
			});
		};

		var slider = function(){
			$('.flexslider-produk').flexslider({
				animation: "pause",
				// itemWidth: 420,
				// itemMargin: 16,
				controlNav: "thumbnails",
				directionNav: false
			});

			$('#flexslider').flexslider({
				animation: "slide",
				controlNav: false,
				animationLoop: true,
				directionNav: false,
				slideshow: true,
				slideshowSpeed: 5000,
				animationSpeed: 600
			});
		};
	};
});