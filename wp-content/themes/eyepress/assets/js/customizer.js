/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );


	// Banner text 
	wp.customize( 'eyepress_welcome_text', function( value ) {
		value.bind( function( to ) {
			$( 'h3.eyepress-welcome' ).text( to );
		} );
	} );

	wp.customize( 'eyepress_author_name', function( value ) {
		value.bind( function( to ) {
			$( 'h1.eyepress-author' ).text( to );
		} );
	} );
	wp.customize( 'eyepress_author_designation', function( value ) {
		value.bind( function( to ) {
			$( 'h4.eyepress-sub' ).text( to );
		} );
	} );
	wp.customize( 'eyepress_header_text', function( value ) {
		value.bind( function( to ) {
			$( 'p.eyepress-desc' ).text( to );
		} );
	} );
	wp.customize( 'eyepress_btn_text_one', function( value ) {
		value.bind( function( to ) {
			$( 'a.marbnt1' ).text( to );
		} );
	} );
	wp.customize( 'eyepress_btn_text_two', function( value ) {
		value.bind( function( to ) {
			$( 'a.marbnt2' ).text( to );
		} );
	} );
	//Side menu 
	wp.customize( 'eyepress_sidemenu_name', function( value ) {
		value.bind( function( to ) {
			$( 'h6.side-author' ).text( to );
		} );
	} ); 
	wp.customize( 'eyepress_sidemenu_title', function( value ) {
		value.bind( function( to ) {
			$( 'h6.side-title' ).text( to );
		} );
	} ); 
	wp.customize( 'eyepress_sidemenu_phone', function( value ) {
		value.bind( function( to ) {
			$( 'h6.side-phone' ).text( to );
		} );
	} );
	wp.customize( 'eyepress_sidemenu_email', function( value ) {
		value.bind( function( to ) {
			$( 'h6.side-mail' ).text( to );
		} );
	} );
	wp.customize( 'eyepress_sidemenu_birth_date', function( value ) {
		value.bind( function( to ) {
			$( 'h6.side-birth' ).text( to );
		} );
	} );
	wp.customize( 'eyepress_sidemenu_age', function( value ) {
		value.bind( function( to ) {
			$( 'h6.side-age' ).text( to );
		} );
	} );
	wp.customize( 'eyepress_sidemenu_residence', function( value ) {
		value.bind( function( to ) {
			$( 'h6.side-residence' ).text( to );
		} );
	} );
	wp.customize( 'eyepress_sidemenu_work', function( value ) {
		value.bind( function( to ) {
			$( 'h6.side-work' ).text( to );
		} );
	} );
	wp.customize( 'eyepress_blog_home_title', function( value ) {
		value.bind( function( to ) {
			$( 'h1.merats-blog-title' ).text( to );
		} );
	} );
	wp.customize( 'eyepress_blog_home_desc', function( value ) {
		value.bind( function( to ) {
			$( 'p.eyepress-blog-desc' ).text( to );
		} );
	} );
	wp.customize( 'eyepress_fourzerofour_heading', function( value ) {
		value.bind( function( to ) {
			$( '.error-content h4' ).text( to );
		} );
	} );
	wp.customize( 'eyepress_fourzerofour_desc', function( value ) {
		value.bind( function( to ) {
			$( '.error-content p' ).text( to );
		} );
	} );


	// Footer text.
	wp.customize( 'eyepress_footer_text', function( value ) {
		value.bind( function( to ) {
			$( 'footer .copyright p' ).text( to );
		} );
	} );





} )( jQuery );
