<?php
/*
* Menu template
* @package eyepress
*/

?>


<div class="mainmenu blog-menu">
	<div class="navbar-header">
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
			<span><?php esc_html_e('Menu','eyepress'); ?></span>
				<span><?php esc_html_e( 'Close', 'eyepress' ) ?></span>
		</button>
	</div>
		<nav class="navbar-collapse clearfix">
			 <?php
				 wp_nav_menu( array(
					'theme_location' => 'blog-menu', 
					'menu_id'        => 'primary-menu',
				    'container'      => false,
					'depth'          => 2,
					'fallback_cb'     => '__return_false',
					'walker'         => new Bootstrap_NavWalker()
				) );
			 ?>
		</nav>
</div>