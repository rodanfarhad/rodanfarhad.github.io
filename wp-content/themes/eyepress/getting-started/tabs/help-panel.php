<?php
/**
 * Help Panel.
 *
 * @package eyepress
 */

if( $theme_active == 'eyepress' ){
    $doc_link    = 'eyepress';
}elseif( $theme_active == 'eyepress-pro' ){
    $doc_link    = 'eyepress';
}else{
    $doc_link    = $theme_active . '-free-theme';
}

?>
<!-- Help file panel -->
<div id="help-panel" class="panel-left visible">

    <div class="panel-aside">
        <h4 class="pro-title"><?php _e( 'Upgrade To Pro', 'eyepress' ); ?></h4>
        <p><?php esc_html_e( 'You will get more frequent updates and quicker support with the Pro version.', 'eyepress' ) ?></p>
        <p><?php _e( 'With the Pro version, you can change the look and feel of your website in seconds.', 'eyepress' ); ?></p>
        <p><strong><?php _e( 'See some extra pro features.', 'eyepress' ); ?></strong></p>
        <ul class="pro-list">
            <li><?php esc_html_e( 'Gutenberg Compatible WordPress theme.', 'eyepress' ) ?></li>
            <li><?php esc_html_e( 'One click demo install.', 'eyepress' ) ?></li>
            <li><?php esc_html_e( 'Theme Options and well documented', 'eyepress' ) ?></li>
            <li><?php esc_html_e( 'Unique design and elegant layout', 'eyepress' ) ?></li>
            <li><?php esc_html_e( 'Simple & clean and well organized theme', 'eyepress' ) ?></li>
            <li><?php esc_html_e( 'Masonry grid blog layout', 'eyepress' ) ?></li>
        </ul>
        <a class="button button-primary" href="<?php echo esc_url( 'http://eyepress.wpthemespace.com/doc-eyepress/' ); ?>" title="<?php esc_attr_e( 'Visit the Documentation', 'eyepress' ); ?>" target="_blank"><?php _e( 'Read More About the Pro Theme', 'eyepress' ); ?></a>
    </div><!-- .panel-aside -->

    <div class="panel-aside">
        <h4><?php _e( 'View Our Documentation Link', 'eyepress' ); ?></h4>
        <p><?php _e( 'Want to know all EyePress theme features? Our documentation has step by step procedure to create a beautiful website by EyePress WordPress theme.', 'eyepress' ); ?></p>
        <a class="button button-primary" href="<?php echo esc_url( 'http://eyepress.wpthemespace.com/doc-eyepress/' ); ?>" title="<?php esc_attr_e( 'Visit the Documentation', 'eyepress' ); ?>" target="_blank"><?php _e( 'View Documentation', 'eyepress' ); ?></a>
    </div><!-- .panel-aside -->
    
    <div class="panel-aside">
        <h4><?php _e( 'Support Forums', 'eyepress' ); ?></h4>
        <p><?php printf( __( 'It\'s always a good idea to see our %1$sdocumentation%2$s before you send us a support request.', 'eyepress' ), '<a href="'. esc_url( 'http://eyepress.wpthemespace.com/doc-eyepress/' ) .'" target="_blank">', '</a>' ); ?></p>
        <p><?php _e( 'If the documentation didn\'t answer your queries, submit us a support ticket here. Our response time usually is less than a business day, except on the weekends. If you want to quick the contact with our website Facebook messenger', 'eyepress' ); ?></p>
        <a class="button button-primary" href="<?php echo esc_url( 'https://wpthemespace.com/support/' ); ?>" title="<?php esc_attr_e( 'Visit the Support', 'eyepress' ); ?>" target="_blank"><?php _e( 'Visit Contact Support', 'eyepress' ); ?></a>
    </div><!-- .panel-aside -->

    <div class="panel-aside">
        <h4><?php _e( 'View Our Demo', 'eyepress' ); ?></h4>
        <p><?php _e( 'Vist the demo to get more ideas about out theme design.', 'eyepress' ); ?></p>
        <a class="button button-primary" href="<?php echo esc_url( 'http://eyepress.wpthemespace.com/' ); ?>" title="<?php esc_attr_e( 'Visit the Demo', 'eyepress' ); ?>" target="_blank"><?php _e( 'View Demo', 'eyepress' ); ?></a>
    </div><!-- .panel-aside -->
</div>
