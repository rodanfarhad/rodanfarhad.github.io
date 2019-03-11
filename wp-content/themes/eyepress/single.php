<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package eyepress
 */
$eyepress_post_sidebar = get_theme_mod( 'eyepress_sidebar_post','no-sidebar');
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
				<?php if($eyepress_post_sidebar == 'left-sidebar' && is_active_sidebar( 'sidebar-1' ) ): ?>
				<div class="col-sm-3">
					<div class="right-sidebar">
						<?php get_sidebar(); ?>
					</div>
				</div>
				<?php endif; ?>
				<div class="<?php if($eyepress_post_sidebar == 'no-sidebar' && is_active_sidebar( 'sidebar-1' )): ?>col-md-9 column-center<?php else: ?>col-sm-9<?php endif; ?>">
					<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

				</main><!-- #main -->
				<?php 
				if('post' === get_post_type() && get_theme_mod( 'eyepress_related_post', 1) == 1){
				get_template_part('template-parts/related-posts'); 
				}
				?>
			</div> <!-- #primary -->
			<?php if($eyepress_post_sidebar == 'right-sidebar' && is_active_sidebar( 'sidebar-1' ) ): ?>
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

