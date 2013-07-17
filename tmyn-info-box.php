<?php
/**
 * Plugin Name: The More You Know info box
 * Plugin URI: https://github.com/ramiabraham/tmyn-info-box-shortcode
 * Description: A very small, very corny plugin. Shows an info box, in which you can specify text. The background is from "The More You Know"; an educational series that was popular in the 80's and 90's. They've since changed their logo, but this one was popular for quite a while. Yep.
 * Version: 0.1
 * Author: Rami Abraham
 * Author URI: http://rami.nu
 * Contributors: ramiabraham
 *
 * @link https://github.com/ramiabraham/tmyn-info-box-shortcode
 *
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @package TMYN_Info_Box_shortcode
 *
 */
	
if ( ! function_exists('the_more_you_know')) {
	
	function the_more_you_know( $atts, $content = null ) {
	extract( shortcode_atts( array(
	'type' => 'alert-info', /* alert-info, alert-success, alert-error */
	'text' => '', 
	), $atts ) );
	
	$output = '<div class="tmyn fade in alert-block alert-'. $type . '"><div class="tmyn-logo-left"></div>';
	$output .= '<p>' . $text . '</p></div>';
	
	return $output;
}

add_shortcode('tmyn', 'the_more_you_know'); //end the more you know info box
	
} // exists check

// Now let's grab the stylesheet. Jesus what am I doing with my time it's 10:30 on a Tuesday.

if ( ! function_exists('the_more_you_know_register_style')) {
	
	
function the_more_you_know_register_style() {
	wp_register_style( 'tmyn-info-box', plugins_url( 'tmyn-info-box/lib/tmyn-info-box.css' ) );
	wp_enqueue_style( 'tmyn-info-box' );
}

add_action( 'wp_enqueue_scripts', 'the_more_you_know_register_style' );

} // exists check

?>