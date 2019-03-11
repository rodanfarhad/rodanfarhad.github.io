<?php
/**
 * Right Buttons Panel.
 *
 * @package eyepress
 */

if( $theme_active == 'eyepress' ){
    $doc_link    = 'eyepress';
}elseif( $theme_active == 'eyepress-pretty' ){
    $doc_link    = 'eyepress-pretty';
}else{
    $doc_link    = $theme_active . '-free-theme';
}

?>
<div class="panel-right">
	<div class="panel-aside">
		<h4><?php _e( 'Upgrade To Pro', 'eyepress' ); ?></h4>
		<p><?php _e( 'With the Pro version, you can change the look and feel of your website in seconds. You can add pro eyepress widget. You can change copyright text and You will also get more homepage sections that you can reorder and hide as per your needs. Furthermore, the pro version comes with multiple predefined pages like contact page, about me page.', 'eyepress' ); ?></p>
		<p><?php _e( 'You will also get more frequent updates and quicker support with the Pro version.', 'eyepress' ); ?></p>
		<a class="button button-primary" href="<?php echo esc_url( 'https://wpthemespace.com/product/eyepress-pro/' ); ?>" title="<?php esc_attr_e( 'View Premium Version', 'eyepress' ); ?>" target="_blank"><?php _e( 'Read More About the Pro Theme', 'eyepress' ); ?></a>
	</div><!-- .panel-aside Theme Support -->
	<!-- Knowledge base -->
	<div class="panel-aside">
		<h4><?php _e( 'Visit the theme page', 'eyepress' ); ?></h4>
		<p><?php _e( 'You may visit our website theme page and you can buy or free download our theme. ? Visit our website and get offer.', 'eyepress' ); ?></p>
		<p><?php _e( 'Our theme is secure and SEO friendly. So you can use our theme without any hesition ', 'eyepress' ); ?></p>

		<a class="button button-primary" href="<?php echo esc_url( 'https://wpthemespace.com/themes/' ); ?>" title="<?php esc_attr_e( 'Visit the knowledge base', 'eyepress' ); ?>" target="_blank"><?php _e( 'Visit the theme page', 'eyepress' ); ?></a>
	</div><!-- .panel-aside knowledge base -->
</div><!-- .panel-right -->