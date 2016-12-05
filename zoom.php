<?php
/*
Plugin Name: Zoom-Plugin-Woo-comerce
Plugin URI: https://github.com/villers/WP_Woocommerce_Main_Image_Zoom
Description: Add zoom for principal product image: .woocommerce-main-image.zoom
Version: 0.0.1
Author: VILLERS Mickaël
Author URI: http://mickaelvillers.me/#/
License: MIT/MIT License
*/

class WP_Woocommerce_Main_Image {
    public function __construct() {
        add_action( 'wp_footer', [&$this, 'theme_js']);
    }

    function theme_js(){
        wp_enqueue_script('WP_Woocommerce_Main_Image_jquery-zoom', plugins_url('jquery-zoom/jquery.zoom.min.js', __FILE__), array('jquery'));
        wp_enqueue_script('WP_Woocommerce_Main_Image_main', plugins_url('main.js', __FILE__), array('jquery'));
    }
}

$WP_Woocommerce_Main_Image = new WP_Woocommerce_Main_Image();
