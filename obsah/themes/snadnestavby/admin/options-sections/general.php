<?php
//GENERAL
Redux::setSection( $opt_name, array(
	'title'  => esc_html__( 'General', 'webuild' ),
	'desc'   => esc_html__( '', 'webuild' ),
	'icon'   => 'fa fa-cog',
	'fields' => array(
		array(
			'id'       => 'general-section-start',
			'type'     => 'section',
			'subtitle' => esc_html__( 'The following options enable you to import demo contents, add tracking codes to your website and choose from various responsiveness options.', 'webuild' ),
			'indent'   => true
		),
		/*array(

			'id'       => 'gatrack-code',

			'type'     => 'text',

			'title'    => esc_html__( 'Tracking Code', 'webuild' ),

			'subtitle' => esc_html__( 'By using this option, you can add tracking codes to your website', 'webuild' ),

			'desc'     => esc_html__( ' ', 'webuild' ),

			'default' => ''

		),*/
		array(
			'id'       => 'space-before-head',
			'type'     => 'ace_editor',
			'title'    => esc_html__( 'Space before closing head tag', 'webuild' ),
			'subtitle' => esc_html__( 'Add in a code line before </head>', 'webuild' ),
			'mode'     => 'plain_text',
			'theme'    => 'monokai',
			'default'  => ''
		),
		array(
			'id'       => 'space-before-body',
			'type'     => 'ace_editor',
			'title'    => esc_html__( 'Space before closing body tag', 'webuild' ),
			'subtitle' => esc_html__( 'Add in a code line before  </body>', 'webuild' ),
			'mode'     => 'plain_text',
			'theme'    => 'monokai',
			'default'  => ''
		),
	),
	array(
		'id'     => 'general-section-end',
		'type'   => 'section',
		'indent' => false,
	),
) );
//GENERAL >> IMPORT / EXPORT
Redux::setSection( $opt_name, array(
	'title'      => esc_html__( 'Import Export', 'webuild' ),
	'desc'       => esc_html__( 'Import and Export your theme settings from file, text or URL.', 'webuild' ),
	'icon'       => 'fa fa-cloud-download',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'         => 'opt-import-export',
			'type'       => 'import_export',
			'title'      => 'Import Export',
			'subtitle'   => 'Save and restore your theme options',
			'full_width' => false
		)
	)
) );
// Extras
// -----------------------------------------------------------------------------------------
update_option( 'pro-installed', false );
$is_installed = get_option( 'pro-installed' );
$one_click_content = ( ! $is_installed ) ? '<div id="pro-one-click"><p><label><input id="pro-install-attachment" type="checkbox" value="1" />Download and import file attachments</label></p><span class="spinner"></span><a id="pro-install" href="#" class="button button-primary">Install / Import Dump XML</a> <a id="pro-visit-site" href="' . home_url( '/' ) . '" class="button hidden" target="_blank">Visit Site</a><p id="pro-few-minutes" class="pro-text-desc hidden">This can take a few minutes. No Worries, Please Wait...</p></div>' : '<strong>You imported dump xml already.</strong>';
//GENERAL >> EXPORT
Redux::setSection( $opt_name, array(
	'title'      => esc_html__( 'Import dummy', 'webuild' ),
	'icon'       => 'fa fa-cloud-upload',
	'subsection' => true,
	'fields'     => array(
		$fields = array(
			'id'    => 'info-critical',
			'type'  => 'info',
			'style' => 'critical',
			'icon'  => 'el-icon-info-sign',
			'title' => esc_html__( 'Be carefull', 'webuild' ),
			'desc'  => esc_html__( 'Don`t import unless you know what you are doing!', 'webuild' )
		),
		array(
			'id'      => 'opt-raw',
			'type'    => 'raw',
			'title'   => esc_html__( 'One-Click Install', 'webuild' ),
			'content' => $one_click_content,
			'align'   => true
		)
	)
) );
?>