<?php
/*
Plugin Name: Plugin Name Here
Description: Plugin Descrciption here
Plugin URI: https://jakariaistauk.com
Author: Jakaria Istauk
Author URI: https://jakariaistauk.com
Version: 1.0.0
Text Domain: text-domain
Domain Path: /languages
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$plugin = 'My-Plugin'; //replace this with your plugin name
require dirname( __FILE__ ) . "/includes/function.php";

$front = new Front( $plugin );
$admin = new Admin( $plugin );
$ajax = new Ajax();
// $front->head();
// add_action( 'wp_head', [ $front, 'head'] );
// add_filter( 'the_content', [ $front, 'head'] );
$front->action( 'the_content', 'head' );
$front->action( 'admin_enqueue_scripts', 'enqueue_scripts' );
