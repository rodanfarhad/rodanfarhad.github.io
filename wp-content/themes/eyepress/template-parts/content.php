<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eyepress
 */
$eyepress_categories_list = get_the_category_list( esc_html__( ', ', 'eyepress' ) );
$eyepress_tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'eyepress' ) );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-details'); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h2 class="entry-title">', '</h2>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta mb-25">
				<?php
				if (get_theme_mod( 'eyepress_post_date',1)== 1) {
					eyepress_posted_on();
				}
				if(get_theme_mod( 'eyepress_post_author',1)== 1){
				eyepress_posted_by();
				}
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php eyepress_post_thumbnail(); ?>
		<?php 
		if ( $eyepress_categories_list && 'post' === get_post_type() && get_theme_mod( 'eyepress_post_cat',1)== 1):
		 ?>
		<div class="entry-meta cat-list <?php if(!has_post_thumbnail()): ?>no-img<?php endif; ?>">
		<?php  
				/* translators: 1: list of categories. */
				printf( '<span class="post-cats">' . esc_html__( ' %1$s', 'eyepress' ) . '</span>', $eyepress_categories_list ); // WPCS: XSS OK.
	?>
		</div>
	<?php endif; ?>
	<div class="entry-content">
		<?php
		if(is_single()){
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'eyepress' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'eyepress' ),
			'after'  => '</div>',
		) );
		}else{
			the_excerpt(); ?>
	<a href="<?php the_permalink(); ?>" class="btn sm-btn mt-25 mb-50 red-more"><?php esc_html_e( 'Read More', 'eyepress' ); ?></a>
	<?php
		}

		?>
	</div><!-- .entry-content -->
<?php if (is_single()): ?>
	<?php if($eyepress_tags_list && 'post' === get_post_type() && get_theme_mod( 'eyepress_post_tag',1)== 1): ?>
	<div class="entry-meta tag-list">
		<?php 
			/* translators: 1: list of tag. */
			printf( '<span class="tags-links">' . esc_html__( 'Tags:  %1$s', 'eyepress' ) . '</span>', $eyepress_tags_list );// WPCS: XSS OK.
		
		?>
	</div>
	<?php endif; ?>

<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
