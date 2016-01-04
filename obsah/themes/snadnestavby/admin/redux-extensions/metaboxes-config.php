<?php
// INCLUDE THIS BEFORE you load your ReduxFramework object config file.
// You may replace $redux_opt_name with a string if you wish. If you do so, change loader.php
// as well as all the instances below.
$redux_opt_name = "apro_options";
if ( ! function_exists( "apro_add_metaboxes" ) ) {
	function apro_add_metaboxes( $metaboxes ) {
		$pageTitleImages = array(
			'left'   => array(
				'alt' => 'Left',
				'img' => FRAMEWORK_URI . '/config/page-title/left.jpg'
			),
			'center' => array(
				'alt' => 'Center',
				'img' => FRAMEWORK_URI . '/config/page-title/center.jpg'
			),
			'right'  => array(
				'alt' => 'Right',
				'img' => FRAMEWORK_URI . '/config/page-title/right.jpg'
			),
		);
		$breadcrumbsImages = array(
			'left'  => array(
				'alt' => 'Left',
				'img' => FRAMEWORK_URI . '/config/breadcrumbs/left.jpg'
			),
			'right' => array(
				'alt' => 'Right',
				'img' => FRAMEWORK_URI . '/config/breadcrumbs/right.jpg'
			),
		);
		$boxSections[] = array(
			'title'    => esc_html__( 'General', 'webuild' ),
			'subtitle' => esc_html__( '', 'webuild' ),
			'icon'     => 'fa fa-cog',
			'fields'   => array(
				array(
					'id'             => 'container-spacing',
					'type'           => 'spacing',
					'mode'           => 'padding',
					'left'           => false,
					'right'          => false,
					'units'          => array(
						'px'
					),
					'units_extended' => 'false',
					'title'          => esc_html__( 'Content padding', 'webuild' ),
					'subtitle'       => esc_html__( 'This option will set top and bottom padding for the content', 'webuild' ),
					'output'         => array(
						'.cont-padding'
					)
				),

				array(
						'id'       => 'loader',
						'type'     => 'switch',
						'title'    => esc_html__( 'Use Page-Loader?', 'webuild' ),
						'subtitle' => esc_html__( '', 'webuild' ),
						'subtitle' => esc_html__( 'If you want to use a pre-loader for the pages select On.', 'webuild' ),
						'default'  => false
				)
			)
		);
		$boxSections[] = array(
			'title'    => esc_html__( 'Header options', 'webuild' ),
			'subtitle' => esc_html__( '', 'webuild' ),
			'icon'     => 'fa fa-list-alt',
			'fields'   => array(
				array(
					'id'       => 'header-layout',
					'type'     => 'select',
					'title'    => esc_html__( 'Select layout', 'webuild' ),
					'subtitle' => esc_html__( 'This will set the menu layout', 'webuild' ),
					'options'  => array(
						's1-header-v1'  => '1. Menu Bellow - Logo Left',
						's1-header-v2'  => '2. Menu Bellow - Logo Center',
						's2-header-v1'  => '3. Menu Right - Logo Left ',
						's2-header-v2'  => '4. Logo - Menu Center 1 line',
						'one-page-menu' => '5. One page menu'
					)
				),
				array(
					'id'       => 'sticky-header',
					'type'     => 'switch',
					'title'    => esc_html__( 'Enable Sticky Header', 'webuild' ),
					'subtitle' => esc_html__( 'This option enables the website’s menu to always be visible on the page when you scroll down.', 'webuild' ),
					'compiler' => true
				),
					array(
							'id'       => 'sticky-header-bg-color',
							'type'     => 'color_rgba',
							'title'    => esc_html__( 'Sticky Header Background Color', 'webuild' ),
							'subtitle' => esc_html__( 'This option enables you to set the background’s color of the sticky menu', 'webuild' ),
							'compiler' => array(
									'#header-sticky'
							),
							'mode'     => 'background-color',
							'required' => array(
									'sticky-header',
									'equals',
									'1'
							)
					),
					array(
							'id'             => 'select-sticky-menu-font-family',
							'type'           => 'typography',
							'title'          => esc_html__( 'Select Menu Font attributes', 'webuild' ),
							'subtitle'       => esc_html__( 'From here you can set the font for the menu in the sticky header. When setting the color for the menu this will change the color for cart and search icon as well', 'webuild' ),
							'compiler'       => array(
									'#header-sticky .primary-menu .navbar-nav > li > a'
							),
							'text-transform' => true,
							'subsets'        => false,
							'text-align'     => false,
							'google'         => true,
							'required' => array(
									'sticky-header',
									'equals',
									'1'
							)
					),
				array(
					'id'       => 'logo-after',
					'type'     => 'text',
					'title'    => esc_html__( 'Menu items before logo', 'webuild' ),
					'subtitle' => esc_html__( 'This will set the logo max height.', 'webuild' ),
					'validate' => 'number',
					'required' => array(
						'header-layout',
						'equals',
						's2-header-v2'
					)
				),
				array(
					'id'       => 'logo-image-height',
					'type'     => 'dimensions',
					'units'    => array(
							'px'
					),
					'subtitle' => esc_html__( 'From here you can select the height in pixels for the logo (e.g. 100).<br> The width will be automatically calculated.', 'webuild' ),
					'title'    => esc_html__( 'Logo height', 'webuild' ),
					'width' => false,
					'compiler' => true
				),
				array(
					'id'       => 'transparent-header',
					'type'     => 'switch',
					'title'    => esc_html__( 'Transparent header', 'webuild' ),
					'subtitle' => esc_html__( 'When this option is ON, it eliminates the background behind the menu.', 'webuild' )
				),
				array(
					'id'       => 'content-offset',
					'type'     => 'dimensions',
					'units'    => array(
							'px'
					),
					'title'    => esc_html__( 'Content offset', 'webuild' ),
					'subtitle' => esc_html__( 'Put the content under the menu(used for transparent menu)', 'webuild' ),
					'width'    => false,
					'required' => array(
					'transparent-header',
					'equals',
					'1'
					)
				),
				array(
					'id'       => 'full-width-header',
					'type'     => 'switch',
					'title'    => esc_html__( 'Full width header', 'webuild' ),
					'subtitle' => esc_html__( 'This option allows you to set your header at full width.', 'webuild' ),
					'compiler' => true
				),
				array(
					'id'       => 'display-breadcrumbs',
					'type'     => 'switch',
					'title'    => esc_html__( 'Display Breadcrumbs', 'webuild' ),
					'subtitle' => esc_html__( '', 'webuild' ),
					'subtitle' => esc_html__( ' ', 'webuild' )
				),
				array(
					'id'       => 'breadcrumbs-align',
					'title'    => esc_html__( 'Breadcrumbs align', 'webuild' ),
					'subtitle' => esc_html__( 'From here you can set the alignment for the breadcrumbs: left or right.', 'webuild' ),
					'type'     => 'image_select',
					'options'  => $breadcrumbsImages,
					'compiler' => true,
				),
				array(
					'id'       => 'page-title-switch',
					'type'     => 'switch',
					'title'    => esc_html__( 'Show page title', 'webuild' ),
					'subtitle' => esc_html__( 'This option allows you to enable/disable the page title.', 'webuild' ),
					'default'  => true
				),
				array(
					'id'       => 'custom-title-switch',
					'type'     => 'switch',
					'title'    => esc_html__( 'Add custom title', 'webuild' ),
					'subtitle' => esc_html__( 'This will rewrite the page title on your custom desires.', 'webuild' ),
					'default'  => false,
					'required' => array(
						'page-title-switch',
						'equals',
						'1'
					)
				),
				array(
					'id'       => 'custom-title',
					'type'     => 'editor',
					'title'    => esc_html__( 'Custom title', 'webuild' ),
					'subtitle' => esc_html__( 'Please enter your custom page title.', 'webuild' ),
					'default'  => '',
					'args'     => array(
						'teeny'         => false,
						'textarea_rows' => 3
					),
					'required' => array(
						'custom-title-switch',
						'equals',
						'1'
					)
				),
				array(
					'id'       => 'custom-slogan-switch',
					'type'     => 'switch',
					'title'    => esc_html__( 'Add custom slogan', 'webuild' ),
					'subtitle' => esc_html__( 'This will set the page slogan under the page title.', 'webuild' ),
					'default'  => false
				),
				array(
					'id'       => 'custom-slogan',
					'type'     => 'editor',
					'title'    => esc_html__( 'Add custom slogan', 'webuild' ),
					'subtitle' => esc_html__( 'Please enter your page slogan.', 'webuild' ),
					'default'  => '',
					'args'     => array(
						'teeny'         => false,
						'textarea_rows' => 5
					),
					'required' => array(
						'custom-slogan-switch',
						'equals',
						'1'
					)
				),
				array(
					'id'       => 'page-header-switch',
					'type'     => 'switch',
					'title'    => esc_html__( 'Page header', 'webuild' ),
					'subtitle' => esc_html__( '', 'webuild' ),
					'subtitle' => esc_html__( 'Switch off to disable the header', 'webuild' ),
					'default'  => true
				),
				array(
					'id'       => 'show-top-header',
					'type'     => 'switch',
					'title'    => esc_html__( 'Top header bar', 'webuild' ),
					'subtitle' => esc_html__( 'This options allows you to reveal or hide the top bar.', 'webuild' ),
					'required' => array(
						'header-layout',
						'not',
						'one-page-menu'
					)
				)

			)
		);
		$boxSections[] = array(
			'title'    => esc_html__( 'Header Styling', 'webuild' ),
			'subtitle' => esc_html__( '', 'webuild' ),
			'icon'     => 'fa fa-eye',
			'fields'   => array(
				array(
					'id'       => 'page-title-bar',
					'type'     => 'switch',
					'title'    => esc_html__( 'Page Title Bar', 'webuild' ),
					'subtitle' => esc_html__( 'This option will enable/disable the page title bar section.', 'webuild' ),
				),
				array(
					'id'       => 'page-title-font-atributes',
					'type'     => 'typography',
					'title'    => esc_html__( 'Page Title Color', 'webuild' ),
					'subtitle' => esc_html__( 'Change the font attributes and color of the page title.', 'webuild' ),
					'google'   => true,
					'output'   => array(
						'.page-header .title-wrapper h1'
					)
				),
				array(
					'id'       => 'page-subheader-font-atributes',
					'type'     => 'typography',
					'title'    => esc_html__( 'Page Title Slogan', 'webuild' ),
					'subtitle' => esc_html__( 'Change the font attributes and color of the page title slogan.', 'webuild' ),
					'google'   => true,
					'output'   => array(
						'.page-header .title-wrapper span'
					)
				),
				array(
					'id'       => 'page-title-bar-height',
					'type'     => 'dimensions',
					'width'    => false,
					'units'    => 'px',
					'title'    => esc_html__( 'Page Title Section Height', 'webuild' ),
					'subtitle' => esc_html__( 'This option will set the height of the page title section.', 'webuild' ),
					'output'   => array( '.page-header .title-wrapper' ),
				),
				array(
					'id'       => 'page-title-bar-align',
					'title'    => esc_html__( 'Page Title Alignment', 'webuild' ),
					'subtitle' => esc_html__( 'From here you can set the alignment for the page title section : left, centered and right.', 'webuild' ),
					'type'     => 'image_select',
					'options'  => $pageTitleImages,
					'compiler' => true,
				),
				array(
					'id'                    => 'background-image-page-title',
					'type'                  => 'background',
					'title'                 => esc_html__( 'Background Image For Page title', 'webuild' ),
					'subtitle'              => esc_html__( 'This will set the background for the page title section.', 'webuild' ),
					'background-attachment' => false,
					'preview_media'         => true,
					'preview'               => false,
					'compiler'              => true,
					'required'              => array(
						'page-title-bar',
						'equals',
						'1'
					)
				),
				array(
					'id'       => 'page-title-stretch',
					'type'     => 'switch',
					'title'    => esc_html__( 'Backround stretch', 'webuild' ),
					'subtitle' => esc_html__( 'This option will stretch the background image for the page title section.', 'webuild' ),
					'required' => array(
						'page-title-bar',
						'equals',
						'1'
					)
				),
				array(
					'id'       => 'page-title-parallax',
					'type'     => 'switch',
					'title'    => esc_html__( 'Parallax', 'webuild' ),
					'subtitle' => esc_html__( 'This option will enable/disable the parallax scrolling effect for the page title section.', 'webuild' ),
					'required' => array(
						'page-title-bar',
						'equals',
						'1'
					)
				),
				array(
					'id'       => 'page-title-fading',
					'type'     => 'switch',
					'title'    => esc_html__( 'Fade out effect', 'webuild' ),
					'subtitle' => esc_html__( 'This option will enable/disable a fade out effect for the page title section.', 'webuild' ),
					'required' => array(
						'page-title-bar',
						'equals',
						'1'
					)
				),
				array(
					'id'       => 'show-page-title-color-overlay',
					'type'     => 'switch',
					'title'    => esc_html__( 'Color overlay', 'webuild' ),
					'subtitle' => esc_html__( 'This option will set the color overlay for the page title section.', 'webuild' )
				),
				array(
					'id'          => 'page-title-color-overlay',
					'type'        => 'color',
					'title'       => esc_html__( 'Color for the page title overlay', 'webuild' ),
					'subtitle'    => esc_html__( 'This option will set the color overlay.', 'webuild' ),
					'validate'    => 'color',
					'transparent' => false,
					'compiler'    => true,
					'mode'        => 'background',
					'required'    => array(
						'show-page-title-color-overlay',
						'equals',
						'1'
					)
				),
				array(
					'id'       => 'page-title-color-overlay-opacity',
					'type'     => 'spinner',
					'title'    => esc_html__( 'Opacity for the page title overlay', 'webuild' ),
					'subtitle' => esc_html__( 'This option will set the opacity for color overlay.', 'webuild' ),
					'min'      => '0',
					'step'     => '1',
					'max'      => '100',
					'compiler' => true,
					'required' => array(
						'show-page-title-color-overlay',
						'equals',
						'1'
					)
				),
				array(
					'id'       => 'add-page-title-shadow',
					'type'     => 'switch',
					'title'    => esc_html__( 'Page title shadow', 'webuild' ),
					'subtitle' => esc_html__( 'This option will enable/disable a shadow for the page title section.', 'webuild' ),
					'compiler' => true
				),
				array(
					'id'             => 'select-menu-font-family',
					'type'           => 'typography',
					'title'          => esc_html__( 'Select Menu Font attributes', 'webuild' ),
					'subtitle'       => esc_html__( 'This option will set the menu font and color only for this page.', 'webuild' ),
					'output'         => array(
						'.primary-menu .navbar-nav > li > a'
					),
					'text-transform' => true,
					'subsets'        => false,
					'text-align'     => false,
					'google'         => true,
				),

				array(
					'id'       => 'main-menu-list-item-hover-each',
					'type'     => 'color',
					'title'    => esc_html__( 'Main menu Item text color on hover', 'webuild' ),
					'subtitle' => esc_html__( 'From here you can set the hover color of this page in menu.', 'webuild' ),
					'default'  => '#f7c51e',
					'output' => array(
						'.primary-menu > li > a:hover, .primary-menu .navbar-nav > li > a:hover, .primary-menu .navbar-nav > li.current-menu-item > a, #header-sticky .primary-menu .navbar-nav > li.current-menu-item > a'
					)
				),

			)
		);
		$boxSections[] = array(
			'title'    => esc_html__( 'Footer', 'webuild' ),
			'subtitle' => esc_html__( '', 'webuild' ),
			'icon'     => 'fa fa-hand-o-down',
			'fields'   => array(
				array(
					'id'       => 'show-footer-form',
					'type'     => 'switch',
					'title'    => esc_html__( 'Show Footer Contact Form?', 'webuild' ),
					'subtitle' => esc_html__( 'This option will enable/disable the contact form before the footer.', 'webuild' )
				),
				array(
					'id'       => 'show-footer',
					'type'     => 'switch',
					'title'    => esc_html__( 'Footer', 'webuild' ),
					'subtitle' => esc_html__( 'This will enable/disable the footer section.', 'webuild' )
				),
				array(
					'id'       => 'footer-fixed-effect',
					'type'     => 'switch',
					'title'    => esc_html__( 'Add footer fixed effect', 'webuild' ),
					'subtitle' => esc_html__( 'For this effect to work the footer should be on, and the footer form off.', 'webuild' ),
				),
				array(
					'id'       => 'copyright-bar',
					'type'     => 'switch',
					'title'    => esc_html__( 'Copyright Bar', 'webuild' ),
					'subtitle' => esc_html__( 'This option will enable/disable the Copyright bar.', 'webuild' )
				)
			)
		);
		$boxSections[] = array(
			'title'    => esc_html__( 'Slider', 'webuild' ),
			'subtitle' => esc_html__( '', 'webuild' ),
			'icon'     => 'fa fa-arrows-v',
			'fields'   => array(
				array(
					'id'       => 'slide-template',
					'type'     => 'select',
					'title'    => esc_html__( 'Choose Slide Template', 'webuild' ),
					'subtitle' => esc_html__( 'This option will let you chose the slider you want for this page.', 'webuild' ),
					'options'  => webuild_get_revsliders(),
					'default'  => 'no-slider'
				),
				array(
					'id'       => 'slider-position',
					'type'     => 'button_set',
					'title'    => esc_html__( 'Slider Position', 'webuild' ),
					'subtitle' => esc_html__( 'This option will let you chose the position of the slider , either above or below the menu.', 'webuild' ),
					'options'  => array(
						'below' => 'Below',
						'above' => 'Above'
					)
				)
			)
		);
		$boxSections[] = array(
			'title'    => esc_html__( 'Background', 'webuild' ),
			'subtitle' => esc_html__( '', 'webuild' ),
			'icon'     => 'fa fa-eyedropper',
			'fields'   => array(
				array(
					'id'            => 'container-background',
					'type'          => 'background',
					'title'         => esc_html__( 'Page content background', 'webuild' ),
					'subtitle'      => esc_html__( '', 'webuild' ),
					'subtitle'      => esc_html__( 'This option will change the content background for this page.', 'webuild' ),
					'preview_media' => true,
					'preview'       => false,
					//'background-size'       => false,
					//background-attachment' => false,
					'output'        => array(
						'#content-wrapper'
					)
				),
				array(
					'id'       => 'container-background-stretch',
					'type'     => 'switch',
					'title'    => esc_html__( 'Backround stretch', 'webuild' ),
					'subtitle' => esc_html__( 'This option will stretch the image chosen above for the content background.', 'webuild' ),
					'compiler' => true
				)
			)
		);
		$metaboxes = array();
		$metaboxes[] = array(
			'id'         => 'apro-page-options',
			'title'      => esc_html__( 'Page Options', 'webuild' ),
			'post_types' => array(
				'page',
				'post',
				'portfolio'
			),
			'position'   => 'normal', // normal, advanced, side
			'priority'   => 'high', // high, core, default, low
			'sidebar'    => false, // enable/disable the sidebar in the normal/advanced positions
			'sections'   => $boxSections
		);
		$sidebarSections = array();
		$sidebarImages = array(
			'full-100' => array(
				'alt' => 'Full width - no container',
				'img' => FRAMEWORK_URI . '/config/sidebars/full-100.jpg'
			),
			'full'     => array(
				'alt' => 'Full width',
				'img' => FRAMEWORK_URI . '/config/sidebars/full.jpg'
			),
			'right'    => array(
				'alt' => 'Right sidebar',
				'img' => FRAMEWORK_URI . '/config/sidebars/right.jpg'
			),
			'left'     => array(
				'alt' => 'Left sidebar',
				'img' => FRAMEWORK_URI . '/config/sidebars/left.jpg'
			),
			'both'     => array(
				'alt' => 'Both sidebars',
				'img' => FRAMEWORK_URI . '/config/sidebars/both.jpg'
			)
		);
		$menus = get_nav_menu_locations();
		$sidebarSections[] = array(
			'icon_class' => 'icon-large',
			'icon'       => 'el-icon-home',
			'fields'     => array(
				array(
					'id'      => 'layout',
					'type'    => 'image_select',
					'options' => $sidebarImages
				),
				array(
					'id'       => 'sidebar-right',
					'title'    => esc_html__( 'Sidebar right', 'webuild' ),
					'subtitle' => '',
					'type'     => 'select',
					'data'     => 'sidebars',
				),
				array(
					'id'       => 'sidebar-left',
					'title'    => esc_html__( 'Sidebar left', 'webuild' ),
					'subtitle' => '',
					'type'     => 'select',
					'data'     => 'sidebars'
				),
				array(
					'id'       => 'logo-upload',
					'type'     => 'media',
					'title'    => esc_html__( 'Page Logo', 'webuild' ),
					'subtitle' => esc_html__( 'Upload Logo ', 'webuild' ),
					'subtitle' => esc_html__( '', 'webuild' ),
				),
				array(
					'id'       => 'logo-upload-retina',
					'type'     => 'media',
					'title'    => esc_html__( 'Page Logo (Retina Version @2x)', 'webuild' ),
					'subtitle' => esc_html__( 'Upload Logo(Retina Version @2x) ', 'webuild' ),
					'subtitle' => esc_html__( '', 'webuild' )
				),
				array(
					'id'       => 'page_menu',
					'type'     => 'select',
					'title'    => esc_html__( 'Page menu', 'webuild' ),
					'subtitle' => esc_html__( '', 'webuild' ),
					'subtitle' => esc_html__( '', 'webuild' ),
					'data'     => 'menus',
					'default'  => isset( $menus['primary'] ) ? $menus['primary'] : '',
				)
			)
		);
		$metaboxes[] = array(
			'id'         => 'page-layout',
			'title'      => esc_html__( 'Layout', 'webuild' ),
			'post_types' => array(
				'page',
				'post',
				'portfolio'
			),
			'position'   => 'side', // normal, advanced, side
			'priority'   => 'default', // high, core, default, low
			'sections'   => $sidebarSections
		);
		// Kind of overkill, but ahh well.  ;)
		$metaboxes = apply_filters( 'custom_post_type_meta_filter', $metaboxes );
		return $metaboxes;
	}

	add_action( 'redux/metaboxes/' . $redux_opt_name . '/boxes', 'apro_add_metaboxes' );
};

