<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eyepress
 */
$eyepress_categories_list = get_the_category_list( esc_html__( ', ', 'eyepress' ) );
$eyepress_blog_style = get_theme_mod( 'eyepress_blog_style','grid');
$eyepress_grid_type = get_theme_mod( 'eyepress_grid_type','fixed');

if($eyepress_blog_style == 'normal'):
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			eyepress_posted_on();
			eyepress_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php eyepress_post_thumbnail(); ?>
	<?php if ( $eyepress_categories_list && 'post' === get_post_type() ):  ?>
		<div class="entry-meta cat-list <?php if(!has_post_thumbnail()): ?>no-img<?php endif; ?>">
		<?php  
				/* translators: 1: list of categories. */
				printf( '<span class="post-cats"><i class="zmdi zmdi-folder"></i> ' . esc_html__( ' %1$s', 'eyepress' ) . '</span>', $eyepress_categories_list ); // WPCS: XSS OK.
		
		?>
		</div>
	<?php endif; ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
		<a href="<?php the_permalink(); ?>" class="btn sm-btn mt-25 mb-50"><?php esc_html_e( 'Read More', 'eyepress' ); ?></a>
	</div><!-- .entry-summary -->

</article><!-- #post-<?php the_ID(); ?> -->
<?php 
else: 
	get_template_part( 'template-parts/content-grid');
 endif;
 ?>