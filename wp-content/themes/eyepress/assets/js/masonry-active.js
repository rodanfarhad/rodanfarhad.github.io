(function ($) {
 "use strict";
		jQuery(window).on('load', function(){
			
			// masonry active
			var container = document.querySelector('#eyepress-masonry');
		    //create empty var msnry
		    var msnry;
		    // initialize Masonry after all images have loaded
		    imagesLoaded( container, function() {
		        msnry = new Masonry( container, {
		            itemSelector: '.masonry-entry'
		        });
		    });

    	});

})(jQuery);