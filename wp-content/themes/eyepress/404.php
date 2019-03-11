<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package eyepress
 */
$eyepress_fourzero_header = get_theme_mod( 'eyepress_fourzerofour_heading', __('page not founded.','eyepress'));
$eyepress_fourzerofour_desc = get_theme_mod( 'eyepress_fourzerofour_desc',__('This page you are looking for could not be founded.','eyepress'));
$eyepress_fourzerofour_search = get_theme_mod( 'eyepress_fourzerofour_search',1);
$eyepress_fourzerofour_img_use = get_theme_mod( 'eyepress_fourzerofour_img_use', 0);
$eyepress_fourzerofour_img_id = get_theme_mod( 'eyepress_fourzerofour_img','');
$eyepress_fourzerofour_img = wp_get_attachment_image_url( $eyepress_fourzerofour_img_id, 'medium');
$eyepress_theme_color = get_theme_mod('eyepress_theme_color','light');


get_header();
?>
<!-- Header Space Start -->
	<div class="header-space eyepress-overlay dark-5">
		<img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/bg/header.jpg'); ?>" alt="<?php esc_attr_e( 'blog banner', 'eyepress') ?>">
	</div>
<!-- Header Space End -->
	<div id="primary" class="content-area blog-details section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-9 column-center">
					<main id="main" class="site-main">

			<section class="error-404 not-found text-center">
				<div class="page-content">
					<?php if($eyepress_fourzerofour_img_use == 1 && !empty($eyepress_fourzerofour_img_id)): ?>
					<img src="<?php echo esc_url($eyepress_fourzerofour_img); ?>" alt="<?php esc_attr_e('404 Error','eyepress'); ?>" class="img-error-404 mb-55">
					<?php else: ?>
						<?php if($eyepress_theme_color == 'light'): ?>
						<img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/error_404.png'); ?>" alt="<?php esc_attr_e('404 Error','eyepress'); ?>" class="img-error-404 mb-55">
						<?php else: ?>
						<img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/error_404-dark.png'); ?>" alt="<?php esc_attr_e('404 Error','eyepress'); ?>" class="img-error-404 mb-55">
						<?php endif; ?>
					<?php endif; ?>
					<div class="error-content">
						<h4 class="mb-25"><?php echo esc_html($eyepress_fourzero_header); ?></h4>
						<p class="mb-55"><?php echo esc_html($eyepress_fourzerofour_desc); ?></p>
					<?php
					if($eyepress_fourzerofour_search == 1){
					get_search_form();
					}
					?>
					<a class="error-back-link" href="<?php echo esc_url(home_url('/')); ?>" class="mt-40"><i class="zmdi zmdi-arrow-left zmdi-hc-fw"></i><?php esc_html_e('back to homepage','eyepress'); ?></a>
					</div>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

							
			</div>
		</div>
	</div>
<?php
get_footer();
