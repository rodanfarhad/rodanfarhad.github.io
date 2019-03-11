<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eyepress
 */
$eyepress_post_sidebar = get_theme_mod( 'eyepress_sidebar_post','no-sidebar');
$eyepress_blog_style = get_theme_mod( 'eyepress_blog_style','grid');
$eyepress_grid_type = get_theme_mod( 'eyepress_grid_type','fixed');

get_header();
?>
<!-- Header Space Start -->
	<div class="header-space eyepress-overlay dark-5">
		<img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/bg/header.jpg'); ?>" alt="<?php esc_attr_e( 'blog banner', 'eyepress') ?>">
	</div>
<!-- Header Space End -->
	<div id="primary" class="content-area blog-details section-padding">
		<div class="container">
			<?php if($eyepress_blog_style == 'grid'): ?>
			<div class="text-center blog-header-text">
				<div class="heading mb-65">
					<?php
						the_archive_title( '<h1 class="merats-blog-title">', '</h1>' );
						the_archive_description( '<p class="archive-description eyepress-blog-desc">', '</p>' );
					?>
				</div>
			</div>
			<?php endif; ?>
			<div class="row">
				<?php if($eyepress_post_sidebar == 'left-sidebar' && is_active_sidebar( 'sidebar-1' ) ): ?>
				<div class="col-sm-3">
					<div class="right-sidebar">
						<?php get_sidebar(); ?>
					</div>
				</div>
				<?php endif; ?>
				<div class="col-sm-<?php if($eyepress_blog_style == 'grid' && $eyepress_post_sidebar == 'no-sidebar'): ?>12<?php else: ?>9<?php endif; ?> <?php if($eyepress_post_sidebar == 'no-sidebar' && is_active_sidebar( 'sidebar-1' ) && $eyepress_blog_style == 'normal'): ?>column-center <?php endif; ?>">
					<main id="main" class="site-main">

			<?php
			if ( have_posts() ) :

				if($eyepress_blog_style != 'grid'): ?>
					<header class="page-header">
						<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
							?>
					</header><!-- .page-header -->
				<?php endif;
				if($eyepress_blog_style == 'grid' && !is_single()): ?>
				<div class="row">
				<?php
			    endif; // grid row check
			    if($eyepress_blog_style == 'grid' && !is_single() && $eyepress_grid_type == 'mesonry' ): ?>
				<div id="eyepress-masonry">
				<?php
			    endif; // grid masonary check
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					if($eyepress_blog_style == 'grid' && !is_single()){
						get_template_part( 'template-parts/content-grid');
					}else{
					get_template_part( 'template-parts/content', get_post_type() );
					}

				endwhile;
				  if($eyepress_blog_style == 'grid' && !is_single() && $eyepress_grid_type == 'mesonry' ): ?>
				</div>
				<?php
			    endif; // grid masonary check
				if($eyepress_blog_style == 'grid' && !is_single()): ?>
				</div>
				<?php
			    endif; // grid row check

				eyepress_pagination();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
					
				</main><!-- #main -->
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