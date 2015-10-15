<?php
//BLOG
Redux::setSection( $opt_name, array(
	'title'  => 'Page Loader',
	'icon'   => 'fa fa-dot-circle-o',
	'fields' => array(
		array(
			'id'       => 'page-loader-section-start',
			'type'     => 'section',
			'subtitle' => esc_html__( 'If the website loader is on, it will show a loading page and the whole website will be loading in the background. When all the elements of the page are loaded, the loader dissappears and the website will be shown.<br>In this area you can set the website loader on either ON or OFF and customize it to your needs.', 'webuild' ),
			'indent'   => true
		),
		array(
			'id'       => 'loader',
			'type'     => 'switch',
			'title'    => esc_html__( 'Use Page-Loader?', 'webuild' ),
			'subtitle' => esc_html__( '', 'webuild' ),
			'subtitle' => esc_html__( 'If you want to use a pre-loader for the pages select On.', 'webuild' ),
			'default'  => false
		),
		array(
			'id'            => 'load-bg',
			'type'          => 'background',
			'title'         => esc_html__( 'Loader background', 'webuild' ),
			'subtitle'      => esc_html__( 'Here you can set the loader’s background color or you can upload an image.', 'webuild' ),
			'preview_media' => true,
			'preview'       => false,
			'default'       => array(
				'background-color' => '#1a1c27',
			),
			'required'      => array(
				'loader',
				'equals',
				'1'
			)
		),
		array(
			'id'            => 'loader-circle',
			'type'          => 'background',
			'title'         => esc_html__( 'Loader circle', 'webuild' ),
			'subtitle'      => esc_html__( 'Here you can upload the logo you want to be shown during your website’s loading time. You can also set the background’s color behind the logo.', 'webuild' ),
			'subtitle'      => esc_html__( '', 'webuild' ),
			'preview_media' => true,
			'preview'       => false,
			'default'       => array(
				'background-color' => '#222533',
				'background-image' => 'http://webuild.proadvertise.co.uk/wp-content/uploads/2015/07/Logo-loader-we-build.png'
			),
			'required'      => array(
				'loader',
				'equals',
				'1'
			)
		),
		array(
			'id'       => 'loader-border',
			'type'     => 'color',
			'title'    => esc_html__( 'Loader border', 'webuild' ),
			'default'  => '#f7c51e',
			'subtitle' => esc_html__( 'Here you can set the color of the animation element (Loading Line)', 'webuild' ),
			'validate' => 'color',
			'required' => array(
				'loader',
				'equals',
				'1'
			),
			'compiler' => true
		),
	)
) );
?>