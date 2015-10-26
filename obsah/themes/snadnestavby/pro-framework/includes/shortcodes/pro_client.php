<?php
/**
 * PRO Clients
 * @since 1.0.0
 * @version 1.0.0
 */
function webuild_clients( $atts, $content = '', $id = '' ) {
	global $webuild_clients;
	$webuild_clients = array();
	extract( shortcode_atts( array(
		'id'           => '',
		'class'        => '',
		'in_style'     => '',
		'type'         => '',
		'columns'      => 4,
		'effect'       => 'yes',
		'border_color' => '',
	), $atts ) );
	do_shortcode( $content );
	// is not empty clients
	if ( empty( $webuild_clients ) ) {
		return;
	}
	$id           = ( $id ) ? ' id="' . $id . '"' : '';
	$class        = ( $class ) ? ' ' . $class : '';
	$in_style     = ( $in_style ) ? ' style="' . $in_style . '"' : '';
	$effect       = ( ! $effect ) ? ' pro-client-effect' : '';
	$border_color = ( $border_color ) ? 'border-color:' . $border_color . ';' : '';
	$row_num      = 0;
	$end_row      = ceil( count( $webuild_clients ) / $columns );
	$el_width     = ( 100 / $columns );
	// begin output
	$output = '<ul' . $id . ' class="pro-client pro-client-col-' . $columns . $effect . $class . '"' . $in_style . '>';
	foreach ( $webuild_clients as $key => $client ) {
		// calc
		$last_child = ( ( $key + 1 ) % $columns ) ? '' : 'last-child';
		$line_row   = ( $key % $columns ) ? '' : $row_num ++;
		$end_of_row = ( $row_num == $end_row ) ? ' last-row' : '';
		$output .= '<li class="' . $last_child . $end_of_row . '" style="width:' . $el_width . '%;' . $border_color . '">';
		$output .= '<figure>';
		$output .= ( $client['link'] ) ? '<a href="' . $client['link'] . '" target="' . $client['target'] . '">' : '';
		$output .= '<img src="' . $client['image'] . '" alt="' . $client['title'] . '" />';
		$output .= ( $client['link'] ) ? '</a>' : '';
		$output .= '</figure>';
		$output .= '</li>';
	}
	$output .= '</ul>';

	// end output
	return $output;
}

add_shortcode( 'webuild_clients', 'webuild_clients' );
/**
 * PRO Client
 * @version 1.0.0
 * @since 1.0.0
 */
function webuild_client( $atts ) {
	global $webuild_clients;
	extract( shortcode_atts( array(
		'link'   => '',
		'title'  => '',
		'target' => '',
		'image'  => '',
	), $atts ) );
	if ( function_exists( 'vc_parse_multi_attribute' ) ) {
		$parse_args = vc_parse_multi_attribute( $link );
		$link       = ( isset( $parse_args['url'] ) ) ? $parse_args['url'] : $link;
		$title      = ( isset( $parse_args['title'] ) ) ? $parse_args['title'] : $title;
		$target     = ( isset( $parse_args['target'] ) ) ? trim( $parse_args['target'] ) : $target;
	}
	$webuild_clients[] = array(
		'link'   => $link,
		'target' => $target,
		'title'  => $title,
		'image'  => $image,
	);

	return;
}

function vc_clients( $atts, $content = null ) {
	$args = shortcode_atts( array(
		'clients_groups' => '',
		'columns'        => 4,
		'hover_effect'   => 'yes',
		'border_color'   => ''
	), $atts );
	$group_id     = $args["clients_groups"];
	$columns      = $args["columns"];
	$hover_effect = $args["hover_effect"];
	$border_color = $args["border_color"];
	if ( $hover_effect == 'yes' ) {
		$hover_effect = 'pro-client-effect';
	} else {
		$hover_effect = '';
	}
	$box_width = 100 / $columns;
	if ( $group_id ) {
		$group = get_term( $group_id, 'clients-categories' );
	}
	$args = array(
		'post_type'      => 'pro_clients',
		'posts_per_page' => - 1,
	);
	if ( $group ) {
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'clients-categories',
				'field'    => 'slug',
				'terms'    => $group->slug
			)
		);
	}
	$specific_id = rand( 10000, 100000 );
	$loop        = new WP_Query( $args );
	$counter     = 1;
	$output .= '<ul id="' . $specific_id . '" class="pro-client pro-client-col-' . $columns . ' ' . $hover_effect . '">';
	foreach ( $loop->posts as $members ) {
		#GET CUSTOM INFO ON STAFF
		if ( $counter == $columns ) {
			$last_box = 'border-right:none;';
			$counter  = 1;
		} else {
			$last_box = '';
			$counter ++;
		}
		$extra_info = get_post_custom( $members->ID );
		$output .= '<li style="width:' . $box_width . '%;' . $last_box . 'border-color:' . $border_color . ';");">';
		$output .= '<a style="width:100%;height:100%;" href="' . $extra_info["client_link"][0] . '" target="_blank">';
		$attachment_image_src = wp_get_attachment_image_src( get_post_thumbnail_id( $members->ID ), 'full' );
		$output .= '<img style="max-height:100%;" src="' . esc_url($attachment_image_src[0]) . '" />';
		$output .= '</a>';
		$output .= '</li>';
	}
	$output .= '</ul>';
	$output .= '<script type="text/javascript">';
	$output .= 'jQuery(document).ready(function(){';
	$output .= "width = jQuery('#" . $specific_id . " li').width();";
	$output .= "jQuery('#" . $specific_id . " li').css('height', width);";
	$output .= '});';
	$output .= 'jQuery(window).resize(function(){';
	$output .= "width = jQuery('#" . $specific_id . " li').width();";
	$output .= "jQuery('#" . $specific_id . " li').css('height', width);";
	$output .= '});';
	$output .= '</script>';

	return $output;
}

