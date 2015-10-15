<?php
//MENU
Redux::setSection( $opt_name, array(
	'title'    => esc_html__( 'Menu', 'webuild' ),
	'subtitle' => esc_html__( '', 'webuild' ),
	'icon'     => 'fa fa-reorder',
	'fields'   => array(
		array(
			'id'       => 'menu-section-start',
			'type'     => 'section',
			'subtitle' => 'Here you will find both the website’s menu settings as well as the drop down’s.',
			'indent'   => true
		),
		array(
			'id'       => 'show-search-icon',
			'type'     => 'switch',
			'title'    => esc_html__( 'Show Search Icon in Main Nav?', 'webuild' ),
			'subtitle' => esc_html__( '', 'webuild' ),
			'subtitle' => esc_html__( 'This option shows or hides the search icon in the navigation menu', 'webuild' ),
			'default'  => true
		),
		array(
			'id'             => 'menu-spacing',
			'type'           => 'spacing',
			'compiler'       => array(
				'.primary-menu .navbar-nav > li > a'
			),
			'mode'           => 'padding',
			'units'          => array(
				'px'
			),
			'top'            => false,
			'bottom'         => false,
			'units_extended' => 'false',
			'title'          => esc_html__( 'Padding option', 'webuild' ),
			'subtitle'       => esc_html__( '', 'webuild' ),
			'subtitle'       => esc_html__( 'This option enables you to set the distance before and after the pages in the menu', 'webuild' ),
			'default'        => array(
				'padding-right' => '10px',
				'padding-left'  => '10px',
				'units'         => 'px'
			)
		),
		array(
			'id'       => 'menu-dropdown-icon',
			'type'     => 'switch',
			'title'    => esc_html__( 'Show dropdown icon', 'webuild' ),
			'subtitle' => esc_html__( 'This option shows or hides the drop down icon.', 'webuild' ),
			'default'  => true
		),
		array(
			'id'             => 'select-menu-font-family',
			'type'           => 'typography',
			'title'          => esc_html__( 'Select Menu Font attributes', 'webuild' ),
			'subtitle'       => esc_html__( 'From here you can format the menu’s font. The color you set for the font, will be the same color for the cart and the search icon also.', 'webuild' ),
			'compiler'       => array(
				'.primary-menu .navbar-nav > li > a'
			),
			'text-transform' => true,
			'subsets'        => false,
			'text-align'     => false,
			'google'         => true,
			'default'        => array(
				'color'          => '#2e3841',
				'font-size'      => '15px',
				'font-family'    => 'Lato',
				'font-weight'    => '700',
				'line-height'    => '100px',
				'text-transform' => 'uppercase',
				'google'         => 1,
				'font-options'   => '',
				'font-style'     => '',
			)
		),
		array(
			'id'       => 'main-menu-dropdown-font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Main Menu Dropdown Font attributes', 'webuild' ),
			'subtitle' => esc_html__( 'From here you can format the drop down font from the menu.', 'webuild' ),
			'google'   => true,
			'default'  => array(
				'color'       => '#ffffff',
				'font-size'   => '14px',
				'font-family' => 'Lato',
				'font-weight' => '400',
				'text-align'  => 'left',
				'line-height' => '30px',
				'subsets'     => 'latin'
			),
			'compiler' => array(
				'.primary-menu .dropdown-menu > li > a'
			)
		),
		array(
			'id'       => 'column-list-item-hover',
			'type'     => 'color',
			'title'    => esc_html__( 'Top item color on hover', 'webuild' ),
			'subtitle' => esc_html__( 'From here you can set the hover color of the main pages in the menu.', 'webuild' ),
			'default'  => '#ffffff',
			'compiler' => array(
				'.primary-menu .navbar-nav > li > a:hover'
			)
		),
		array(
			'id'       => 'column-list-item-hover',
			'type'     => 'color',
			'title'    => esc_html__( 'Item text color on hover', 'webuild' ),
			'subtitle' => esc_html__( 'From here you can set the hover color of the pages in the dropdown menu.', 'webuild' ),
			'default'  => '#ffffff',
			'compiler' => array(
				'.primary-menu .dropdown-menu > li > a:hover'
			)
		),
		array(
			'id'       => 'secondary-menu-top-font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Dropdown menu subtitleription text', 'webuild' ),
			'subtitle' => esc_html__( 'This option enables you to format the text within the drop down subtitleription', 'webuild' ),
			'google'   => true,
			'default'  => array(
				'color'       => '#ffffff',
				'font-size'   => '13px',
				'font-family' => 'Roboto Condensed',
				'font-weight' => '400',
				'line-height' => '19px',
				'subsets'     => 'latin'
			),
			'compiler' => array(
				'.primary-menu span.pro-content'
			)
		),
		array(
			'id'       => 'submenu-bg-color',
			'type'     => 'color_rgba',
			'title'    => esc_html__( 'Sub menu background color', 'webuild' ),
			'subtitle' => esc_html__( 'You can set the color and the background transparency of the whole container within the mega menu', 'webuild' ),
			'default'  => array(
				'color' => '#000000',
				'alpha' => '0.82',
				'rgba'  => 'rgba(26, 28, 39, 0.8)'
			),
			'compiler' => array(
				'.primary-menu .dropdown-menu'
			),
			'mode'     => 'background-color'
		),
		array(
			'id'       => 'sub-menu-top-line',
			'type'     => 'color',
			'title'    => esc_html__( 'Sub menu top line color', 'webuild' ),
			'subtitle' => esc_html__( 'You can set the color of the top liner within the mega menu and/or the drop down.', 'webuild' ),
			'google'   => true,
			'default'  => '#f7c51e',
			'compiler' => array(
				'border-top-color' => '.primary-menu .dropdown-menu'
			)
		),
		array(
			'id'       => 'mega-column-item-divider',
			'type'     => 'color',
			'title'    => esc_html__( 'Column item devider', 'webuild' ),
			'subtitle' => esc_html__( 'You can set the color of the dividers between the items of the menu', 'webuild' ),
			'google'   => true,
			'default'  => '#243240',
			'compiler' => array(
				'border-color' => '.primary-menu .dropdown-menu li'
			)
		),
		array(
			'id'     => 'menu-section-end',
			'type'   => 'section',
			'indent' => false,
		),
	)
) );
Redux::setSection( $opt_name, array(
	'title'      => esc_html__( 'Mega menu', 'webuild' ),
	'subtitle'   => esc_html__( ' ', 'webuild' ),
	'icon'       => 'fa fa-angle-double-down',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'       => 'mega-section-start',
			'type'     => 'section',
			'indent'   => true,
			'subtitle' => 'The APRO theme has a built-in Mega Menu functionality. You can add subtitles, subtitleriptions and icons to the first 3 level of the menu.'
		),
		array(
			'id'             => 'mega-column-title',
			'type'           => 'typography',
			'title'          => esc_html__( 'Column title style', 'webuild' ),
			'subtitle'       => esc_html__( 'This option allows you to format the font within the column’s title from the mega menu', 'webuild' ),
			'google'         => true,
			'subsets'        => false,
			'default'        => array(
				'color'          => '#e8e8e8',
				'font-size'      => '16px',
				'font-family'    => 'Roboto Condensed',
				'font-weight'    => '400',
				'line-height'    => '50px',
				'text-transform' => 'uppercase'
			),
			'text-transform' => true,
			'compiler'       => array(
				'.primary-menu .pro-mega-menu > ul > li .pro-title'
			)
		),
		array(
			'id'       => 'mega-column-title-bg',
			'type'     => 'color_rgba',
			'title'    => esc_html__( 'Column title background color', 'webuild' ),
			'subtitle' => esc_html__( 'You can set the color and the transparency level of the background from the column’s title within the mega menu.', 'webuild' ),
			'default'  => array(
				'color' => '#262839',
				'alpha' => '0.61',
				'rgba'  => 'rgba(26, 28, 39, 0.74)'
			),
			'mode'     => 'background-color',
			'compiler' => array(
				'.primary-menu .pro-mega-menu > ul > li .pro-column-title.pro-title, .primary-menu .dropdown-menu > li > a.pro-column-title.pro-title'
			)
		),
		array(
			'id'       => 'mega-column-list-item-typography',
			'type'     => 'typography',
			'title'    => esc_html__( 'Column item style', 'webuild' ),
			'compiler' => array(
				'.primary-menu .pro-mega-menu > ul > li > ul a'
			),
			'subtitle' => esc_html__( 'This option enables you to format the font within the pages from the mega menu', 'webuild' ),
			'google'   => true,
			'subsets'  => false,
			'default'  => array(
				'color'       => '#ffffff',
				'font-size'   => '14px',
				'font-family' => 'Roboto Condensed',
				'font-weight' => '300',
				'line-height' => '40px',
				'google'      => 1
			)
		),
		array(
			'id'       => 'mega-column-list-item-hover',
			'type'     => 'color',
			'title'    => esc_html__( 'Item text color on hover', 'webuild' ),
			'subtitle' => esc_html__( 'From here you can set the hover color of the pages in the mega menu.', 'webuild' ),
			'default'  => '#ffffff',
			'compiler' => array(
				'.primary-menu .pro-mega-menu > ul > li > ul a:hover'
			)
		),
		array(
			'id'       => 'mega-column-list-bg',
			'type'     => 'color_rgba',
			'title'    => esc_html__( 'Column item background color', 'webuild' ),
			'subtitle' => esc_html__( 'You can set the color and the transparency level of the background from the items within the mega menu.', 'webuild' ),
			'default'  => array(
				'color' => '#252525',
				'alpha' => '0.75',
				'rgba'  => 'rgba(26, 28, 39, 0.75)'
			),
			'mode'     => 'background-color',
			'compiler' => array(
				'.primary-menu .dropdown-menu > li > a.pro-link'
			)
		),
		array(
			'id'       => 'mega-column-list-bg-hover',
			'type'     => 'color_rgba',
			'title'    => esc_html__( 'Column item background color on hover', 'webuild' ),
			'subtitle' => esc_html__( 'You can set the color and the transparency level of the background from the items within the mega menu when hovering.', 'webuild' ),
			'default'  => array(
				'color' => '#f7c51e',
				'alpha' => '1.00',
				'rgba'  => 'rgba(247,197,30,1)'
			),
			'mode'     => 'background-color',
			'compiler' => array(
				'.primary-menu .dropdown-menu > li > a.pro-link.with-hover:hover'
			)
		),
		array(
			'id'     => 'mega-section-start',
			'type'   => 'section',
			'indent' => true
		)
	)
) );
Redux::setSection( $opt_name, array(
	'title'      => 'Mobile Menu',
	'icon'       => 'fa fa-mobile',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'       => 'menu-mobile-section-start',
			'type'     => 'section',
			'subtitle' => 'Here you will find the settings for the mobile menu.',
			'indent'   => true
		),
		array(
			'id'       => 'mobile-menu-slide-outs',
			'type'     => 'switch',
			'title'    => esc_html__( 'Mobile Menu  Slide Outs', 'webuild' ),
			'subtitle' => esc_html__( '', 'webuild' ),
			'subtitle' => esc_html__( 'This allows you to choose the display style of the menu onto mobile devices', 'webuild' ),
			'default'  => false
		),
		array(
			'id'       => 'mobile-parents-clickable',
			'type'     => 'switch',
			'title'    => esc_html__( 'Make mobile menu parent items clickable', 'webuild' ),
			'subtitle' => esc_html__( '', 'webuild' ),
			'subtitle' => esc_html__( 'This will make the parent items clickable, instead of showing the submenu', 'webuild' ),
			'default'  => true
		),
		array(
			'id'       => 'mobile-menu-bg',
			'type'     => 'color',
			'title'    => esc_html__( 'Mobile menu background color', 'webuild' ),
			'default'  => '#2c2c2c',
			'compiler' => array(
				'background-color' => '.navbar.mobile-menu-cont'
			)
		),
		array(
			'id'       => 'mobile-menu-icon',
			'type'     => 'color',
			'title'    => esc_html__( 'Mobile menu icon color', 'webuild' ),
			'default'  => '#999999',
			'compiler' => array(
				'color' => '.navbar .menu-compact-btn-toggle'
			)
		),
		array(
			'id'       => 'mobile-menu-border-color',
			'type'     => 'color',
			'title'    => esc_html__( 'Mobile menu border color', 'webuild' ),
			'default'  => '#353535',
			'compiler' => array(
				'border-color' => '.menu-compact-btn-toggle'
			)
		),
		array(
			'id'     => 'menu-mobile-section-end',
			'type'   => 'section',
			'indent' => false,
		),
	)
) );
?>