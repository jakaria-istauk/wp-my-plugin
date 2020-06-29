<?php 
require dirname( __FILE__ ) . '/hooks.php';

class Front extends Jak_Hooks{
	public function __constructor($plugin){
		echo $this->plugin = $plugin;
		
	}
	public function enqueue_scripts(){
		wp_enqueue_script( $this->plugin, plugin_dir_url( __FILE__ ) . 'assets/js/front.js', array( 'jquery' ), null, true );
	}
	public function head(){
		return $text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";				
	}
}
?>