function vc_clients_carousel( $atts, $content = null ) {
	$args = shortcode_atts( array(
		'clients_groups'       => '',
		'columns'              => 4,
		'hover_effect'         => '',
		'border_color'         => '',
		'arrow_color'          => '',
		'arrow_bg_color'       => '',
		'arrow_bg_hover_color' => ''
	), $atts );
	$group_id             = $args["clients_groups"];
	$columns              = $args["columns"];
	$hover_effect         = $args["hover_effect"];
	$border_color         = $args["border_color"];
	$arrow_color          = $args["arrow_color"];
	$arrow_bg_color       = $args["arrow_bg_color"];
	$arrow_bg_hover_color = $args["arrow_bg_hover_color"];
	if ( $columns == "" ) {
		$columns = 4;
	}
	if ( $hover_effect == "" ) {
		$hover_effect = "yes";
	}
	if ( $hover_effect == 'yes' ) {
		$hover_effect = 'pro-client-effect';
	} else {
		$hover_effect = '';
	}
	$box_width = 100 / $columns;
	if ( $group_id ) {
		$group = get_term( $group_id, 'clients-categories' );
	}
	$args = array(
		'post_type'      => 'pro_clients',
		'posts_per_page' => - 1,
	);
	if ( isset($group) ) {
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'clients-categories',
				'field'    => 'slug',
				'terms'    => $group->slug
			)
		);
	}
	$specific_id = rand( 10000, 100000 );
	$loop        = new WP_Query( $args );
	$output      = '';
	$output .= '<div class="pro-team-carousel specific_' . $specific_id . '">';
	foreach ( $loop->posts as $members ) {
		#GET CUSTOM INFO ON STAFF
		$extra_info         = get_post_custom( $members->ID );
		$box_width_style    = $box_width ? 'width:' . $box_width . '%;' : '';
		$border_color_style = $border_color ? 'border-color:' . $border_color . ';' : '';
		$output .= '<div style="' . $box_width_style . $border_color_style . '">';
		$output .= '<a style="width:100%;height:100%;" href="' . $extra_info["client_link"][0] . '" target="_blank">';
		$attachment_image_src = wp_get_attachment_image_src( get_post_thumbnail_id( $members->ID ), 'full' );
		$output .= '<img style="max-height:100%;width:100%;" alt="client-' . $members->ID . '" src="' . esc_url($attachment_image_src[0]) . '" />';
		$output .= '</a>';
		$output .= '</div>';
	}
	$output .= '</div>';

	$style = '.specific_' . $specific_id . ' .pro-team-member:hover > .about, .specific_' . $specific_id . ' .pro-team-member:hover > .social{top:200px;}.specific_' . $specific_id . ' .pro-team-member:hover > h4{  -webkit-transform: scale(1);transform: scale(1);-moz-transform: scale(1);-o-transform: scale(1);-ms-transform: scale(1);}';
	$style .= '.specific_' . $specific_id . ' > button{background-color:' . $arrow_bg_color . ' ;}.specific_' . $specific_id . ' > button:hover{background-color:' . $arrow_bg_hover_color . ';-webkit-transition: background-color 0.2s linear;-moz-transition: background-color 0.2s linear;-ms-transition: background-color 0.2s linear;-o-transition: background-color 0.2s linear;transition: background-color 0.2s linear;}';
	webuild_add_inline_style( $style );
	$style = '.slick-prev, .slick-next{color:' . $arrow_color . ' !important;}';
	webuild_add_inline_style( $style );

	$output .= '<script type="text/javascript">
          jQuery(".specific_' . $specific_id . '").slick({
            slidesToShow: ' . $columns . ',
            sliderToScroll: 1,
            lazyLoad: "ondemand",
            autoplay: "true",
            arrows: true,
            dots: true,
            responsive: [
	            {
			      breakpoint: 1024,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 3
			      }
			    },
			    {
			      breakpoint: 600,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 2
			      }
			    },
			    {
			      breakpoint: 480,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
		    ]
          });
      </script>';

	return $output;

	return $output;
}

add_shortcode( 'vc_clients_carousel', 'vc_clients_carousel' );
add_shortcode( 'vc_clients', 'vc_clients' );
add_shortcode( 'webuild_client', 'webuild_client' );