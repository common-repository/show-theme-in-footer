<?php
/*
Plugin Name: Show Theme in Footer
Plugin URI: http://apasionados.es
Description: Show the active theme name and version in the Admin Footer
Version: 1.1
Author: Apasionados.es
Author URI: http://apasionados.es/
License: GPLv2 or later
*/

add_action( 'admin_init', 'stifright_load_language' );
function stifright_load_language() {
	load_plugin_textdomain( 'show-theme-in-footer', false,  dirname( plugin_basename( __FILE__ ) ) . '/lang/' );
}

add_filter('update_footer', 'show_theme_in_footer_right',999);
function show_theme_in_footer_right($default) {
	if( current_user_can('edit_others_pages') ) {
		// Get WordPress active theme Name and Version
		$my_theme = wp_get_theme();
		$theme = $default . ' · <strong>' . $my_theme->get( 'Name' ) . '</strong> ' . $my_theme->get( 'Version' );
		// Check if it's a child theme. In that case get parent theme data
		$parent_theme = $my_theme->get( 'Template' );
		$parent_theme_version = wp_get_theme($parent_theme);
		if ( ! empty( $parent_theme ) ) {
			$theme = $theme . ' [' . __('Child theme of', 'show-theme-in-footer') . ': <strong>' . $parent_theme . '</strong> ' . $parent_theme_version->get( 'Version' ) . ']';
		}
		// Do the magic. Return footer
		return $theme;
	} else {
		return $default;
	}
}

?>