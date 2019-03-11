jQuery( document ).ready(function() {


	var creativeily_menu_element1;
	var creativeily_menu_element2=new Array();
	var creativeily_level;
	creativeily_level=0;

	jQuery('#creativeily-menu-back').hide();
	jQuery('#creativeily-menu-home').hide();

	jQuery("#top-menu .page_item_has_children, #top-menu .menu-item-has-children" ).append( '<strong class="creativeily-submenu-button"><span class="dashicons dashicons-plus-alt"></span></strong>' );

	jQuery( "#top-menu > ul li .creativeily-submenu-button" ).click(function() {
		if(creativeily_level==0) {
		creativeily_menu_element1=this;
		creativeily_level=1;

		jQuery(creativeily_menu_element1).closest('li').find('> ul').css("left", "100%");
    	jQuery(creativeily_menu_element1).closest('li').find('ul').show();
    	jQuery(creativeily_menu_element1).closest('li').find('> ul').css("opacity", "0");
    	jQuery(creativeily_menu_element1).closest('li').find('> ul').animate({left: '0%', opacity: 1});

		jQuery('#creativeily-menu-back').slideToggle();
		jQuery('#creativeily-menu-home').slideToggle();


		}
	});

	jQuery( "ul li ul li .creativeily-submenu-button" ).click(function() {

		creativeily_level++;
		creativeily_menu_element2[creativeily_level]=this;

		jQuery(creativeily_menu_element2[creativeily_level]).closest('li').find('> ul').css("left", "100%");
		jQuery(creativeily_menu_element2[creativeily_level]).closest('li').find('ul').show();
		jQuery(creativeily_menu_element2[creativeily_level]).closest('li').find('ul').css("opacity", "0");
		jQuery(creativeily_menu_element2[creativeily_level]).closest('li').find('> ul').animate({left: '0%', opacity: 1});				

	});

	jQuery( "#creativeily-menu-home, .mobile-bar").click(function() {

		jQuery(".header-menu ul ul").animate({opacity: "0", left: "100%"});
		creativeily_level=0;
		jQuery('#creativeily-menu-back').hide();
		jQuery('#creativeily-menu-home').hide();
	});

	jQuery( "#creativeily-menu-back" ).click(function() {

		if(creativeily_level>0) {
			
			if(creativeily_level==1) {
				
				creativeily_level=0;
				
				jQuery(creativeily_menu_element1).closest('li').find('> ul').animate({left: '100%', opacity: 0}, 'slow', 'swing', function() {
					jQuery(creativeily_menu_element1).closest('li').find('ul').hide();
		    		jQuery('#creativeily-menu-back').slideToggle();
		    		jQuery('#creativeily-menu-home').slideToggle();

		  		});

			}
			if(creativeily_level>=2) {

				jQuery(creativeily_menu_element2[creativeily_level]).closest('li').find('> ul').animate({left: '100%', opacity: 0}, 'slow', 'swing', function() {
					jQuery(creativeily_menu_element2[creativeily_level]).closest('li').find('ul').hide();
					creativeily_level--;
		  		});

		  		
				
			}
		}
	});
});
