<?php
/*
*
* eyepress blog page show grid view by this file
*
*
*/
$eyepress_post_sidebar = get_theme_mod( 'eyepress_sidebar_post','no-sidebar');
$eyepress_grid_type = get_theme_mod( 'eyepress_grid_type','fixed'); 

?>

	<div class="col-xs-12 col-sm-<?php if($eyepress_post_sidebar == 'no-sidebar'): ?>4<?php else: ?>6<?php endif; ?> mobi-mb-30 <?php if($eyepress_grid_type == 'mesonry'): ?>masonry-entry<?php else: ?>fixed-height<?php endif; ?>">
         <div id="post-<?php the_ID(); ?>" <?php post_class('post-grid'); ?>>
             <div class="single-post single-blog">
             	<div class="thumb angle-shape grid-thumb relative">
                     <?php
                     if(has_post_thumbnail()){
                     	 the_post_thumbnail('recent-blog'); 
                     }else{
                     	echo '<img src="'.esc_url(get_template_directory_uri().'/assets/img/default-blog-grid.jpg').'" alt="'.esc_attr(get_the_title()).'">';
                       }
                      ?>
                </div>
                <div class="content pl-30 pr-10 pb-30">
                    <h6><?php echo esc_html(get_the_date('j M, Y')); ?></h6>
                    <?php the_title( '<h3 class="text-capitalize mb-10"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>
                    <p><?php echo wp_kses_post(wp_trim_words(get_the_content(),15,'')) ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn sm-btn mt-25"><?php esc_html_e( 'Read More', 'eyepress') ?></a>
                </div>
            </div>
        </div>
    </div>
