<?php
//SOCIAL MEDIA
global $allowed_html;
Redux::setSection( $opt_name, array(
	'title'    => esc_html__( 'Social', 'webuild' ),
	'subtitle' => esc_html__( '', 'webuild' ),
	'icon'     => 'fa fa-share-alt',
	'fields'   => array(
		array(
			'id'       => 'social-media-section-start',
			'type'     => 'section',
			'subtitle' => esc_html__( 'This is where you can select how the social media pages of your business will be displayed. One you have inserted the page link, they will be displayed in the top bar section or the copyright bar section.', 'webuild' ),
			'indent'   => true
		),
		array(
			'id'       => 'open-social-icons-window',
			'type'     => 'switch',
			'title'    => esc_html__( 'Open Social Icons in a New Window', 'webuild' ),
			'subtitle' => esc_html__( '', 'webuild' ),
			'subtitle' => esc_html__( 'When this option is turned ON, it will open all the social media pages you have in a new window of the browser.', 'webuild' ),
			'default'  => true
		),
		array(
			'id'       => 'fa-facebook',
			'type'     => 'text',
			'title'    => esc_html__( 'Facebook', 'webuild' ),
			'default'  => '#',
			'subtitle' => esc_html__( 'Please enter in your Facebook URL', 'webuild' )
		),
		array(
			'id'       => 'fa-flickr',
			'type'     => 'text',
			'title'    => esc_html__( 'Flickr', 'webuild' ),
			'subtitle' => esc_html__( 'Please enter in your Flickr URL', 'webuild' ),
			'default'  => ''
		),
		array(
			'id'       => 'fa-rss',
			'type'     => 'text',
			'title'    => esc_html__( 'RSS', 'webuild' ),
			'subtitle' => esc_html__( ' ', 'webuild' ),
			'subtitle' => esc_html__( 'Please enter in your RSS URL', 'webuild' ),
			'default'  => ''
		),
		array(
			'id'       => 'fa-twitter',
			'type'     => 'text',
			'title'    => esc_html__( 'Twitter', 'webuild' ),
			'subtitle' => esc_html__( ' ', 'webuild' ),
			'default'  => '',
			'subtitle' => esc_html__( 'Please enter in your Twitter URL', 'webuild' ),
			'default'  => ''
		),
		array(
			'id'       => 'fa-vimeo',
			'type'     => 'text',
			'title'    => esc_html__( 'Vimeo', 'webuild' ),
			'subtitle' => esc_html__( ' ', 'webuild' ),
			'subtitle' => esc_html__( 'Please enter in your Vimeo URL ', 'webuild' ),
			'default'  => '#',
		),
		array(
			'id'       => 'fa-youtube',
			'type'     => 'text',
			'title'    => esc_html__( 'Youtube', 'webuild' ),
			'subtitle' => esc_html__( ' ', 'webuild' ),
			'default'  => '#',
			'subtitle' => esc_html__( 'Please enter in your Youtube URL ', 'webuild' )
		),
		array(
			'id'       => 'fa-instagram',
			'type'     => 'text',
			'title'    => esc_html__( 'Instagram', 'webuild' ),
			'subtitle' => esc_html__( ' ', 'webuild' ),
			'subtitle' => esc_html__( 'Please enter in your Instagram URL ', 'webuild' ),
			'default'  => ''
		),
		array(
			'id'       => 'fa-pinterest',
			'type'     => 'text',
			'title'    => esc_html__( 'Pinterest', 'webuild' ),
			'subtitle' => esc_html__( ' ', 'webuild' ),
			'subtitle' => esc_html__( 'Please enter in your Pinterest URL ', 'webuild' ),
			'default'  => ''
		),
		array(
			'id'       => 'fa-tumblr',
			'type'     => 'text',
			'title'    => esc_html__( 'Tumblr', 'webuild' ),
			'subtitle' => esc_html__( ' ', 'webuild' ),
			'subtitle' => esc_html__( 'Please enter in your Tumblr URL ', 'webuild' ),
			'default'  => ''
		),
		array(
			'id'       => 'fa-google-plus',
			'type'     => 'text',
			'title'    => esc_html__( 'Google+', 'webuild' ),
			'subtitle' => esc_html__( ' ', 'webuild' ),
			'default'  => '#',
			'subtitle' => esc_html__( 'Please enter in your Google+ URL ', 'webuild' )
		),
		array(
			'id'       => 'fa-dribbble',
			'type'     => 'text',
			'title'    => esc_html__( 'Dribbble', 'webuild' ),
			'subtitle' => esc_html__( ' ', 'webuild' ),
			'subtitle' => esc_html__( 'Please enter in your Dribbble URL ', 'webuild' ),
			'default'  => ''
		),
		array(
			'id'       => 'fa-digg',
			'type'     => 'text',
			'title'    => esc_html__( 'Digg', 'webuild' ),
			'subtitle' => esc_html__( ' ', 'webuild' ),
			'subtitle' => esc_html__( 'Please enter in your Digg URL ', 'webuild' ),
			'default'  => ''
		),
		array(
			'id'       => 'fa-linkedin',
			'type'     => 'text',
			'title'    => esc_html__( 'LinkedIn', 'webuild' ),
			'subtitle' => esc_html__( ' ', 'webuild' ),
			'subtitle' => esc_html__( 'Please enter in your LinkedIn URL ', 'webuild' ),
			'default'  => ''
		),
		array(
			'id'       => 'fa-skype',
			'type'     => 'text',
			'title'    => esc_html__( 'Skype', 'webuild' ),
			'default'  => 'skype:your.id',
			'subtitle' => esc_html__( 'In order to add skype on your website, enter “skype:” followed by your Skype id. eg: skype:your.id', 'webuild' )
		),
		array(
			'id'       => 'myspace-social',
			'type'     => 'text',
			'title'    => esc_html__( 'Myspace', 'webuild' ),
			'subtitle' => esc_html__( ' ', 'webuild' ),
			'subtitle' => esc_html__( 'Please enter in your Myspace URL ', 'webuild' ),
			'default'  => ''
		),
		array(
			'id'       => 'fa-deviantart',
			'type'     => 'text',
			'title'    => esc_html__( 'Deviantart', 'webuild' ),
			'subtitle' => esc_html__( ' ', 'webuild' ),
			'subtitle' => esc_html__( 'Please enter in your Deviantart URL ', 'webuild' ),
			'default'  => ''
		),
		array(
			'id'       => 'fa-yahoo',
			'type'     => 'text',
			'title'    => esc_html__( 'Yahoo', 'webuild' ),
			'subtitle' => esc_html__( ' ', 'webuild' ),
			'subtitle' => esc_html__( 'Please enter in your Yahoo URL ', 'webuild' ),
			'default'  => ''
		),
		array(
			'id'       => 'fa-reddit',
			'type'     => 'text',
			'title'    => esc_html__( 'Reddit', 'webuild' ),
			'subtitle' => esc_html__( ' ', 'webuild' ),
			'subtitle' => esc_html__( 'Please enter in your Reddit URL ', 'webuild' ),
			'default'  => ''
		),
		array(
			'id'       => 'fa-paypal',
			'type'     => 'text',
			'title'    => esc_html__( 'Paypal', 'webuild' ),
			'subtitle' => esc_html__( ' ', 'webuild' ),
			'subtitle' => esc_html__( 'Please enter in your Paypal URL ', 'webuild' ),
			'default'  => ''
		),
		array(
			'id'       => 'fa-dropbox',
			'type'     => 'text',
			'title'    => esc_html__( 'Dropbox', 'webuild' ),
			'subtitle' => esc_html__( ' ', 'webuild' ),
			'subtitle' => esc_html__( 'Please enter in your Dropbox URL ', 'webuild' ),
			'default'  => ''
		),
		array(
			'id'       => 'soundclound-social',
			'type'     => 'text',
			'title'    => esc_html__( 'Soundcloud', 'webuild' ),
			'subtitle' => esc_html__( ' ', 'webuild' ),
			'subtitle' => esc_html__( 'Please enter in your Soundcloud URL ', 'webuild' ),
			'default'  => ''
		),
		array(
			'id'       => 'fa-envelope-o',
			'type'     => 'text',
			'title'    => esc_html__( 'Email address', 'webuild' ),
			'subtitle' => esc_html__( ' ', 'webuild' ),
			'default'  => 'mailto:you@yourwebsite.com',
			'subtitle' => esc_html__( 'Please enter “mailto:” followed by your email address. eg. mailto:contact@yourwebsite.com

This way it will open the default mail from your computer when you click on the link.', 'webuild' )
		),
		array(
			'id'     => 'social-media-section-end',
			'type'   => 'section',
			'indent' => false
		),
	)
) );
Redux::setSection( $opt_name, array(
	'title'      => esc_html__( 'Social Sharing', 'webuild' ),
	'subtitle'   => esc_html__( '', 'webuild' ),
	'icon'       => 'fa fa-cloud-download',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'       => 'enable-share',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable share', 'webuild' ),
			'subtitle' => esc_html__( '', 'webuild' ),
			'subtitle' => esc_html__( ' ', 'webuild' ),
			'default'  => false
		),
		array(
			'id'       => 'addthis-id',
			'type'     => 'text',
			'subtitle' => wp_kses(__( 'You can find a list of your profile IDs at <a href="http://www.addthis.com/settings/publisher">here</a>', 'webuild' ),$allowed_html),
			'title'    => esc_html__( 'Add This user id', 'webuild' ),
			'required' => array(
				'enable-share',
				'equals',
				'1'
			),
			'default'  => ''
		),
		array(
			'id'       => 'addthis-html',
			'type'     => 'ace_editor',
			'title'    => esc_html__( 'Add This mark-up', 'webuild' ),
			'subtitle' => esc_html__( 'Paste the html received in step 2.', 'webuild' ),
			'mode'     => 'html',
			'theme'    => 'chrome',
			'required' => array(
				'enable-share',
				'equals',
				'1'
			),
			'default'  => '<!-- Go to www.addthis.com/dashboard to customize your tools -->
<div class="addthis_sharing_toolbox"></div>'
		)
	)
) );
?>