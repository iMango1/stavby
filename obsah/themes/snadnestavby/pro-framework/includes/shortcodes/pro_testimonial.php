<?php
/**
 *
 * PRO Testimonials
 * @since 1.0.0
 * @version 1.0.0
 *
 */
function webuild_testimonials( $atts, $content = '', $id = '' ) {
	global $webuild_testimonials;
	$webuild_testimonials = array();
	extract( shortcode_atts( array(
		'id'       => '',
		'class'    => '',
		'in_style' => '',
		'cite'     => '',
	), $atts ) );
	do_shortcode( $content );
	// is not empty clients
	if ( empty( $webuild_testimonials ) ) {
		return;
	}
	wp_enqueue_style( 'webuild-royalslider' );
	wp_enqueue_script( 'webuild-royalslider' );
	$id = ( $id ) ? ' id="' . $id . '"' : '';
	$class = ( $class ) ? ' ' . $class : '';
	$in_style = ( $in_style ) ? ' style="' . $in_style . '"' : '';
	// begin output
	$output = '<div' . $id . ' class="royalSlider testimonialSlider' . $class . '"' . $in_style . '>';
	foreach ( $webuild_testimonials as $key => $testimonial ) {
		$author = ( ! empty( $testimonial['atts']['author'] ) ) ? $testimonial['atts']['author'] : '';
		$slogan = ( ! empty( $testimonial['atts']['slogan'] ) ) ? ' <small>' . $testimonial['atts']['slogan'] . '</small>' : '';
		$avatar = ( ! empty( $testimonial['atts']['avatar'] ) ) ? $testimonial['atts']['avatar'] : '';
		$output .= '<div class="pro-testimonial-content">';
		$output .= ( $avatar ) ? '<div class="pro-testimonial-avatar"><img src="' . $avatar . '" alt="' . $author . '"/><span class="testimonial-misc"></span></div>' : '';
		$output .= '<div class="pro-testimonial-text">' . do_shortcode( $testimonial['content'] ) . '</div>';
		$output .= ( $author || $slogan ) ? '<div class="pro-testimonial-author">' . $author . $slogan . '</div>' : '';
		$output .= '</div>';
	}
	$output .= '</div>';

	// end output
	return $output;
}

add_shortcode( 'webuild_testimonials', 'webuild_testimonials' );
/**
 *
 * PRO Testimonial
 * @version 1.0.0
 * @since 1.0.0
 *
 */
function webuild_testimonial( $atts, $content = '', $id = '' ) {
	global $webuild_testimonials;
	$webuild_testimonials[] = array( 'atts' => $atts, 'content' => $content );

	return;
}

add_shortcode( 'webuild_testimonial', 'webuild_testimonial' );