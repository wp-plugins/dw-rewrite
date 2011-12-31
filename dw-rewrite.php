<?php
/*
Plugin Name: 		DW ReWrite
Plugin URI: 		http://wordpress.org/extend/plugins/dw-rewrite/
Description: 		DW ReWrite creates a new ReWrite rule that will allow users to login and access the WP dashboard 
					using "pretty" URLs instead of the regular, default and ugly WP URLs. This plugin takes advantage 
					of the WordPress Rewrite API.
Requires at least: 	3.0
Tested up to: 		3.3
Version: 			1.4.1
Tags: 				daniel, woolnough, dw, login, rewrite, htaccess, rewrite api, WordPress, admin, register, forgot, password, pretty URLs, pretty links, 
Author: 			DanielWoolnough
Author URI:			http://www.danielwoolnough.com/
*/

// Adds rewrite rule and flushed the plugin on activation (Do Not Change!)
register_activation_hook( __FILE__, 'activate' );
function activate() {
	rewrite();
	flush_rewrite_rules();
}

// Flushes the plugin on deactivation (Do Not Change!)
register_deactivation_hook( __FILE__, 'deactivate' );
function deactivate() {
	flush_rewrite_rules();
}

// Creates a new rewrite rule (Do Not Change!)
add_action( 'init', 'rewrite' );
function rewrite() {
	add_rewrite_rule( 'admin/?$', 'wp-admin', 'top' );
	add_rewrite_rule( 'login/?$', 'wp-login.php', 'top' );
	add_rewrite_rule( 'register/?$', 'wp-register.php', 'top' );
}