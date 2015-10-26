<?php
/**
 *
 * PRO FAQ
 * @since 1.0.0
 * @version 1.0.0
 *
 *
 */
function webuild_faq( $atts, $content = '', $id = '' ) {
	global $webuild_faqs;
	$webuild_faqs = array();
	extract( shortcode_atts( array(
		'id'       => '',
		'class'    => '',
		'in_style' => '',
	), $atts ) );
	do_shortcode( $content );
	// is not empty clients
	if ( empty( $webuild_faqs ) ) {
		return;
	}
	$id = ( $id ) ? ' id="' . $id . '"' : '';
	$class = ( $class ) ? ' ' . $class : '';
	$in_style = ( $in_style ) ? ' style="' . $in_style . '"' : '';
	// begin output
	$output = '<div' . $id . ' class="pro-faq' . $class . '"' . $in_style . '>';
	// filter
	$output .= '<div class="pro-faq-filter">';
	$output .= '<a href="#" data-filter="*" class="active">' . esc_html__( 'All', 'webuild' ) . '</a>';
	foreach ( $webuild_faqs as $key => $faq ) {
		$output .= '<a href="#" data-filter=".' . sanitize_title( $faq['atts']['title'] ) . '">' . $faq['atts']['title'] . '</a>';
	}
	$output .= '</div>';
	// list
	$output .= '<div class="pro-faq-isotope">';
	foreach ( $webuild_faqs as $key => $faq ) {
		$output .= '<div class="pro-faq-item ' . sanitize_title( $faq['atts']['title'] ) . '">';
		$output .= do_shortcode( $faq['content'] );
		$output .= '</div>';
	}
	$output .= '</div>';
	$output .= '</div>';

	// end output
	return $output;
}

add_shortcode( 'webuild_faq', 'webuild_faq' );
/**
 *
 * PRO Tab
 * @version 1.0.0
 * @since 1.0.0
 *
 */
function webuild_faq_block( $atts, $content = '', $id = '' ) {
	global $webuild_faqs;
	$webuild_faqs[] = array( 'atts' => $atts, 'content' => $content );

	return;
}

add_shortcode( 'webuild_faq_block', 'webuild_faq_block' );