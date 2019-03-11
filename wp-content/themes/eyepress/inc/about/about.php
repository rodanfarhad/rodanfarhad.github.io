<?php
/**
 * About setup
 *
 * @package eyepress
 */

if ( ! function_exists( 'eyepress_about_setup' ) ) :

	/**
	 * About setup.
	 *
	 * @since 1.0.0
	 */
	function eyepress_about_setup() {
		$theme = wp_get_theme();
		$config = array(
		// Menu name under Appearance.
		'menu_name'               => esc_html__( 'Eyepress Info', 'eyepress' ),
		// Page title.
		'page_name'               => esc_html__( 'Eyepress Info', 'eyepress' ),
		/* translators: Main welcome title */
		'welcome_title'         => sprintf( esc_html__( 'Welcome to %s! - Version ', 'eyepress' ), $theme['Name'] ),
		// Main welcome content
			// Welcome content.
			'welcome_content' => sprintf( esc_html__( '%1$s is now installed and ready to use. We want to make sure you have the best experience using the theme and that is why we gathered here all the necessary information for you. Thanks for using our theme!', 'eyepress' ), $theme['Name'] ),

			// Tabs.
			'tabs' => array(
				'getting_started' => esc_html__( 'Getting Started', 'eyepress' ),
				'recommended_actions' => esc_html__( 'Recommended Actions', 'eyepress' ),
				'useful_plugins'  => esc_html__( 'Useful Plugins', 'eyepress' ),
				'free_pro'  => esc_html__( 'Free Vs Pro', 'eyepress' ),
				),

			// Quick links.
			'quick_links' => array(
                'theme_url' => array(
                    'text' => esc_html__( 'Theme Details', 'eyepress' ),
                    'url'  => 'https://wpthemespace.com/product/eyepress-pro/',
                ),
                'demo_url' => array(
                    'text' => esc_html__( 'View Demo', 'eyepress' ),
                    'url'  => 'http://eyepress.wpthemespace.com/',
                ),
                'documentation_url' => array(
                    'text'   => esc_html__( 'View Documentation', 'eyepress' ),
                    'url'    => 'http://eyepress.wpthemespace.com/doc-eyepress/',
                    'button' => 'primary',
                ),
            ),

			// Getting started.
			'getting_started' => array(
				'one' => array(
					'title'       => esc_html__( 'Theme Documentation', 'eyepress' ),
					'icon'        => 'dashicons dashicons-format-aside',
					'description' => esc_html__( 'Please check our full documentation for detailed information on how to setup and customize the theme.', 'eyepress' ),
					'button_text' => esc_html__( 'View Documentation', 'eyepress' ),
					'button_url'  => 'http://eyepress.wpthemespace.com/doc-eyepress/',
					'button_type' => 'primary',
					'is_new_tab'  => true,
					),
				'two' => array(
					'title'       => esc_html__( 'Theme Options', 'eyepress' ),
					'icon'        => 'dashicons dashicons-admin-customizer',
					'description' => esc_html__( 'Theme uses Customizer API for theme options. Using the Customizer you can easily customize different aspects of the theme.', 'eyepress' ),
					'button_text' => esc_html__( 'Customize', 'eyepress' ),
					'button_url'  => wp_customize_url(),
					'button_type' => 'primary',
					),
				'three' => array(
					'title'       => esc_html__( 'Demo Content', 'eyepress' ),
					'icon'        => 'dashicons dashicons-layout',
					'description' => sprintf( esc_html__( 'Demo content is pro feature. To import sample demo content, %1$s plugin should be installed and activated. After plugin is activated, visit Import Demo Data menu under Appearance.', 'eyepress' ), esc_html__( 'One Click Demo Import', 'eyepress' ) ),
					),
				'four' => array(
				    'title'       => esc_html__( 'Set Widgets', 'eyepress' ),
				    'icon'        => 'dashicons dashicons-tagcloud',
				    'description' => esc_html__( 'Set widgets in your sidebar, Offcanvas as well as footer.', 'eyepress' ),
				    'button_text' => esc_html__( 'Add Widgets', 'eyepress' ),
				    'button_url'  => admin_url().'/widgets.php',
				    'button_type' => 'link',
				    'is_new_tab'  => true,
				),
				'five' => array(
					'title'       => esc_html__( 'Theme Preview', 'eyepress' ),
					'icon'        => 'dashicons dashicons-welcome-view-site',
					'description' => esc_html__( 'You can check out the theme demos for reference to find out what you can achieve using the theme and how it can be customized. Theme demo only work in pro theme', 'eyepress' ),
					'button_text' => esc_html__( 'View Demo', 'eyepress' ),
					'button_url'  => 'http://eyepress.wpthemespace.com/',
					'button_type' => 'link',
					'is_new_tab'  => true,
					),
                'six' => array(
                    'title'       => esc_html__( 'Contact Support', 'eyepress' ),
                    'icon'        => 'dashicons dashicons-sos',
                    'description' => esc_html__( 'Got theme support question or found bug or got some feedbacks? Best place to ask your query is the dedicated Support forum for the theme.', 'eyepress' ),
                    'button_text' => esc_html__( 'Contact Support', 'eyepress' ),
                    'button_url'  => 'https://wpthemespace.com/support/',
                    'button_type' => 'link',
                    'is_new_tab'  => true,
                ),
				),

					'useful_plugins'        => array(
						'description' => esc_html__( 'Theme supports some helpful WordPress plugins to enhance your site. But, please enable only those plugins which you need in your site. For example, enable WooCommerce only if you are using e-commerce.', 'eyepress' ),
						'already_activated_message' => esc_html__( 'Already activated', 'eyepress' ),
						'version_label' => esc_html__( 'Version: ', 'eyepress' ),
						'install_label' => esc_html__( 'Install and Activate', 'eyepress' ),
						'activate_label' => esc_html__( 'Activate', 'eyepress' ),
						'deactivate_label' => esc_html__( 'Deactivate', 'eyepress' ),
						'content'                   => array(
							array(
								'slug' => 'x-instafeed',
								'icon' => 'svg',
							),
							array(
								'slug' => 'contact-form-7',
								'icon' => 'svg',
							)
						),
					),
					// Required actions array.
					'recommended_actions'        => array(
						'install_label' => esc_html__( 'Install and Activate', 'eyepress' ),
						'activate_label' => esc_html__( 'Activate', 'eyepress' ),
						'deactivate_label' => esc_html__( 'Deactivate', 'eyepress' ),
						'content'            => array(
							'x-instafeed' => array(
								'title'       => __('X Instafeed', 'eyepress' ),
								'description' => __( 'These recommended plugin need to install and active for better user experience.', 'eyepress' ),
								'plugin_slug' => 'x-instafeed',
								'id' => 'x-instafeed'
							),
							'go-pro' => array(
								'title'       => '<a target="_blank" class="activate-now button button-primary" href="https://wpthemespace.com/product/eyepress-pro/">'.__('UPGRADE TO PRO','eyepress').'</a>',
								'description' => __( 'You will get more frequent updates and quicker support with the Pro version.', 'eyepress' ),
								//'plugin_slug' => 'x-instafeed',
								'id' => 'go-pro'
							),
						),
					),
			// Free vs pro array.
			'free_pro'                => array(
				'free_theme_name'     => __('Eyepress','eyepress'),
				'pro_theme_name'      => __('Eyepress Pro','eyepress'),
				'pro_theme_link'      => 'https://wpthemespace.com/product/eyepress-pro/',
				/* translators: View link */
				'get_pro_theme_label' => sprintf( __( 'Get %s', 'eyepress' ), 'Eyepress Pro' ),
				'features'            => array(
					array(
						'title'       => esc_html__( 'Daring Design for Devoted Readers', 'eyepress' ),
						'description' => esc_html__( 'Eyepress\'s design helps you stand out from the crowd and create an experience that your readers will love and talk about. With a flexible home page you have the chance to easily showcase appealing content with ease.', 'eyepress' ),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__( 'Mobile-Ready For All Devices', 'eyepress' ),
						'description' => esc_html__( 'Eyepress makes room for your readers to enjoy your articles on the go, no matter the device their using. We shaped everything to look amazing to your audience.', 'eyepress' ),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__( 'Home slider', 'eyepress' ),
						'description' => esc_html__( 'Eyepress gives you extra slider feature. You can create awesome home slider in this theme.', 'eyepress' ),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__( 'Widgetized Sidebars To Keep Attention', 'eyepress' ),
						'description' => esc_html__( 'Eyepress comes with a widget-based flexible system which allows you to add your favorite widgets over the Sidebar as well as on offcanvas too.', 'eyepress' ),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__( 'Multiple Header Layout', 'eyepress' ),
						'description' => esc_html__( 'Eyepress gives you extra ways to showcase your header with miltiple layout option you can change it on the basis of your requirement', 'eyepress' ),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__( 'Banner Slider Options', 'eyepress' ),
						'description' => esc_html__( 'Eyepress\'s PRO version comes with more Slider options to display and filter posts. For instance, you can have far more control on setting the source of the posts or how they are displayed, everything to push the content to the right people and promote it by the blink of an eye.', 'eyepress' ),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__( 'Flexible Home Page Design', 'eyepress' ),
						'description' => esc_html__( 'Eyepress\'s PRO version has more controll available to enable you to place widgets on Footer or Below the Post at the end of your articles.', 'eyepress' ),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__( 'Masonry grid layout', 'eyepress' ),
						'description' => esc_html__( 'Eyepress PRO verison has masonry grid layout so you can show your blog with awesome masonry grid layout with all devices supporte.', 'eyepress' ),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__( 'Advance Customizer Options', 'eyepress' ),
						'description' => esc_html__( 'Advance control for each element gives you different way of customization and maintained you site as you like and makes you feel different.', 'eyepress' ),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__( 'Advance Pagination', 'eyepress' ),
						'description' => esc_html__( 'Multiple Option of pagination via customizer can be obtained on your site like Infinite scroll, Ajax Button On Click, Number as well as classical option are available.','eyepress' ),
						'is_in_lite'  => 'ture',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__( 'Flexible Color Scheme', 'eyepress' ),
						'description' => esc_html__( 'Match your unique style in an easy and smart way by using an intuitive interface that you can fine-tune it until it fully represents you and matches your particular blogging needs.','eyepress' ),
						'is_in_lite'  => 'ture',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__( 'Premium Support and Assistance', 'eyepress' ),
						'description' => esc_html__( 'We offer ongoing customer support to help you get things done in due time. This way, you save energy and time, and focus on what brings you happiness. We know our products inside-out and we can lend a hand to help you save resources of all kinds.','eyepress' ),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__( 'No Credit Footer Link', 'eyepress' ),
						'description' => esc_html__( 'You can easily remove the Theme: Eyepress by eyepress copyright from the footer area and make the theme yours from start to finish.', 'eyepress' ),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
				),
			),

			);

		eyepress_About::init( $config );
	}

endif;

add_action( 'after_setup_theme', 'eyepress_about_setup' );
