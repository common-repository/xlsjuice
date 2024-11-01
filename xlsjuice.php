<?php
/**
 * Plugin Name: XLSJuice
 * Plugin URI: https://www.xlsjuice.com
 * Description: Includes form calculators built with XLSJuice spreadsheet to web converter. <b>Please note!</b> In order to include your calculator, an url hosted at xlsjuice.com must be included at your page, so enabling this plugin you're giving consent for including this section.
 * Version:  1.0
 * Author: Moonsoft Team
 * Author URI: http://www.moonsoft.es
 * License: GPL2
 */


define( 'XLSJUICE_VERSION', '0.1.0' );

define( 'XLSJUICE_REQUIRED_WP_VERSION', '3.0.1' );

define( 'XLSJUICE_FRONTEND_URL', 'https://www.xlsjuice.com/calculator/directurl/' );


register_activation_hook(__FILE__,'xlsjuice_gmp_install');

function xlsjuice_gmp_install() {

  global $wp_version;
  if (version_compare($wp_version, XLSJUICE_REQUIRED_WP_VERSION, "<")) {
    deactivate_plugins(basename(__FILE__)); // Deactivate our plugin
    wp_die("This plugin requires WordPress version ".XLSJUICE_REQUIRED_WP_VERSION." or higher.");
  }

}

//front-end
// [xlsjuice code="codevalue" width="100%" height="500px"]

function xlsjuice_frontend( $atts ) {
	$a = shortcode_atts( array(
		'code' => '',
		'width' => '100%',
		'height' => '500px',
	), $atts );


	$style="style='border:0;width:".$a["width"].";height:".$a["height"]."'";
	$result="<iframe src='".XLSJUICE_FRONTEND_URL.$a["code"]."' ".$style."></iframe>";


	return $result;
}

add_shortcode( 'xlsjuice', 'xlsjuice_frontend' );
