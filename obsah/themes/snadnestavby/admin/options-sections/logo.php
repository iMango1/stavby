<?php
//LOGO
Redux::setSection( $opt_name, array(
	'title'    => esc_html__( 'Logo', 'webuild' ),
	'subtitle' => esc_html__( '', 'webuild' ),
	'icon'     => 'fa fa-magic',
	'fields'   => array(
		array(
			'id'       => 'logo-upload-section-start',
			'type'     => 'section',
			'subtitle' => 'This enables you to upload both a regular and a retina version of your logo or a favicon onto your website. You can set the logo’s size, alignment, position and margins.

When uploading a normal version, please upload the image within the Logo field. When uploading a retina version, use the 2x Logo file within the Logo (Retina Version @2x) field.',
			'indent'   => true
		),
		array(
			'id'       => 'logo-upload',
			'type'     => 'media',
			'title'    => esc_html__( 'Logo', 'webuild' ),
			'subtitle' => esc_html__( 'Upload your logo for normal devices', 'webuild' ),
			'default'  => array(
				'url'       => 'http://webuild.proadvertise.co.uk/wp-content/uploads/2015/05/we-build-logo.png',
				'width'     => '',
				'height'    => '',
				'thumbnail' => '',
				'id'        => ''
			),
		),
		array(
			'id'       => 'logo-upload-retina',
			'type'     => 'media',
			'title'    => esc_html__( 'Logo (Retina Version @2x)', 'webuild' ),
			'subtitle' => esc_html__( 'Upload your high resolution logo for retina devices.', 'webuild' ),
			'default'  => array(
				'url'       => 'http://webuild.proadvertise.co.uk/wp-content/uploads/2015/05/we-build-logox2.png',
				'height'    => '',
				'width'     => '',
				'thumbnail' => '',
				'id'        => ''
			),
		),
		array(
			'id'             => 'logo-margin',
			'type'           => 'spacing',
			'compiler'       => array(
				'.header-top .logo'
			),
			'mode'           => 'margin',
			'units'          => array(
				'px'
			),
			'top'            => false,
			'bottom'         => false,
			'units_extended' => false,
			'display_units'  => false,
			'title'          => esc_html__( 'Logo Margin', 'webuild' ),
			'subtitle'       => esc_html__( 'Set the margins on your logo', 'webuild' ),
			'default'        => array(
				'margin-right' => '2px',
				'margin-left'  => '0px',
				'units'        => 'px'
			)
		),
		array(
			'id'       => 'logo-background-color',
			'type'     => 'color',
			'title'    => esc_html__( 'Logo background color (for header 1)', 'webuild' ),
			'subtitle' => esc_html__( 'Pick a Logo background color for the header 1 (default: #dd9933).', 'webuild' ),
			'default'  => 'transparent',
			'validate' => 'color',
			'compiler' => array(
				'background-color' => '.logo'
			)
		),
		array(
			'id'       => 'logo-background-dimensions',
			'type'     => 'dimensions',
			'units'    => array(
				'px'
			),
			'title'    => esc_html__( 'Logo background width and height', 'webuild' ),
			'subtitle' => esc_html__( 'Set the height and the width of the logo’s background.', 'webuild' ),
			'default'  => array(
				'width'  => '179px',
				'height' => '55px',
				'units'  => 'px'
			),
			'compiler' => array(
				'.logo a'
			)
		),
		array(
			'id'       => 'transparent-logo-upload',
			'type'     => 'media',
			'title'    => esc_html__( 'Tranparent Logo', 'webuild' ),
			'subtitle' => esc_html__( 'Here you can upload a regular transparent logo for transparent headers.', 'webuild' ),
			'default'  => array(
				'url'    => '',
				'width'  => '179px',
				'height' => '55px',
			),
		),
		array(
			'id'       => 'transparent-logo-upload-retina',
			'type'     => 'media',
			'title'    => esc_html__( 'Transparent Logo (Retina Version @2x)', 'webuild' ),
			'subtitle' => esc_html__( 'Here you can upload a retina transparent logo for transparent headers.', 'webuild' ),
			'default'  => array(
				'url' => '',
			),
		),
		array(
			'id'     => 'logo-section-end',
			'type'   => 'section',
			'indent' => false,
		),
	)
) );
if ( ! function_exists( 'has_site_icon' )){
	Redux::setSection( $opt_name, array(
		'title'      => esc_html__( 'Favicon', 'webuild' ),
		'subtitle'   => esc_html__( '', 'webuild' ),
		'icon'       => 'fa fa-cloud',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'favicon-section-start',
				'type'     => 'section',
				'subtitle' => 'Favicons are the icons associated with a website’s URL and how it is displayed in a browser’s address bar, or next to the site name in a bookmark list. WeBuild offers several fields to upload a favicon, standard favicon, apple iPhone favicon and Apple iPad favicon. Each one has its own unique size listed in the subtitleription. To add them, simply click the Upload button next to the appropriate field, then select the favicon file you would like to use.',
				'indent'   => true
			),
			array(
				'id'       => 'favicon',
				'type'     => 'media',
				'title'    => esc_html__( 'Favicon', 'webuild' ),
				'subtitle' => esc_html__( 'Upload Fav ICON', 'webuild' ),
				'default'  => array(
					'url' => get_template_directory_uri() .'/images/favicon.png'
				)
			),
			array(
				'id'       => 'iphone-icon',
				'type'     => 'media',
				'title'    => esc_html__( 'Apple iPhone Icon Upload', 'webuild' ),
				'subtitle' => esc_html__( '60x60 pixels', 'webuild' ),
				'default'  => array(
					'url' => get_template_directory_uri() .'/images/apple-touch-icon-57x57.png'
				)
			),
			array(
				'id'       => 'iphone-icon-retina',
				'type'     => 'media',
				'title'    => esc_html__( 'Apple iPhone Retina Icon Upload', 'webuild' ),
				'subtitle' => esc_html__( '120x120  pixels', 'webuild' ),
				'default'  => array(
					'url' => get_template_directory_uri() .'/images/apple-touch-icon-120x120.png'
				)
			),
			array(
				'id'       => 'ipad-icon',
				'type'     => 'media',
				'title'    => esc_html__( 'Apple iPad Icon Upload', 'webuild' ),
				'subtitle' => esc_html__( '76x76 pixels', 'webuild' ),
				'default'  => array(
					'url' => get_template_directory_uri() .'/images/apple-touch-icon-76x76.png'
				)
			),
			array(
				'id'       => 'ipad-icon-retina',
				'type'     => 'media',
				'title'    => esc_html__( 'Apple iPad Retina Icon Upload', 'webuild' ),
				'subtitle' => esc_html__( '152x152 pixels', 'webuild' ),
				'default'  => array(
					'url' => get_template_directory_uri() .'/images/apple-touch-icon-152x152.png'
				)
			),
			array(
				'id'     => 'favicon-section-end',
				'type'   => 'section',
				'indent' => false,
			),
		)
	) );
}
?>