<?php
/**
* Plugin Name: Wp Contact Form 7 to dataLayer
* Plugin URI: https://metricasboss.com.br
* Description: Plugin to mensure Contact form 7 events in Google Tag Manager custom events
* Version: 1.0
* Author: Lucian Fialho
* Author URI: http://metricasboss.com.br/autores/lucianfialho
* Text Domain: wp-contact-form-7-to-datalayer
**/

include_once(ABSPATH .'wp-admin/includes/plugin.php');

class WPCF7TODATALAYER {

    public function __construct()
    {
        // check for plugin using Contact Form 7 to init
        if ( is_plugin_active( 'contact-form-7/wp-contact-form-7.php' ) ) {
            add_action('wp_enqueue_scripts', array($this, 'load_script'));
        }
        
    }
    
    public function load_script()
    {
        wp_enqueue_script(
            'wp-contact-form-7-to-datalayer',
            plugin_dir_url(__FILE__) . 'wpcf7todatalayer.js',
            array(),
            1,
            true
        );
    }

}

new WPCF7TODATALAYER;