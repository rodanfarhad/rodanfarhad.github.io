<?php

/* 

* Related post by this tempatel

* @package eyepress

*

*/

 $eyepress_theme_color = get_theme_mod('eyepress_theme_color','light');

global $post;
$eyepress_related_terms = get_the_terms( get_the_ID(), 'category' );
$eyepress_term_list = wp_list_pluck( $eyepress_related_terms, 'slug' );
$martst_related_args= array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'ignore_sticky_posts' => 1,
	'posts_per_page' => 3,
	'post__not_in' => array(get_the_ID()),
	'orderby' => 'rand',
	'tax_query' => array(
		array(
			'taxonomy' => 'category',
			'field' => 'slug',
			'terms' => $eyepress_term_list
		)
	)
);

$eyepress_related_query = new WP_Query($martst_related_args);
if( $eyepress_related_query->have_posts() ): ?>
<div class="divider section-pt mb-25">
	<hr class="line" />
</div>
<div class="related-post <?php if( $eyepress_theme_color=='dark'): ?>dark-version<?php endif; ?>">
	<div class="row">
<?php
while ($eyepress_related_query->have_posts()) : $eyepress_related_query->the_post();
 ?>
		<div class="col-xs-12 col-sm-4 mobi-mb-30">
			<div class="single-post <?php if( $eyepress_theme_color =='dark'): ?>black-bg<?php else: ?>white-bg <?php endif; ?>">
				<?php if(has_post_thumbnail()): ?>
				<div class="thumb angle-shape relative">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('medium_large'); ?>
					</a>
				</div>
				<?php endif; ?>
				<div class="content pl-20 pb-20">
					<h6 class="mb-10"><?php echo get_the_date('j M, Y'); ?></h6>
					<a href="<?php the_permalink(); ?>"><h4 class="text-capitalize no-margin"><?php the_title(); ?></h4></a>
				</div>
			</div>
		</div>
 <?php
endwhile; ?>
	</div>
</div>
<?php 
endif;
wp_reset_query();



?>