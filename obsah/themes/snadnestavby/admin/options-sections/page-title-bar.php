<?php
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
//PAGE TITLE BAR
Redux::setSection( $opt_name, array(
	'title'    => esc_html__( 'Page title', 'webuild' ),
	'subtitle' => esc_html__( '', 'webuild' ),
	'icon'     => 'fa fa-text-width',
	'fields'   => array(
		array(
			'id'       => 'page-title-section-start',
			'type'     => 'section',
			'subtitle' => 'This option enables you to set default settings for the pages title area.',
			'indent'   => true
		),
		array(
			'id'       => 'page-title-bar',
			'type'     => 'switch',
			'title'    => esc_html__( 'Page Title Bar', 'webuild' ),
			'subtitle' => esc_html__( '', 'webuild' ),
			'subtitle' => esc_html__( 'This option allows you to enable/disable the page title bar on all pages.', 'webuild' ),
			'default'  => true
		),
		array(
			'id'       => 'page-title-bar-height',
			'type'     => 'dimensions',
			'width'    => false,
			'units'    => 'px',
			'title'    => esc_html__( 'Page Title Bar Height', 'webuild' ),
			'subtitle' => esc_html__( 'This option allows you to set the height of the page title bar. The default value is 150px.', 'webuild' ),
			'default'  => array(
				'height' => '150px',
				'units'  => 'px'
			),
			'compiler' => array(
				'.page-header .title-wrapper'
			),
			'required' => array(
				'page-title-bar',
				'equals',
				'1'
			)
		),
		array(
			'id'       => 'page-title-bar-align',
			'title'    => esc_html__( 'Page Title Bar Alignment', 'webuild' ),
			'subtitle' => esc_html__( 'From here you can set the alignment for the page title bar : left, centered and right.', 'webuild' ),
			'default'  => 'left',
			'type'     => 'image_select',
			'options'  => $pageTitleImages,
			'compiler' => true,
			'required' => array(
				'page-title-bar',
				'equals',
				'1'
			)
		),
		array(
			'id'                    => 'background-image-page-title',
			'type'                  => 'background',
			'title'                 => esc_html__( 'Background Image For Page title', 'webuild' ),
			'subtitle'              => esc_html__( 'This allows you to set the background color or image for the page title bar', 'webuild' ),
			'subtitle'              => esc_html__( '', 'webuild' ),
			'preview_media'         => true,
			'preview'               => false,
			'background-attachment' => false,
			'default'               => array(
				'background-color'    => '#2e3841',
				'background-repeat'   => 'repeat',
				'background-position' => 'center center',
				'background-size'     => 'cover',
				'background-image'    => "Array", //(added to suit the default set for metaboxes) @TODO - investigate
				'media'               => array(
					'id'        => '',
					'height'    => '',
					'width'     => '',
					'thumbnail' => ''
				)
			),
			'compiler'              => true,
			'required'              => array(
				'page-title-bar',
				'equals',
				'1'
			)
		),
		array(
			'id'       => 'page-title-parallax',
			'type'     => 'switch',
			'title'    => esc_html__( 'Parallax', 'webuild' ),
			'subtitle' => esc_html__( '', 'webuild' ),
			'subtitle' => esc_html__( 'Add in a parallax effect to the image you have set for the page title.', 'webuild' ),
			'default'  => false,
			'compiler' => true,
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
			'subtitle' => esc_html__( '', 'webuild' ),
			'subtitle' => esc_html__( 'This adds up a fancy effect for the page title bar.', 'webuild' ),
			'default'  => true,
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
			'subtitle' => esc_html__( '', 'webuild' ),
			'subtitle' => esc_html__( 'This option allows you to add a layer of color to display it on top of the selected image in the Background Image For Page title section.', 'webuild' ),
			'default'  => false,
			'required' => array(
				'page-title-bar',
				'equals',
				'1'
			)
		),
		array(
			'id'          => 'page-title-color-overlay',
			'type'        => 'color',
			'title'       => esc_html__( 'Color for the page title overlay', 'webuild' ),
			'subtitle'    => esc_html__( '', 'webuild' ),
			'default'     => '#000000',
			'validate'    => 'color',
			'transparent' => false,
			'compiler'    => array(
				'.page-header .overlay'
			),
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
			'subtitle' => esc_html__( 'You can select the opacity levels of the overlay color in the Background Image For Page title section.', 'webuild' ),
			'default'  => '25',
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
			'subtitle' => esc_html__( '', 'webuild' ),
			'subtitle' => esc_html__( 'This option allows you to add up a shadow effect on the title bar section.', 'webuild' ),
			'default'  => false,
			'compiler' => true,
			'required' => array(
				'page-title-bar',
				'equals',
				'1'
			)
		),
		array(
			'id'       => 'page-title-font-atributes',
			'type'     => 'typography',
			'title'    => esc_html__( 'Page Title Font attributes', 'webuild' ),
			'subtitle' => esc_html__( 'This option enables you to format the text for the page title', 'webuild' ),
			'google'   => true,
			'default'  => array(
				'color'        => '#ffffff',
				'font-size'    => '30px',
				'font-weight'  => '900',
				'font-family'  => 'Lato',
				'line-height'  => '36px',
				'font-options' => '',
				'google'       => 1,
				'font-style'   => '',
				'subsets'      => '',
				'text-align'   => ''
			),
			'compiler' => array(
				'.page-header .title-wrapper h1'
			),
			'required' => array(
				'page-title-bar',
				'equals',
				'1'
			)
		),
		array(
			'id'       => 'page-subheader-font-atributes',
			'type'     => 'typography',
			'title'    => esc_html__( 'Page Title Subheader Font attributes', 'webuild' ),
			'subtitle' => esc_html__( 'This option enables you to format the text for the subheader in the page title.', 'webuild' ),
			'google'   => true,
			'default'  => array(
				'color'        => '#ffffff',
				'font-size'    => '16px',
				'font-weight'  => '700',
				'font-family'  => 'Lato',
				'line-height'  => '20px',
				'font-options' => '',
				'google'       => 1,
				'font-style'   => '',
				'subsets'      => '',
				'text-align'   => '',
			),
			'compiler' => array(
				'.page-header .title-wrapper span'
			),
			'required' => array(
				'page-title-bar',
				'equals',
				'1'
			)
		),
		array(
			'id'       => 'breadcrumbs-section-start',
			'type'     => 'section',
			'title'    => esc_html__( 'Breadcrumbs', 'webuild' ),
			'subtitle' => esc_html__( 'This option enables you to set default settings for the pages title area', 'webuild' ),
			'indent'   => true,
			'required' => array(
				'page-title-bar',
				'equals',
				'1'
			)
		),
		array(
			'id'       => 'display-breadcrumbs',
			'type'     => 'switch',
			'title'    => esc_html__( 'Display Breadcrumbs', 'webuild' ),
			'subtitle' => esc_html__( '', 'webuild' ),
			'subtitle' => esc_html__( 'This option allows you to enable/disable the breadcrumbs on all pages.', 'webuild' ),
			'default'  => true,
			'required' => array(
				'page-title-bar',
				'equals',
				'1'
			)
		),
		array(
			'id'       => 'breadcrumbs-align',
			'title'    => esc_html__( 'Breadcrumbs align', 'webuild' ),
			'subtitle' => esc_html__( 'From here you can set the alignment for the breadcrumbs: left or right.', 'webuild' ),
			'default'  => 'right',
			'type'     => 'image_select',
			'options'  => $breadcrumbsImages,
			'compiler' => true,
			'required' => array(
				'display-breadcrumbs',
				'equals',
				'1'
			)
		),
		array(
			'id'       => 'hide-breadcrumbs-mobile',
			'type'     => 'switch',
			'title'    => esc_html__( 'Hide Breadcrumbs on Mobile Devices', 'webuild' ),
			'subtitle' => esc_html__( '', 'webuild' ),
			'subtitle' => esc_html__( 'This option allows you to hide breadcrumbs on mobile devices.', 'webuild' ),
			'default'  => true,
			'required' => array(
				'display-breadcrumbs',
				'equals',
				'1'
			)
		),
		array(
			'id'       => 'breadcrumbs-font-atributes',
			'type'     => 'typography',
			'title'    => esc_html__( 'Breadcrumbs Font attributes', 'webuild' ),
			'subtitle' => esc_html__( ' ', 'webuild' ),
			'subtitle' => esc_html__( 'This option enables you to format the text from the breadcrumbs for the active page', 'webuild' ),
			'google'   => true,
			'default'  => array(
				'color'       => '#ffffff',
				'font-size'   => '12px',
				'font-weight' => '400',
				'font-family' => 'Lato',
				'line-height' => '16px',
			),
			'compiler' => array(
				'.page-header .pro-breadcrumb span a'
			),
			'required' => array(
				'display-breadcrumbs',
				'equals',
				'1'
			)
		),
		array(
			'id'       => 'breadcrumbs-font-atributes-current',
			'type'     => 'typography',
			'title'    => esc_html__( 'Breadcrumbs font attributes for current page', 'webuild' ),
			'subtitle' => esc_html__( ' ', 'webuild' ),
			'subtitle' => esc_html__( 'The default breadcrumb mark-up should not be changed.', 'webuild' ),
			'google'   => true,
			'default'  => array(
				'color'       => '#f6c41c',
				'font-size'   => '11px',
				'font-weight' => '400',
				'font-family' => 'Lato',
				'line-height' => '16px',
			),
			'compiler' => array(
				'.page-header .pro-breadcrumb span span'
			),
			'required' => array(
				'display-breadcrumbs',
				'equals',
				'1'
			)
		),
		array(
			'id'     => 'page-title-section-end',
			'type'   => 'section',
			'indent' => false,
		),
	)
) );
?>