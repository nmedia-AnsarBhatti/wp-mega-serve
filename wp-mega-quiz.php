<?php 
/*
Plugin Name: Wordpress Mega Quiz
Plugin URI: http://www.example.com
Description: This plugn allow you to add quizes
Version: 7.0
Author: Abdul Majid
Text Domain: wpmq
Author URI: http://www.example.com/
*/

/* 
**========== Direct access not allowed =========== 
*/
if( ! defined('ABSPATH' ) ){ exit; }

/* ======= Define wccf constant =========== */
define( 'WPMQ_PATH', untrailingslashit(plugin_dir_path( __FILE__ )) );
define( 'WPMQ_URL', untrailingslashit(plugin_dir_url( __FILE__ )) );
define( 'WPMQ_VERSION', 2.0 );
define( 'WPMQ_DEBUG', true );

/* 
**=========== plugin includes files =========== 
*/
if( file_exists( dirname(__FILE__).'/inc/helpers.php' )) include_once dirname(__FILE__).'/inc/helpers.php';
if( file_exists( dirname(__FILE__).'/inc/cpt.php' )) include_once dirname(__FILE__).'/inc/cpt.php';
if( file_exists( dirname(__FILE__).'/inc/admin.php' )) include_once dirname(__FILE__).'/inc/admin.php';
if( file_exists( dirname(__FILE__).'/inc/classes/class.admin.php' )) include_once dirname(__FILE__).'/inc/classes/class.admin.php';
if( file_exists( dirname(__FILE__).'/inc/classes/class.frontend.php' )) include_once dirname(__FILE__).'/inc/classes/class.frontend.php';


class WP_Mega_quiz {

    private static $ins = null;
    
    function __construct(){


        if( !session_id() )
        {
            session_start();
        }



        // add_action('admin_menu', 'my_admin_menu'); 
        add_action( 'init', 'wpmq_cpt_register_post' );

    }

    public static function get_instance() {
          // create a new object if it doesn't exist.
        is_null(self::$ins) && self::$ins = new self;
        return self::$ins;
    }
}

// lets start plugin
add_action('plugins_loaded', 'wpmq_start');
function wpmq_start() {
    return WP_Mega_quiz::get_instance();
}