<?php 
/**
 * Wordpress all hooks
 */
class Jak_Hooks {

	/**
	 * Constructor function
	 *
	 * @since 1.0
	 */
	// public function __construct( $plugin ) {
	// 	$this->name = $plugin['Name'];
	// 	$this->slug = $plugin['TextDomain'];
	// 	$this->version = $plugin['Version'];
	// }
	
	
	
	/**
	 * @see add_action
	 *
	 *
	 * @since 1.0
	 */
	public function action( $tag, $callback, $num_args = 1, $priority = 10 ) {
		add_action( $tag, array( $this, $callback ), $num_args, $priority );
	}

	/**
	 * @see add_filter
	 *
	 *
	 * @since 1.0
	 */
	public function filter( $tag, $callback, $num_args = 1, $priority = 10 ) {
		add_filter( $tag, array( $this, $callback ), $num_args, $priority );
	}

	/**
	 * @see add_shortcode
	 *
	 * @since 1.0
	 */
	public function register( $tag, $callback ) {
		add_shortcode( $tag, array( $this, $callback ) );
	}

	/**
	 * @see add_action( 'wp_ajax_..' )
	 *
	 *
	 * @since 1.0
	 */
	public function priv( $handle, $callback ) {
		$this->action( "wp_ajax_{$handle}", $callback );
	}

	/**
	 * @see add_action( 'wp_ajax_nopriv_..' )
	 *
	 *
	 * @since 1.0
	 */
	public function nopriv( $handle, $callback ) {
		$this->action( "wp_ajax_nopriv_{$handle}", $callback );
	}

	/**
	 * @see add_action( 'wp_ajax_nopriv_..' )
	 * @see add_action( 'wp_ajax_priv_..' )
	 *
	 *
	 * @since 1.0
	 */
	public function all( $handle, $callback ) {
		$this->priv( $handle, $callback );
		$this->nopriv( $handle, $callback );
	}
}