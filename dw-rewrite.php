<?php
/*
Plugin Name: DW ReWrite
Plugin URI: http://www.danielwoolnough.com/product/dw-rewrite/
Description: This plugin enhances the WordPress login and admin interface by changing the URL's from "/wp-login.php" & "/wp-admin/" to a much better looking "/login" & "/admin". 
("/wp-login.php" & "/wp-admin/" will still work as it did before).
Version: 1.1
Author: Daniel Woolnough
Author URI: http://www.danielwoolnough.com/
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
}