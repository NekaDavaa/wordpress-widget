<?php
/*
 * Plugin Name:       Contact Widget
 * Plugin URI:        https://weband.bg
 * Description:       I love to practise <3
 * Version:           1.0
 * Requires PHP:      7.2
 * Author:            Antonio Pavlov
 * Author URI:        https://apavlov.bg
 * License:           GPL v2 or later
 * Text Domain:       contact-widget
 */

/*
 * Include JavaScript Flie
 */

function my_plugin_scripts() {
    wp_enqueue_script( 'my-js', plugin_dir_url( __FILE__ ) . '/js/script.js', array('jquery' ), '1.0', false );
}
add_action( 'wp_enqueue_scripts', 'my_plugin_scripts' );

 /*
  * Include Widget class
  */

 include ('class.contact-widget.php');

  /*
  * Register the widget
  */

function register_contact_widget() {
    register_widget( 'Contact_Widget' );
}
add_action( 'widgets_init', 'register_contact_widget' ); 