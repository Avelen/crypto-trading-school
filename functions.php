<?php
/**
 * @package WordPress
 * @subpackage cryptotrading
 */

register_nav_menus(array(
	'top' => 'Top menu',
	'lang' => 'Lang menu',
	'bottom' => 'Bottom menu'
));

add_theme_support( 'custom-logo' );
function themename_custom_logo_setup() {
	$defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

add_action('wp_footer', 'add_scripts');
if (!function_exists('add_scripts')) {
	function add_scripts() {
	    if(is_admin()) return false;
	    wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.js','','',true);
	}
}

add_action('wp_print_styles', 'add_styles');
if (!function_exists('add_styles')) {
	function add_styles() {
	    if(is_admin()) return false;
		wp_enqueue_style( 'main', get_template_directory_uri().'/style.css' );
	}
}

function calculator_form_shortcode() {

// Things that you want to do.
	$form = '<div class="calculator">
    <div class="calculator__title">
        <img src="'. get_template_directory_uri() .'/assets/img/calculate-heading.svg">
		</div>
		<div class="calculator__body">
			<div class="input-gruop">
				<div class="input-gruop__item">
					<p>INITIAL INVESTMENT</p>
					<label for="left-input">
						<span>USD</span>
						<input type="text" />
					</label>
				</div>
				<div class="input-gruop__item">
					<label for="right-input">
						<span>USD</span>
						<input type="text" />
					</label>
				</div>
			</div>
			<div class="btn-group">
				<button class="btn">
					Calculate
				</button>
			</div>
		</div>
	</div>';

// Output needs to be return
	return $form;
}
// register shortcode
add_shortcode('calculator', 'calculator_form_shortcode');

?>
