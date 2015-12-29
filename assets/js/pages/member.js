define(['jquery'], function(){
	return new function(){
		var self = this;
		var URL = window.location.protocol + "//" + window.location.host;
		var lod ="<img src='"+URL+"/img/ajax-loader.gif' id='lod'>";
		self.run = function(){
			// Tab function
			$('#myTab a, #myTab button').click(function (e) {
				e.preventDefault();
				$(this).tab('show');
			});			
		};

	};
});