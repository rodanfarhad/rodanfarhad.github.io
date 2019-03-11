<?php
/**
 * Help Panel.
 *
 * @package eyepress
 */
?>
<!-- Updates panel -->
<div id="plugins-panel" class="panel-left">
	<h4><?php _e( 'Recommended Plugins', 'eyepress' ); ?></h4>

	<p><?php printf( __( 'Below is a list of recommended plugins to install that will help you get the most out of %1$s. Although each plugin is optional, it is recommended that you at least install the eyepressThemes Toolkit, eyepressThemes Email Newsletter & eyepressThemes Instagram Feed to create a website similar to the %1$s demo.', 'eyepress' ), $theme['Name'] ); ?></p>

	<hr/>

	<?php 
	$free_plugins = array(

		'eyepressthemes-toolkit' => array(
			'slug'     	=> 'eyepressthemes-toolkit',
			'filename' 	=> 'eyepressthemes-toolkit.php',
		),

		'eyepressthemes-email-newsletter' => array(
			'slug' 	 	=> 'eyepressthemes-email-newsletter',
			'filename'  => 'eyepressthemes-email-newsletter.php',
		),

		'eyepressthemes-instagram-feed' => array(
			'slug' 		=> 'eyepressthemes-instagram-feed',
			'filename' 	=> 'eyepressthemes-instagram-feed.php',
		),

		'regenerate-thumbnails' => array(
			'slug' 		=> 'regenerate-thumbnails',
			'filename' 	=> 'regenerate-thumbnails.php',
		),

	);

	if( !empty( $free_plugins ) ) { ?>
		<h4 class="recomplug-title"><?php echo esc_html__( 'Free Plugins', 'eyepress' ); ?></h4>
		<p><?php echo esc_html__( 'These Free Plugins might be handy for you.', 'eyepress' ); ?></p>
		<div class="recomended-plugin-wrap">
		<?php
		foreach( $free_plugins as $plugin ) {
			$info = eyepress_call_plugin_api( $plugin['slug'] );
			$icon_url = eyepress_check_for_icon( $info->icons );
			?>

			<div class="recom-plugin-wrap">
				<div class="plugin-img-wrap">
					<img src="<?php echo esc_url( $icon_url ); ?>" />
					<div class="version-author-info">
						<span class="version"><?php printf( 'Version %s', $info->version ); ?></span>
						<span class="seperator">|</span>
						<span class="author"><?php echo esc_html( strip_tags( $info->author) ); ?></span>
					</div>
				</div>
				<div class="plugin-title-install clearfix">
					<span class="title" title="<?php echo esc_attr( $info->name ); ?>">
						<?php echo esc_html( $info->name ); ?>	
					</span>
					<?php 
					echo '<div class="button-wrap">';
					echo eyepress_Getting_Start_Page_Plugin_Helper::instance()->get_button_html( $plugin['slug'] );
					echo '</div>';
					?>
				</div>
			</div>
			<?php
		} ?>
		</div>
	<?php
	} ?>
</div><!-- .panel-left -->