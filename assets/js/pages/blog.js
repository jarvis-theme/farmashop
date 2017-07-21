define(['jquery','js_socials'], function($)
{
	return new function(){
		var self = this;
		self.run = function(){
			share();
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
	}
});