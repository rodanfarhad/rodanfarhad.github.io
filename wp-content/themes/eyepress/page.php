<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eyepress
 */
$eyepress_sidebar_page = get_theme_mod( 'eyepress_sidebar_page','no-sidebar');

get_header();
?>
<?php if(!is_front_page()): ?>
<!-- Header Space Start -->
	<div class="header-space eyepress-overlay dark-5">
		<img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/bg/header.jpg'); ?>" alt="<?php esc_attr_e( 'blog banner', 'eyepress') ?>">
	</div>
<!-- Header Space End -->
<?php endif; ?>
	<div id="primary" class="content-area blog-details section-padding">
		<div class="container">
			<div class="row">
				<?php if($eyepress_sidebar_page == 'left-sidebar' && is_active_sidebar( 'sidebar-1' ) ): ?>
				<div class="col-sm-3">
					<div class="right-sidebar">
						<?php get_sidebar(); ?>
					</div>
				</div>
				<?php endif; ?>
				<div class="col-sm-9 <?php if($eyepress_sidebar_page == 'no-sidebar' && is_active_sidebar( 'sidebar-1' )): ?>column-center <?php endif; ?>">
					<main id="main" class="site-main">

					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

					</main><!-- #main -->
				</div> <!-- #primary -->
			<?php if($eyepress_sidebar_page == 'right-sidebar' && is_active_sidebar( 'sidebar-1' ) ): ?>
				<div class="col-sm-3">
					<div class="right-sidebar">
						<?php get_sidebar(); ?>
					</div>
				</div>
				<?php endif; ?>
				
			</div>
		</div>
	</div>
<?php
get_footer();