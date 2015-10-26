<?php
/**
 *
 * PRO Responsive Slider
 * @since 1.0.0
 * @version 1.0.0
 *
 */
function webuild_responsive_slider( $atts, $content = '', $id = '' ) {
	extract( shortcode_atts( array(
		'id'       => '',
		'class'    => '',
		'in_style' => '',
		'border'   => '',
		'protype'  => 'slideshow',
	), $atts ) );
	$atts['protype'] = $protype;
	$id              = ( $id ) ? ' id="' . $id . '"' : '';
	$class = ( $class ) ? ' ' . $class : '';
	$in_style = ( $in_style ) ? ' style="' . $in_style . '"' : '';
	$border = ( $border ) ? ' pro-fluid-border' : '';
	$border_inline = ( $protype == 'gallery_nearby' ) ? ' pro-fluid-inline' : '';
	// begin output
	$output = '<div' . $id . ' class="pro-responsive-slider' . $border . $border_inline . $class . '"' . $in_style . '>';
	$output .= gallery_shortcode( $atts );
	$output .= '</div>';

	// end output
	return $output;
}

add_shortcode( 'webuild_responsive_slider', 'webuild_responsive_slider' );