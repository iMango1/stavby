<?php
//THEME UPDATE
Redux::setSection( $opt_name, array(
	'title'    => esc_html__( 'Theme update', 'webuild' ),
	'subtitle' => esc_html__( '', 'webuild' ),
	'icon'     => 'fa fa-history',
	'fields'   => array(
		array(
			'id'     => 'theme-update-section-start',
			'type'   => 'section',
			'indent' => true
		),
		array(
			'id'      => 'themeforest-username',
			'type'    => 'text',
			'title'   => 'Themeforest username',
			'default' => ''
		),
		array(
			'id'      => 'themeforest-api-key',
			'type'    => 'text',
			'title'   => 'Your Themeforest API Key',
			'default' => ''
		),
		array(
			'id'       => 'info_normal',
			'type'     => 'info',
			'subtitle' => esc_html__( 'To get the API key login to Themeforest, go to your dashboard and click on “My Settings.” The API Keys screen allows you to generate a free API key.', 'webuild' )
		),
		array(
			'id'       => 'info_critical',
			'type'     => 'info',
			'subtitle' => esc_html__( 'Please make a backup of the theme before update.', 'webuild' )
		),
		array(
			'id'     => 'theme-update-section-end',
			'type'   => 'section',
			'indent' => false
		),
	)
) );
?>