<?php 
$eyepress_sidemenu_img = get_theme_mod( 'eyepress_sidemenu_img','');
$eyepress_profile_img = wp_get_attachment_image_url( $eyepress_sidemenu_img,'medium');

$eyepress_sidemenu_name = get_theme_mod('eyepress_sidemenu_name',__('Name','eyepress'));
$eyepress_sidemenu_title = get_theme_mod( 'eyepress_sidemenu_title',__('Developer & UX Designer','eyepress'));
$eyepress_sidemenu_phone = get_theme_mod( 'eyepress_sidemenu_phone',__('+80 123 456 802','eyepress'));
$eyepress_sidemenu_email = get_theme_mod( 'eyepress_sidemenu_email','arthurbrooks@example.com');
$eyepress_sidemenu_birth_date = get_theme_mod( 'eyepress_sidemenu_birth_date',__('20 September 1980','eyepress'));
$eyepress_sidemenu_age = get_theme_mod( 'eyepress_sidemenu_age',__('28 Years','eyepress'));
$eyepress_sidemenu_residence = get_theme_mod( 'eyepress_sidemenu_residence',__('USA','eyepress'));
$eyepress_sidemenu_work = get_theme_mod( 'eyepress_sidemenu_work',__('Available','eyepress'));
?>

						<div class="exapnd-sidebar light-bg">
							<div class="my-img">
								<?php if($eyepress_profile_img): ?>
								<img src="<?php echo esc_url($eyepress_profile_img); ?>" alt="<?php esc_attr_e( 'Profile image', 'eyepress') ?>"> 
								<?php endif; ?>
							</div>
							<div class="my-info mt-40">
								<ul>
									<li>
										<p><?php esc_html_e('Name','eyepress'); ?></p>
										<h6 class="side-author"><?php echo esc_html($eyepress_sidemenu_name); ?></h6>
									</li>
									<li>
										<p><?php esc_html_e('Title','eyepress'); ?></p>
										<h6 class="side-title"><?php echo esc_html($eyepress_sidemenu_title); ?></h6>
									</li>
									<li>
										<p><?php esc_html_e('Phone','eyepress'); ?></p>
										<h6 class="side-phone"><a href="tel:<?php echo esc_attr( $eyepress_sidemenu_phone ); ?>"><?php echo esc_html($eyepress_sidemenu_phone); ?></a></h6>
									</li>
									<li>
										<p><?php esc_html_e('Email','eyepress'); ?> </p>
										<h6 class="side-mail"><a href="mailto:<?php echo esc_attr($eyepress_sidemenu_email); ?>"><?php echo esc_html($eyepress_sidemenu_email); ?></a></h6>
									</li>
									<li>
										<p><?php esc_html_e('Date of birth','eyepress'); ?></p>
										<h6 class="side-birth"><?php echo esc_html($eyepress_sidemenu_birth_date); ?></h6>
									</li>
									<li>
										<p><?php esc_html_e('Age','eyepress'); ?></p>
										<h6 class="side-age"><?php echo esc_html($eyepress_sidemenu_age); ?></h6>
									</li>
									<li>
										<p><?php esc_html_e('Residence','eyepress'); ?></p>
										<h6 class="side-residence"><?php echo esc_html($eyepress_sidemenu_residence); ?></h6>
									</li>
									<li>
										<p><?php esc_html_e('Freelance Work','eyepress'); ?></p>
										<h6 class="side-work"><?php echo esc_html($eyepress_sidemenu_work); ?></h6>
									</li>
								</ul>
<?php 
$eyepress_sidemenu_facebook = get_theme_mod( 'eyepress_sidemenu_facebook','');
$eyepress_sidemenu_twitter = get_theme_mod( 'eyepress_sidemenu_twitter','');
$eyepress_sidemenu_linkedin = get_theme_mod( 'eyepress_sidemenu_linkedin','');
$eyepress_sidemenu_instagram = get_theme_mod( 'eyepress_sidemenu_instagram','');
$eyepress_sidemenu_pinterest = get_theme_mod( 'eyepress_sidemenu_pinterest','');


 ?>

								<div class="social-icon style1 l-height mt-50">
									<ul class="clearfix d-inblock">
										<?php if($eyepress_sidemenu_facebook): ?>
										<li><a href="<?php echo esc_url($eyepress_sidemenu_facebook); ?>" target="_blank"><i class="zmdi zmdi-facebook"></i></a></li>
										<?php endif;
											if($eyepress_sidemenu_twitter):
										 ?>
										<li><a href="<?php echo esc_url($eyepress_sidemenu_twitter); ?>" target="_blank"><i class="zmdi zmdi-twitter"></i></a></li>
										<?php endif;
											if($eyepress_sidemenu_linkedin):
										 ?>										
										<li><a href="<?php echo esc_url($eyepress_sidemenu_linkedin); ?>" target="_blank"><i class="zmdi zmdi-linkedin"></i></a></li>
										<?php endif;
											if($eyepress_sidemenu_instagram):
										 ?>
										<li><a href="<?php echo esc_url($eyepress_sidemenu_instagram); ?>" target="_blank"><i class="zmdi zmdi-instagram"></i></a></li>
										<?php endif;
											if($eyepress_sidemenu_pinterest):
										 ?>
										<li><a href="<?php echo esc_url($eyepress_sidemenu_pinterest); ?>" target="_blank"><i class="zmdi zmdi-pinterest"></i></a></li>
										<?php endif;
										 ?>
									</ul>
								</div>
								<!-- Change your social media link -->
							</div>
						</div>