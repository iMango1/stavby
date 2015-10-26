<?php
/**
 *
 * CS Carousel
 * @since 1.0.0
 * @version 1.0.0
 *
 */
function webuild_carousel( $atts, $content = '' ) {
	extract( shortcode_atts( array(
		'id'            => '',
		'class'         => '',
		'in_style'      => '',
		'min'           => '',
		'max'           => '',
		'items_width'   => '',
		'items_scroll'  => '',
		'delay'         => '',
		'no_mousewheel' => 0,
		'no_swipe'      => 0,
		'no_autoplay'   => 0,
		'no_padding'    => 0,
		'no_nav'        => 0,
		'nav_pos'       => 'center',
		'nav_bottom'    => '',
	), $atts ) );
	$id = ( $id ) ? ' id="' . $id . '"' : '';
	$class = ( $class ) ? ' ' . $class : '';
	$in_style = ( $in_style ) ? ' style="' . $in_style . '"' : '';
	$nav_fluid = ( $nav_pos == 'fluid' ) ? ' fluid' : '';
	wp_enqueue_script( 'pro-caroufredsel' );
	// begin output
	$output = '';
	$output .= '<div' . $id . ' class="pro-carousel' . $class . '" data-min="' . $min . '" data-max="' . $max . '" data-items-width="' . $items_width . '" data-items-scroll="' . $items_scroll . '" data-no-mousewheel="' . $no_mousewheel . '" data-no-swipe="' . $no_swipe . '" data-no-autoplay="' . $no_autoplay . '" data-delay="' . $delay . '"' . $in_style . '>';
	$output .= '<div class="pro-loader"></div>';
	$output .= ( ! $no_nav && ! $nav_bottom ) ? '<div class="pro-carousel-navigation' . $nav_fluid . ' text-' . $nav_pos . '"><i class="pro-carousel-prev fa fa-arrow-circle-o-left"></i><i class="pro-carousel-next fa fa-arrow-circle-o-right"></i></div>' : '';
	$output .= '<div class="pro-carousel-outer">';
	$output .= ( ! $no_padding ) ? '<div class="pro-carousel-padding">' : '';
	$output .= '<div class="pro-carousel-wrapper">';
	$output .= do_shortcode( $content );
	$output .= '</div>';
	$output .= ( ! $no_padding ) ? '</div>' : '';
	$output .= '</div>';
	$output .= ( ! $no_nav && $nav_bottom ) ? '<div class="pro-carousel-navigation text-' . $nav_pos . '"><i class="pro-carousel-prev fa fa-chevron-left pro-icon-circle pro-icon-outlined pro-icon-gray pro-icon-xs"></i><i class="pro-carousel-next fa fa-chevron-right pro-icon-circle pro-icon-outlined pro-icon-gray pro-icon-xs"></i></div>' : '';
	$output .= '<div class="clear"></div>';
	$output .= '</div>';

	// end output
	return $output;
}

add_shortcode( 'webuild_carousel', 'webuild_carousel' );
/**
 *
 * CS Carousel Item
 * @version 1.0.0
 * @since 1.0.0
 *
 */
function webuild_carousel_item( $atts, $content = '' ) {
	return '<div class="pro-carousel-item">' . do_shortcode( $content ) . '</div>';
}

add_shortcode( 'webuild_carousel_item', 'webuild_carousel_item' );