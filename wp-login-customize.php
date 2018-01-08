<?php
/**
 * Plugin Name: WP Login Customize
 * Description: WP login customization.
 * Version: 1.0
 * Author: Jack Ananchenko
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'DII_Login_Customize' ) ) :

class DII_Login_Customize {

	public static function init() {
		add_action( 'login_enqueue_scripts', array( __CLASS__, 'login_stylesheet' ) );
		add_filter( 'login_header', array( __CLASS__, 'login_header' ) );
		add_filter( 'retrieve_password_message', array( __CLASS__, 'new_password_message' ), 10, 4 );
		add_action( 'login_head', array( __CLASS__, 'change_login_text' ) );
		add_action( 'woocommerce_email_header', array( __CLASS__, 'add_css_to_email' ), 20, 2);
	}

	public static function login_stylesheet() {
    	wp_enqueue_style( 'dii-login', plugin_dir_url( __FILE__ ) . 'assets/css/style-login.css' );
	}

	public static function login_header() {

		include( plugin_dir_path( __FILE__ ).'templates/dii-login-header.php' );
	}

	public static function new_password_message( $message, $key, $user_login, $user_data ) {

		if ( is_multisite() ) {
			$blogname = get_network()->site_name;
		} else {
			$blogname = wp_specialchars_decode(get_option('blogname'), ENT_QUOTES);
		}

		$title = sprintf( __('[%s] Password Reset'), $blogname );
		$title = apply_filters( 'retrieve_password_title', $title, $user_login, $user_data );
		
		$user_email = $user_data->user_email;

		$headers = array('content-type: text/html');

		$message = include( plugin_dir_path( __FILE__ ).'templates/dii-retrieve-password-email.php' );

		wp_mail( $user_email, wp_specialchars_decode( $title ), $message, $headers );

		return false;
	}

	public static function change_login_text() {

	    function oz_username_label( $translated_text, $text, $domain ) {
	        if ( 'Username or Email Address' === $text ) {
	            $translated_text = __( 'Email Address' );
	        }
	        return $translated_text;
	    }
	    add_filter( 'gettext', 'oz_username_label', 20, 3 );
	}

	public static function add_css_to_email($email_heading, $email) {

		if ( $email->id == 'customer_reset_password' ): ?>
		<style type="text/css">
			#header_wrapper {
			    background: #aaa;
			}
		</style>
		<?php endif;
	}

}

endif;

DII_Login_Customize::init();