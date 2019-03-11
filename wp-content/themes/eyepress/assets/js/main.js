
(function ($) {
 "use strict";

	// addClass on Body
	var darkVersion = $('.dark-version');
		darkVersion.parent('body').addClass('black-bg');

	/*
	dark version class add remove
	================================== */
		var eyepressColor = $(".eyepress-dark-version .about-area, .eyepress-dark-version .skill-area, .eyepress-dark-version .portfolio-area, .eyepress-dark-version .testimonial-area, .eyepress-dark-version .blog-area");
		eyepressColor.removeClass("white-bg");
		eyepressColor.addClass("dark-version black-bg");

		var eyepressColorTwo = $(".eyepress-dark-version .services-area, .eyepress-dark-version .exprience-area, .eyepress-dark-version .exapnd-sidebar");
		eyepressColorTwo.removeClass("light-bg");
		eyepressColorTwo.addClass("dark-version dark-bg");

		var eyepressDarkBlog = $(".eyepress-dark-blog .site-content");
		    eyepressDarkBlog.addClass("dark-version black-bg");

		 


		// add active class in front menu
		var eyepressFrontActive = $(".eyepress-front #primary-menu li:first-child");
		eyepressFrontActive.addClass("active");
	/*
	ONE PAGE CLICK REMOVE IN CLASS
	================================== */
	var menuLiA = $('.onepage-menu li a');
		menuLiA.on('click', function(e) {
			var navColl = $('.navbar-collapse ul');
			if ( $(e.target).is('a') ) {
				navColl.parent().removeClass('in');
				navHeaderButton.removeClass('replace');
			}
		});
	// Menu Button Text Change
	var navHeaderButton = $('.navbar-header button');
		navHeaderButton.on('click', function(e) {
			navHeaderButton.toggleClass('replace');
		});
	
	/*
	STICKY
	================================== */
	var activeSticky = $('#active-sticky'),
		windowScroll = $(window);
		windowScroll.on('scroll',function() {
			var scroll = $(window).scrollTop();
			var isSticky = activeSticky;
			if (scroll < 80) {
				isSticky.removeClass("is-sticky");
			}
			else{
				isSticky.addClass("is-sticky");
			}
		});
	/*
	RT ANIMATION
	================================== */
	var rtAnimateNot = $('.rt-animate:not(.rt-animate-show)');
		rtAnimateNot.each(function() {
			var $rtElement = $(this);
			$rtElement.waypoint(function() {
				$rtElement.addClass('rt-animate-show');
			},
			{
				offset: $rtElement.data('rt-offset')
			});
		});
	
	/*
	EXPEND MENU 
	================================== */
	var exapndIcon = $('.expand-icon'),
		expandSidebar = $('.exapnd-sidebar');
		exapndIcon.on("click", function(e) {
			expandSidebar.toggleClass("slide_right");
			exapndIcon.toggleClass("close_icon");
			e.stopPropagation()
		});
	$(document).on('click', function(e) {
		var $selectOtherSide = $('.exapnd-sidebar,.expand-icon');
		if (!$selectOtherSide.is(e.target) && $selectOtherSide.has(e.target).length === 0) {
			expandSidebar.removeClass("slide_right");
			exapndIcon.removeClass("close_icon");
		}
	});
	
	/*
	ONE PAGE MENU
	================================== */
	var mainMenu = $('.onepage-menu nav'); 
		var headerTopOffset = $('header').height(); 
			mainMenu.onePageNav({
			currentClass: 'active',
			scrollThreshold: 0.2,
			scrollSpeed: 1000,
			scrollOffset: headerTopOffset - 20,
		});
	
	/*
	SMOOTH SCROLL
	================================ */
	var smScroll = $('.smooth-scroll a');
		if (smScroll.length > 0) {
			smScroll.on('click', function() {
				$.smoothScroll({
				  offset: -60,
				  scrollTarget: this.hash,
				  speed: 1000,
				});
				return false;
			});
		}


	
	/*
	PROGRESS WITH WAYPOINT ACTIVE
	================================== */
	var inWaypoint = $('.skill-progress');
		if (inWaypoint.length > 0) {
			inWaypoint.waypoint(function () {
				// element 
				jQuery('.skill-bar').each(function() {
					jQuery(this).find('.progress-content').animate({
						width:jQuery(this).attr('data-percentage')
					},2000);
					
					jQuery(this).find('.progress-mark').animate(
					{left:jQuery(this).attr('data-percentage')},
				{
					duration: 2150,
					step: function(now, fx) {
						var data = Math.round(now);
						jQuery(this).find('.percent').html(data + '%');
					}
				});  
				
				});
			}, {offset: '90%'});
		}
	/*
    SLICK CAROUSEL AS NAV
    ===================================*/
    var oneItem = $('#one-item'),
		bgSlider = $('#bg-slider');
		if (oneItem.length) {
			oneItem.slick({
				dots: true,
				arrows: false,
			});
		}
		if (bgSlider.length) {
			bgSlider.slick({
				dots: false,
				arrows: false,
				fade: true,
				autoplay: true,
				speed: 2000,
				autoplaySpeed: 4000
			});
		}

	/*
	SCROLLUP
	=================== */
	$.scrollUp({
		scrollText: '<i class="zmdi zmdi-chevron-up"></i>',
		easingType: 'linear',
		scrollSpeed: 900,
		animation: 'fade'
	});
		jQuery(window).on('load', function(){
		
        // Preloader
        var preeLoad = $('#loading-wrap');
			preeLoad.fadeOut(1000);

    	});
	

})(jQuery);