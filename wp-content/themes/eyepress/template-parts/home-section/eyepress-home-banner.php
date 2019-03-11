<?php 
/* 
*
* Home page header image section 
* @package eyepress
*
*/
$eyepress_welcome_text = get_theme_mod( 'eyepress_welcome_text');
$eyepress_author_name = get_theme_mod( 'eyepress_author_name');
$eyepress_author_designation = get_theme_mod( 'eyepress_author_designation');
$eyepress_header_desc = get_theme_mod( 'eyepress_header_text');
$eyepress_btn_text_one = get_theme_mod( 'eyepress_btn_text_one');
$eyepress_btn_url_one = get_theme_mod( 'eyepress_btn_url_one','#');
$eyepress_btn_text_two = get_theme_mod( 'eyepress_btn_text_two');
$eyepress_btn_url_two = get_theme_mod( 'eyepress_btn_url_two','#');

$eyepress_header_slider = get_theme_mod( 'eyepress_header_slider','banner');
$eyepress_slider_img2 = get_theme_mod('eyepress_slider_img2','');
$eyepress_header_view = get_theme_mod('eyepress_header_view','standard');


if($eyepress_header_slider == 'slider'){
	$eyepress_header_class = 'home-slider';
}else{
	$eyepress_header_class = 'bg-img-1 eyepress-overlay';
}



 ?>

<!-- Slider Section Start -->	
<div class="slider-area height-100 <?php if($eyepress_header_view == 'poly'): ?>poly-version<?php endif; ?> <?php echo esc_attr($eyepress_header_class); ?> rt-animate" data-rt-offset="50%">
<?php if($eyepress_header_slider == 'slider'): ?>
	<div id="bg-slider" class="bg-slider">
				<div class="bg-img-1 eyepress-overlay"></div>
				<div class="bg-img-2 eyepress-overlay"></div>
				<?php if($eyepress_slider_img2): ?>
				<div class="bg-img-3 eyepress-overlay"></div>
				<?php endif; ?>
			</div>
<?php endif; ?>

	<div class="d-table">
		<div class="dt-cell">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="slide-caption">
							<h3 class="eyepress-welcome white-color"><?php echo esc_html($eyepress_welcome_text); ?></h3>
							<h1 class="eyepress-author white-color"><?php echo esc_html($eyepress_author_name); ?> </h1>
							<h4 class="eyepress-sub white-color"><?php echo esc_html($eyepress_author_designation); ?></h4>
							<p class="eyepress-desc header-desc white-color"><?php echo wp_kses_post($eyepress_header_desc); ?></p>
							<?php if($eyepress_btn_text_one): ?>
							<a href="<?php echo esc_url($eyepress_btn_url_one); ?>" class="marbnt1 btn border"><?php echo esc_html($eyepress_btn_text_one); ?></a>
							<?php
							endif;
							 if($eyepress_btn_text_two):
							  ?>
							<a href="<?php echo esc_url($eyepress_btn_url_two); ?>" class="marbnt2 btn"><?php echo esc_html($eyepress_btn_text_two); ?></a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<?php if($eyepress_header_view == 'poly'): ?>
	<div class="poly-angle"></div>
	<?php endif; ?>
</div><!-- Slider Section End -->
