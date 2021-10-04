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
		wp_register_style( 'bootstrap-css', ASM_DIR_URI .'/assets/src/library/css/bootstrap.min.css', [], false, 'all' );
		wp_register_style( 'fonts-css', ASM_DIR_URI .'/assets/src/library/fonts/fonts.css', [], false, 'all' );
		wp_register_style( 'slick-css', ASM_DIR_URI .'/assets/css/slick.css', [], false, 'all' );
		wp_register_style( 'slick-theme-css', ASM_DIR_URI .'/assets/css/slick-theme.css', ['slick-css'], false, 'all' );
		//wp_register_style( 'fontawesome.min-css', ASM_DIR_URI .'/assets/fonts/fontawesome/css/fontawesome.min.css', [], false, 'all' );
		wp_register_style( 'main-css', ASM_DIR_URI .'/assets/css/main.css', ['style-css'], filemtime( ASM_DIR_PATH . '/assets/css/main.css' ), 'all' );
		wp_register_style( 'style-css', get_stylesheet_uri(), [], filemtime( ASM_DIR_PATH . '/style.css' ), 'all' );

		// enqueue styles
		wp_enqueue_style( 'bootstrap-css' );
		wp_enqueue_style( 'slick-css' );
		wp_enqueue_style( 'slick-theme-css' );
		wp_enqueue_style( 'main-css' );
		//wp_enqueue_style( 'fontawesome.min-css' );
		wp_enqueue_style( 'style-css' );
	}

	public function register_scripts() {
		// register scripts
		wp_register_script( 'slick-js', ASM_DIR_URI .'/assets/js/slick.min.js', ['jquery'], false, true );
		wp_register_script( 'gsap-min-js', ASM_DIR_URI .'/assets/js/gsap/minified/gsap.min.js', [], false, true );
		wp_register_script( 'ScrollTrigger-min-js', ASM_DIR_URI .'/assets/js/gsap/minified/ScrollTrigger.min.js', ['gsap-min-js'], false, true );
		wp_register_script( 'main-js', ASM_BUILD_JS_URI .'/main.js', ['jquery','slick-js'], false, true );
		wp_register_script( 'bootstrap-js', ASM_DIR_URI .'/assets/src/library/js/bootstrap.min.js', [ 'jquery' ], false, true );
		
    	// enqueue scripts
    	wp_enqueue_script( 'bootstrap-js' );
    	wp_enqueue_script( 'gsap-min-js' );
    	wp_enqueue_script( 'ScrollTrigger-min-js' );
    	wp_enqueue_script( 'main-js' );
    	wp_enqueue_script( 'slick-js' );
	}
}