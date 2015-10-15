<?php
// WooCommerce Options
// -----------------------------------------------------------------------------------------
if ( is_woocommerce_activated() ) {
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
	);
	Redux::setSection( $opt_name, array(
		'title'    => esc_html__( 'Woocommerce', 'webuild' ),
		'subtitle' => esc_html__( '', 'webuild' ),
		'icon'     => 'fa fa-shopping-cart',
		'fields'   => array(
			array(
				'id'     => 'woo-section-start',
				'type'   => 'section',
				'indent' => true
			),
			array(
				'id'       => 'show-woocommerce-cart',
				'type'     => 'switch',
				'title'    => 'Show Cart on Menu',
				'default'  => true,
				'subtitle' => esc_html__( 'When this option is ON, it allows the cart icon to be displayed on the menu.', 'webuild' ),
			),
			array(
				'id'       => 'woo-wishlist',
				'type'     => 'switch',
				'title'    => esc_html__( 'Enable YITH wishlist', 'webuild' ),
				'subtitle' => esc_html__( '', 'webuild' ),
				'subtitle' => esc_html__( 'You need the YITH WooCommerce Wishlist plugin activated for this to work.', 'webuild' ),
				'default'  => true
			),
			array(
				'id'       => 'woo-compare',
				'type'     => 'switch',
				'title'    => esc_html__( 'Enable YITH compare', 'webuild' ),
				'subtitle' => esc_html__( '', 'webuild' ),
				'subtitle' => esc_html__( 'You need the YITH Woocommerce Compare plugin activated for this to work.', 'webuild' ),
				'default'  => true
			),
			array(
				'id'       => 'woo-shop-layout',
				'title'    => esc_html__( 'Shop layout', 'webuild' ),
				'type'     => 'image_select',
				'options'  => $sidebarImages,
				'subtitle' => esc_html__( 'This option allows you to choose the layout of the shop.', 'webuild' ),
				'default'  => 'left'
			),
			array(
				'id'       => 'woo-sidebar',
				'title'    => esc_html__( 'Select sidebar', 'webuild' ),
				'subtitle' => esc_html__( 'From here you can choose the default shop sidebar.', 'webuild' ),
				'type'     => 'select',
				'data'     => 'sidebars',
				'default'  => 'shop-sidebar'
			),
			array(
				'id'       => 'woo-products-per-page',
				'type'     => 'spinner',
				'title'    => esc_html__( 'Products per page', 'webuild' ),
				'default'  => '12',
				'subtitle' => esc_html__( 'This option allows you to set the number of products you want to be displayed per page.', 'webuild' ),
				'min'      => '1',
				'step'     => '1',
				'max'      => '100',
			),
			array(
				'id'       => 'woo-loop-columns',
				'type'     => 'select',
				'title'    => 'Shop Columns',
				'subtitle' => esc_html__( 'This option allows you to set the number of products columns you want to have per page.', 'webuild' ),
				'options'  => array(
					2 => '2 Columns',
					3 => '3 Columns',
					4 => '4 Columns',
					6 => '6 Columns'
				),
				'default'  => 3
			),
			array(
				'id'       => 'woo-related-columns',
				'type'     => 'select',
				'title'    => 'Related Columns',
				'subtitle' => esc_html__( 'Here you can choose how many related products you want to display to be displayed per page.', 'webuild' ),
				'options'  => array(
					2 => '2 Columns',
					3 => '3 Columns',
					4 => '4 Columns',
					6 => '6 Columns'
				),
				'default'  => 4
			),
			array(
				'id'       => 'woo-upsells-columns',
				'type'     => 'select',
				'subtitle' => esc_html__( 'Here you can choose how many related products you want to display to be displayed on the product page.', 'webuild' ),
				'title'    => 'Up-Sells Columns',
				'options'  => array(
					2 => '2 Columns',
					3 => '3 Columns',
					4 => '4 Columns',
					6 => '6 Columns'
				),
				'default'  => 4
			),
			array(
				'id'     => 'woo-section-end',
				'type'   => 'section',
				'indent' => false
			),
		)
	) );
	Redux::setSection( $opt_name, array(
		'title'      => esc_html__( 'Item settings', 'webuild' ),
		'icon'       => 'fa fa-toggle-on',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'     => 'item-settings-section-start',
				'type'   => 'section',
				'indent' => true
			),
			array(
				'id'       => 'woo-single-layout',
				'title'    => esc_html__( 'Single product layout', 'webuild' ),
				'type'     => 'image_select',
				'options'  => $sidebarImages,
				'subtitle' => esc_html__( 'This option allows you to select the layout of the single product page.', 'webuild' ),
				'default'  => 'full'
			),
			array(
				'id'       => 'woo-single-sidebar',
				'title'    => esc_html__( 'Select sidebar', 'webuild' ),
				'subtitle' => esc_html__( 'This option allows you to select the sidebar of the single product page.', 'webuild' ),
				'type'     => 'select',
				'data'     => 'sidebars',
				'defalt'   => ''
			),
			array(
				'id'       => 'woo-product-price',
				'type'     => 'switch',
				'subtitle' => esc_html__( 'This option allows you to choose if you want to show or hide the product price on the listing page.', 'webuild' ),
				'title'    => esc_html__( 'Product price', 'webuild' ),
				'default'  => true
			),
			array(
				'id'       => 'woo-product-reviews',
				'type'     => 'switch',
				'title'    => esc_html__( 'Reviews', 'webuild' ),
				'default'  => true,
				'subtitle' => esc_html__( 'This option allows you to choose if you want to show or hide the product reviews on the listing page', 'webuild' ),
			),
			array(
				'id'     => 'woo-section-end',
				'type'   => 'section',
				'indent' => false
			),
		)
	) );
}