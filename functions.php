<?php
/**
 * Theme Functions
 * 
 * @package ASM
 */

if ( ! defined( 'ASM_DIR_PATH' ) ) {
	define( 'ASM_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'ASM_DIR_URI' ) ) {
	define( 'ASM_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

if ( ! defined( 'ASM_ASSETS_URI' ) ) {
	define( 'ASM_ASSETS_URI', untrailingslashit( get_template_directory_uri() ) . "/assets" );
}

if ( ! defined( 'ASM_BUILD_URI' ) ) {
	define( 'ASM_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . "/assets/build" );
}

if ( ! defined( 'ASM_BUILD_JS_URI' ) ) {
	define( 'ASM_BUILD_JS_URI', untrailingslashit( get_template_directory_uri() ) . "/assets/build/js" );
}

if ( ! defined( 'ASM_BUILD_IMG_URI' ) ) {
	define( 'ASM_BUILD_IMG_URI', untrailingslashit( get_template_directory_uri() ) . "/assets/build/src/img" );
}

if ( ! defined( 'ASM_BUILD_JS_DIR_PATH' ) ) {
	define( 'ASM_BUILD_JS_DIR_PATH', untrailingslashit( get_template_directory() ) . "/assets/build/js" );
}

if ( ! defined( 'ASM_BUILD_CSS_DIR_PATH' ) ) {
	define( 'ASM_BUILD_CSS_DIR_PATH', untrailingslashit( get_template_directory() ) . "/assets/build/css" );
}

if ( ! defined( 'ASM_BUILD_CSS_URI' ) ) {
	define( 'ASM_BUILD_CSS_URI', untrailingslashit( get_template_directory_uri() ) . "/assets/build/css" );
}

if ( ! defined( 'ASM_BUILD_LIB_URI' ) ) {
	define( 'ASM_BUILD_LIB_URI', untrailingslashit( get_template_directory_uri() ) . "/assets/build/library" );
}

if ( ! function_exists( 'dump' ) ) :
	/**
	 * debug function outputs php array / object in readable form instead of on one line
	 * @param $arg, array or object
	 */
	function dump( $arg ) {
		echo '<pre>';
		var_dump( $arg );
		echo '</pre>';
	}

endif;
add_action( "after_theme_setup","dump" );

if ( ! function_exists( 'std_button' ) ) :
	/**
	 * Outputs a standard button
	 * @param $btn_href - hyper link
	 * @param $btn_text - button text
	 */
	function std_button( $btn_href, $btn_text ) {
		?>
			<button class="learn-more" onclick="location.href='<?php echo esc_html( $btn_href ); ?>'">
			<span class="circle" aria-hidden="true">
				<span class="icon arrow"></span>
			</span>
			<span class="button-text"><?php echo $btn_text; ?></span>
			</button>
		<?php
	}

endif;

require_once ASM_DIR_PATH . '/inc/helpers/autoloader.php';
//require_once ASM_DIR_PATH . '/inc/helpers/template-tags.php';

function asm_get_theme_instance() {
	// Instantiate main theme class
	\ASM_THEME\Inc\ASM_THEME::get_instance();
}

asm_get_theme_instance();