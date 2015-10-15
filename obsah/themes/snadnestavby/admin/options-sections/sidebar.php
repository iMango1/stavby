<?php
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
//SIDEBAR
Redux::setSection( $opt_name, array(
	'title'    => esc_html__( 'Sidebar', 'webuild' ),
	'subtitle' => esc_html__( '', 'webuild' ),
	'icon'     => 'fa fa-pause',
	'fields'   => array(
		array(
			'id'     => 'sidebar-section-start',
			'type'   => 'section',
			'indent' => true
		),
		array(
			'id'       => 'sidebar-bg-color',
			'type'     => 'color',
			'title'    => esc_html__( 'Sidebar Background Color', 'webuild' ),
			'subtitle' => esc_html__( '', 'webuild' ),
			'subtitle' => esc_html__( 'This option allows you to set the sidebar background color or to make it transparent.', 'webuild' ),
			'default'  => '#FFFFFF',
			'validate' => 'color',
			'compiler' => array(
				'background-color' => '.page-sidebar'
			)
		),
		array(
			'id'       => 'custom-sidebars',
			'type'     => 'multi_text',
			'title'    => esc_html__( 'Sidebars', 'webuild' ),
			'subtitle' => esc_html__( 'This allows you to add a new sidebar and name it as you see fit. If you want to add widgets to it, please go to Appearance -> Widgets after create sidebars', 'webuild' ),
			'add_text' => 'Add new sidebar',
			'default'  => array()
		),
		array(
			'id'       => 'sidebar-width',
			'type'     => 'dimensions',
			'units'    => array(
				'%'
			),
			'height'   => 'false',
			'compiler' => array(
				'.page-sidebar'
			),
			'title'    => esc_html__( 'Sidebar Width', 'webuild' ),
			'subtitle' => esc_html__( '', 'webuild' ),
			'subtitle' => esc_html__( 'From here you can change the width of the sidebar. The default value is 100%.', 'webuild' ),
			'default'  => array(
				'width' => '100%',
				'units' => '%'
			)
		),
		array(
			'id'             => 'sidebar-padding',
			'type'           => 'spacing',
			'compiler'       => array(
				'.page-sidebar'
			),
			'mode'           => 'padding',
			'units'          => 'px',
			'units_extended' => 'false',
			'title'          => esc_html__( 'Sidebar Padding', 'webuild' ),
			'subtitle'       => esc_html__( 'This option allows you to change the padding of your website’s sidebars. Units are in pixels.', 'webuild' ),
			'default'        => array(
				'padding-top'    => '0px',
				'padding-right'  => '0px',
				'padding-bottom' => '0px',
				'padding-left'   => '0px'
			)
		),
		array(
			'id'       => 'layout',
			'title'    => esc_html__( 'Default sidebar layout on pages', 'webuild' ),
			'subtitle' => esc_html__( 'This allows you to set the default sidebar layout on all the pages of your website.', 'webuild' ),
			'default'  => 'full',
			'type'     => 'image_select',
			'options'  => $sidebarImages
		),
		array(
			'id'       => 'layout-archive-pages',
			'title'    => esc_html__( 'Default sidebar layout on archive pages', 'webuild' ),
			'subtitle' => esc_html__( 'This allows you to set the default sidebar layout on all the archive pages of your website.', 'webuild' ),
			'default'  => 'right',
			'type'     => 'image_select',
			'options'  => $sidebarImages
		),
		array(
			'id'       => 'sidebar-right',
			'title'    => esc_html__( 'Default sidebar right', 'webuild' ),
			'subtitle' => esc_html__( 'This allows you to set the default sidebar that is displayed on the right of the pages of your

website.', 'webuild' ),
			'type'     => 'select',
			'data'     => 'sidebars',
		),
		array(
			'id'       => 'sidebar-left',
			'title'    => esc_html__( 'Default sidebar left', 'webuild' ),
			'subtitle' => esc_html__( 'This allows you to set the default sidebar that is displayed on the left of the pages of your website.', 'webuild' ),
			'type'     => 'select',
			'data'     => 'sidebars'
		),
		array(
			'id'     => 'sidebar-section-end',
			'type'   => 'section',
			'indent' => false
		),
	)
) );
Redux::setSection( $opt_name, array(
	'title'      => esc_html__( 'Sidebar widgets', 'webuild' ),
	'subtitle'   => esc_html__( ' ', 'webuild' ),
	'subsection' => true,
	'icon'       => 'fa fa-trello',
	'fields'     => array(
		array(
			'id'     => 'sidebar-widgets-section-start',
			'type'   => 'section',
			'indent' => true
		),
		array(
			'id'       => 'sidebar-widget-font-attributes',
			'type'     => 'typography',
			'title'    => esc_html__( 'Sidebar Widget Heading attributes', 'webuild' ),
			'subtitle' => esc_html__( 'From here you can format the text of the heading in the sidebar widgets.', 'webuild' ),
			'google'   => true,
			'default'  => array(
				'color'       => '#2c3e50',
				'font-size'   => '18px',
				'font-family' => 'lato',
				'font-weight' => '900',
				'line-height' => '24px'
			),
			'compiler' => array(
				'.sidebar .widget-title h4'
			)
		),
		array(
			'id'             => 'widget-margin',
			'type'           => 'spacing',
			'compiler'       => array(
				'aside.sidebar .webuild_widget'
			),
			'top'            => false,
			'left'           => false,
			'right'          => false,
			'mode'           => 'margin',
			'units'          => array(
				'px'
			),
			'units_extended' => 'false',
			'title'          => esc_html__( 'Vertical distance between widgets (px)', 'webuild' ),
			'subtitle'       => esc_html__( 'This option allows you to set the distance between the side bar widgets. The default value is 40px.', 'webuild' ),
			'default'        => array(
				'margin-bottom' => '40px',
				'units'         => 'px'
			)
		),
		array(
			'id'       => 'sidebar-widget-heading-border-color',
			'type'     => 'color',
			'title'    => esc_html__( 'Sidebar Widget Heading Line color', 'webuild' ),
			'subtitle' => esc_html__( '', 'webuild' ),
			'default'  => '#f6c41c',
			'validate' => 'color',
			'subtitle' => esc_html__( 'This option enables you to select the line color of the heading or the transparency levels.

', 'webuild' ),
			'compiler' => true
		),
		array(
			'id'       => 'sidebar-widget-heading-border-height',
			'type'     => 'text',
			'title'    => esc_html__( 'Sidebar Widget Heading Line Height', 'webuild' ),
			'subtitle' => esc_html__( 'From here you can set the height of the heading line of the sidebar widget. The default value is 3px.', 'webuild' ),
			'validate' => 'number',
			'default'  => '3',
			'compiler' => true
		),
		array(
			'id'       => 'sidebar-widget-heading-border-width',
			'type'     => 'text',
			'title'    => esc_html__( 'Sidebar Widget Heading Line Width', 'webuild' ),
			'subtitle' => esc_html__( 'This option allows you to choose the width of the heading line for the sidebar widget.', 'webuild' ),
			'validate' => 'number',
			'default'  => '62',
			'compiler' => true
		),
		array(
			'id'       => 'sidebar-widget-delimiter',
			'type'     => 'switch',
			'title'    => esc_html__( 'Widget delimiter', 'webuild' ),
			'subtitle' => esc_html__( 'This option allows you to enable the element delimiters of the widgets.', 'webuild' ),
			'default'  => true,
			'compiler' => true
		),
		array(
			'id'          => 'sidebar-widget-border-color',
			'type'        => 'color',
			'title'       => esc_html__( 'Color for the post delimiter', 'webuild' ),
			'subtitle'    => esc_html__( 'This option allows you to set a color for the delimiter of the widget.', 'webuild' ),
			'default'     => '#e8e8e8',
			'validate'    => 'color',
			'transparent' => false,
			'compiler'    => array(
				'border-color' => 'aside.sidebar .webuild_widget ul li'
			),
			'required'    => array(
				'footer-widget-delimiter',
				'equals',
				'1'
			)
		),
		array(
			'id'       => 'sidebar-widgets-links',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Sidebar widgets links', 'webuild' ),
			'subtitle' => esc_html__( '', 'webuild' ),
			'subtitle' => esc_html__( 'This option allows you to change the link colors of the sidebar widgets.', 'webuild' ),
			'active'   => false,
			'visited'  => false,
			'default'  => array(
				'regular' => '#2c3e50',
				'hover'   => '#f6c41c'
			),
			'compiler' => array(
				'aside.sidebar .webuild_widget ul li a'
			)
		),
		array(
			'id'     => 'sidebar-widgets-section-end',
			'type'   => 'section',
			'indent' => false
		),
	)
) );
?>