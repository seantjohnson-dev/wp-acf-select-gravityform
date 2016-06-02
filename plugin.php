<?php namespace Lean\Acf\Types\Gravity;
/*
Plugin Name: Advanced Custom Fields: Gravity Forms extension
Plugin URI: https://github.com/moxie-lean/wp-acf-select-gravityform
Description: ACF Type that allow to have a custom gravity form type
Version: 0.1.0
Author: Moxie
Author URI: http://getmoxied.net/
*/


$url = plugin_dir_url( __FILE__ );
$path = plugin_dir_path( __FILE__ );
$autoload = $path . 'vendor/autoload.php';

if ( file_exists(  ) ) {
	require_once $autoload;
}

if ( class_exists( __NAMESPACE__ . '\\Select' ) ) {
	new Select( $url, $path );
} else {
	add_action( 'admin_notices', function(){
	?>
	<div class="update-nag notice is-dismissible">
		<p>Make sure you are including the <code>vendor/autoload.php</code> file for the <strong>ACF Gravity Form Select component.</strong></p>
	</div>
	<?php
		deactivate_plugins( plugin_basename( __FILE__ )  );
	});
}
