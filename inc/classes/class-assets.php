<?php

/**
 * Enqueue Theme Assets.
 *
 * @package ASM
 */

namespace ASM_THEME\Inc;

use ASM_THEME\Inc\Traits\Singleton;

class Assets {
    use Singleton;

	protected function __construct() {

		$this->setup_hooks();
	}
     
	protected function setup_hooks() {
		/**
		 * Actions.
		 */
		//add_action( 'after_setup_theme', [ $this, 'setup_theme' ] );
		add_action('wp_enqueue_scripts', [ $this, 'register_styles' ]);
		add_action('wp_enqueue_scripts', [ $this, 'register_scripts' ]);

	}

	public function register_styles() {
		// register styles
		wp_register_style( 'bootstrap-css', ASM_BUILD_LIB_URI .'/css/bootstrap.min.css', [], false, 'all' );
		wp_register_style( 'slick-css', ASM_BUILD_LIB_URI .'/css/slick.css', [], false, 'all' );
		wp_register_style( 'slick-theme-css', ASM_BUILD_LIB_URI .'/css/slick-theme.css', ['slick-css'], false, 'all' );
		wp_register_style( 'main-css', ASM_BUILD_CSS_URI .'/main.css', [], filemtime( ASM_BUILD_CSS_DIR_PATH . '/main.css' ), 'all' );

		// enqueue styles
		wp_enqueue_style( 'bootstrap-css' );
		wp_enqueue_style( 'slick-css' );
		wp_enqueue_style( 'slick-theme-css' );
		wp_enqueue_style( 'main-css' );
	}

	public function register_scripts() {
		// register scripts
		wp_register_script( 'slick-js', ASM_BUILD_LIB_URI .'/js/slick.min.js', ['jquery'], false, true );
		wp_register_script( 'gsap-min-js', ASM_BUILD_LIB_URI .'/js/gsap.min.js', [], false, true );
		wp_register_script( 'ScrollTrigger-min-js', ASM_BUILD_LIB_URI .'/js/ScrollTrigger.min.js', ['gsap-min-js'], false, true );
		wp_register_script( 'main-js', ASM_BUILD_JS_URI .'/main.js', ['jquery','slick-js'], false, true );
		wp_register_script( 'bootstrap-js', ASM_BUILD_LIB_URI .'/js/bootstrap.min.js', [ 'jquery' ], false, true );
		
    	// enqueue scripts
    	wp_enqueue_script( 'bootstrap-js' );
    	wp_enqueue_script( 'gsap-min-js' );
    	wp_enqueue_script( 'ScrollTrigger-min-js' );
    	wp_enqueue_script( 'main-js' );
    	wp_enqueue_script( 'slick-js' );
	}
}