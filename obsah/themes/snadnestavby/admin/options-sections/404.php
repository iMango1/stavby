<?php
//BLOG
Redux::setSection( $opt_name, array(
	'title'  => 'Page 404 options',
	'icon'   => 'fa fa-close',
	'fields' => array(
		array(
			'id'       => 'blog-section-start',
			'type'     => 'section',
			'subtitle' => esc_html__( 'From this section you can manage the 404 page', 'webuild' ),
			'indent'   => true
		),
		array(
			'id'       => 'page-404-title',
			'type'     => 'text',
			'title'    => esc_html__( 'Page 404 Title', 'webuild' ),
			'desc'     => esc_html__( '', 'webuild' ),
			'validate' => 'number',
			'subtitle' => esc_html__( 'Insert the 404 page Title', 'webuild' ),
			'default'  => '404',
		),
		array(
			'id'       => 'page-404-error-text',
			'type'     => 'editor',
			'title'    => esc_html__( 'Page 404 Error Text', 'webuild' ),
			'desc'     => esc_html__( '', 'webuild' ),
			'validate' => 'number',
			'subtitle' => esc_html__( 'Insert the Error text to show', 'webuild' ),
			'default'  => 'NOT FOUND!',
		),
		array(
			'id'       => 'page-404-sub-text',
			'type'     => 'editor',
			'title'    => esc_html__( 'Page 404 Error Sub-Text', 'webuild' ),
			'desc'     => esc_html__( '', 'webuild' ),
			'validate' => 'number',
			'subtitle' => esc_html__( 'Insert the second Error text to show', 'webuild' ),
			'default'  => 'It looks like nothing was found at this location. Maybe try a search?',
		),
		array(
			'id'       => 'page-404-image',
			'type'     => 'media',
			'title'    => esc_html__( 'Page 404 image', 'webuild' ),
			'subtitle' => esc_html__( 'Upload a image to replace the title', 'webuild' ),
			'default'  => 'http://webuild.proadvertise.co.uk/wp-content/uploads/2015/07/404_default.png',
		),
	)
) );
?>