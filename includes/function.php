<?php 
$files = [ 'front', 'admin', 'ajax', 'shortcode' ];
foreach ( $files as $key => $file ) {
	require dirname( __FILE__ ) . "/{$file}.php";
}