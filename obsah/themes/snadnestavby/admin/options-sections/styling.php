<?php
//STYLING
Redux::setSection( $opt_name, array(
	'title'    => esc_html__( 'Styling', 'webuild' ),
	'subtitle' => esc_html__( '', 'webuild' ),
	'icon'     => 'fa fa-eye',
	'fields'   => array(
		array(
			'id'       => 'primary-color',
			'type'     => 'color',
			'title'    => esc_html__( 'Primary Color', 'webuild' ),
			'subtitle' => esc_html__( 'This is where you can set the primary color of your website', 'webuild' ),
			'default'  => '#f7c51e',
			'validate' => 'color',
			'compiler' => true
		),
		array(
			'id'       => 'link-color-pick',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Links Color Option', 'webuild' ),
			'subtitle' => esc_html__( 'This allows you to change the link color on the whole website.', 'webuild' ),
			'active'   => false,
			'visited'  => false,
			'default'  => array(
				'regular' => '#2c3e50',
				'hover'   => '#f7c51e'
			),
			'compiler' => array(
				'body a'
			)
		),
		array(
			'id'       => 'button-color-pick',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Buttons Color Option', 'webuild' ),
			'subtitle' => esc_html__( '', 'webuild' ),
			'subtitle' => esc_html__( 'From here you can change the button color on the website: eg: Sign in, Comment, Play now!, etc.', 'webuild' ),
			'active'   => false,
			'visited'  => false,
			'default'  => array(
				'regular' => '#f7c51e',
				'hover'   => '#f4b404'
			),
			'compiler' => array(
				'body a.pro-btn'
			)
		),
		array(
			'id'          => 'pagination-color',
			'type'        => 'color',
			'title'       => esc_html__( 'Pagination color', 'webuild' ),
			'subtitle'    => esc_html__( 'This option allows you to change the color of the pagination.', 'webuild' ),
			'default'     => '#f7c51e',
			'transparent' => false,
			'validate'    => 'color',
			'compiler'    => true
		),
	)
) );
//STYLING >> Background options
Redux::setSection( $opt_name, array(
	'title'      => esc_html__( 'Background', 'webuild' ),
	'subtitle'   => esc_html__( ' ', 'webuild' ),
	'icon'       => 'fa fa-eyedropper',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'       => 'background-section-start',
			'type'     => 'section',
			'subtitle' => 'This section allows you to format the background of your website.',
			'indent'   => true
		),
		array(
			'id'       => 'layout-type',
			'type'     => 'button_set',
			'title'    => esc_html__( 'Choose website layout', 'webuild' ),
			'subtitle' => esc_html__( '', 'webuild' ),
			'subtitle' => esc_html__( 'From here you can select the style of the website layout: boxed or wide.', 'webuild' ),
			'options'  => array(
				'wide'  => 'Wide',
				'boxed' => 'Boxed'
			),
			'default'  => 'wide'
		),
		array(
			'id'            => 'boxed-background',
			'type'          => 'background',
			'title'         => esc_html__( 'Background Image For Outer Area', 'webuild' ),
			'subtitle'      => esc_html__( '', 'webuild' ),
			'subtitle'      => esc_html__( '', 'webuild' ),
			'preview_media' => true,
			'preview'       => false,
			'default'       => array(
				'background-color'      => '#ffffff',
				'background-repeat'     => 'repeat',
				'background-position'   => 'center center',
				'background-size'       => 'inherit',
				'background-attachment' => 'scroll'
			),
			'compiler'      => array(
				'body'
			),
			'required'      => array(
				'layout-type',
				'equals',
				'boxed'
			)
		),
		array(
			'id'             => 'container-spacing',
			'type'           => 'spacing',
			'mode'           => 'padding',
			'subtitle'       => esc_html__( 'From here you can set the distance between the content and the other elements. The default value is 80px.', 'webuild' ),
			'left'           => false,
			'right'          => false,
			'units'          => array( 'px' ),
			'units_extended' => 'false',
			'title'          => esc_html__( 'Content padding', 'webuild' ),
			'default'        => array(
				'padding-top'    => '100px',
				'padding-bottom' => '100px',
				'units'          => 'px',
			),
			'compiler'       => array( '.cont-padding' )
		),
		array(
			'id'       => 'container-width',
			'type'     => 'dimensions',
			'units'    => array(
				'px'
			),
			'title'    => esc_html__( 'Box width', 'webuild' ),
			'subtitle' => esc_html__( '', 'webuild' ),
			'height'   => false,
			'subtitle' => esc_html__( 'From here you can set the width of your website. The default value is 1200px.', 'webuild' ),
			'default'  => array(
				'width' => '1170px'
			),
			'compiler' => true
		),
		array(
			'id'       => 'content-width',
			'type'     => 'dimensions',
			'units'    => array(
				'px'
			),
			'title'    => esc_html__( 'Content width', 'webuild' ),
			'subtitle' => esc_html__( '', 'webuild' ),
			'height'   => false,
			'subtitle' => esc_html__( 'From here you can set the width of the content on your website. The default value is 1160px.', 'webuild' ),
			'default'  => array(
				'width' => '1200px',
				'units' => 'px'
			),
			'compiler' => true
		),
		array(
			'id'       => 'body-bg-color',
			'type'     => 'color',
			'title'    => esc_html__( 'Body background', 'webuild' ),
			'subtitle' => esc_html__( '', 'webuild' ),
			'default'  => '#ffffff',
			'validate' => 'color',
			'compiler' => array(
				'background-color' => 'body'
			),
			'required' => array(
				'layout-type',
				'equals',
				'boxed'
			)
		),
		array(
			'id'            => 'container-background',
			'type'          => 'background',
			'title'         => esc_html__( 'Content Container background', 'webuild' ),
			'subtitle'      => esc_html__( 'This allows you to choose a background color and/or image “under the box”. This setting will only work if you selected boxed background.', 'webuild' ),
			'subtitle'      => esc_html__( '', 'webuild' ),
			'preview_media' => true,
			'preview'       => false,
			//'background-size'       => false,
			//'background-attachment' => false,
			'default'       => array(
				'background-color'    => '#ffffff',
				'background-repeat'   => 'repeat',
				'background-position' => 'center center',
				'media'               => array(
					'id'        => '',
					'height'    => '',
					'width'     => '',
					'thumbnail' => ''
				)
			),
			'compiler'      => array(
				'#content-wrapper'
			)
		),
		array(
			'id'     => 'background-section-end',
			'type'   => 'section',
			'indent' => false,
		),
	)
) );
//CUSTOM CSS
Redux::setSection( $opt_name, array(
	'title'      => esc_html__( 'Custom CSS', 'webuild' ),
	'subtitle'   => esc_html__( '', 'webuild' ),
	'icon'       => 'fa fa-css3',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'       => 'pure-css-code',
			'type'     => 'ace_editor',
			'title'    => esc_html__( 'CSS Code', 'webuild' ),
			'subtitle' => esc_html__( 'Here you can add up your custom CSS rules in order to modify existing styles.', 'webuild' ),
			'mode'     => 'css',
			'theme'    => 'monokai',
			'default'  => ''
		),
	)
) );
?>