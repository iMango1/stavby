<?php
/**
 *
 * PRO Tabs
 * @since 1.0.0
 * @version 1.0.0
 *
 *
 */
function webuild_tabs( $atts, $content = '', $id = '' ) {
	global $webuild_tabs;
	$webuild_tabs = array();
	extract( shortcode_atts( array(
		'id'     => '',
		'class'  => '',
		'type'   => 'default',
		'color'  => 'accent',
		'active' => 1,
		'center' => 0,
		'fit'    => 0,
	), $atts ) );
	do_shortcode( $content );
	// is not empty clients
	if ( empty( $webuild_tabs ) ) {
		return;
	}
	$output = '';
	$id = ( $id ) ? ' id="' . $id . '"' : '';
	$class = ( $class ) ? ' ' . $class : '';
	$center = ( $center ) ? ' text-center' : '';
	$fit = ( $fit ) ? ' pro-tab-nav-fit' : '';
	if ( $color != 'accent' ) {
		$uniqid = uniqid();
		$style ="

    .pro-tab-{$uniqid} .pro-tab-nav ul li.active a:after {

      background-color: {$color};

    }

    .pro-tab-{$uniqid} .pro-tab-nav ul li a:hover,

    .pro-tab-{$uniqid} .pro-tab-nav ul li.active a {

      color: {$color};

    }

    ";
		webuild_add_inline_style( $style );
		$color = $uniqid;
	}
	// begin output
	$output .= '<div' . $id . ' class="pro-tab pro-tab-' . $type . ' pro-tab-' . $color . $class . '">';
	// tab-navs
	$output .= '<div class="pro-tab-nav bs-tab-nav' . $center . $fit . '">';
	$output .= '<ul>';
	foreach ( $webuild_tabs as $key => $tab ) {
		$title = $tab['atts']['title'];
		$icon = ( ! empty( $tab['atts']['icon'] ) ) ? '<i class="' . webuild_icon_class( $tab['atts']['icon'] ) . '"></i>' : '';
		$active_nav = ( ( $key + 1 ) == $active ) ? ' class="active"' : '';
		$output .= '<li' . $active_nav . '><a href="#' . sanitize_title( $title ) . '">' . $icon . $title . '</a></li>';
	}
	$output .= '</ul>';
	$output .= '</div>';
	// tab-contents
	$output .= '<div class="pro-tab-contents">';
	foreach ( $webuild_tabs as $key => $tab ) {
		$title = $tab['atts']['title'];
		$active_content = ( ( $key + 1 ) == $active ) ? ' active' : '';
		$output .= '<div id="' . sanitize_title( $title ) . '" class="pro-tab-content' . $active_content . '">' . do_shortcode( $tab['content'] ) . '</div>';
	}
	$output .= '</div>';
	$output .= '</div>';

	// end output
	return $output;
}

add_shortcode( 'webuild_tabs', 'webuild_tabs' );
add_shortcode( 'vc_tabs', 'webuild_tabs' );
/**
 *
 * PRO Tab
 * @version 1.0.0
 * @since 1.0.0
 *
 */
function webuild_tab( $atts, $content = '', $id = '' ) {
	global $webuild_tabs;
	$webuild_tabs[] = array( 'atts' => $atts, 'content' => $content );

	return;
}

add_shortcode( 'webuild_tab', 'webuild_tab' );
add_shortcode( 'vc_tab', 'webuild_tab' );