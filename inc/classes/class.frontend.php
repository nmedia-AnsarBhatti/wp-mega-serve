<?php
/**
 * Mega Quiz Front-End class
**/

/* 
**========== Direct access allowed =========== 
*/
if( ! defined('ABSPATH' ) ){ exit; }

class WPQM_FrontEnd {

    private static $ins = null;

    function __construct() {

        add_action('frontend_enqueue_scripts', array($this, 'load_script'));
        add_shortcode( 'wpmq-form',  array($this, 'Form_Submit_Template' ));
        add_shortcode( 'wpmq-simple-quiz',  array($this, 'Simple_Quiz_Template' ));
        add_shortcode( 'wpmq-music-quiz',  array($this, 'Music_Quiz_Template' ));

    }

    public static function get_instance() {
        // create a new object if it doesn't exist.
        is_null(self::$ins) && self::$ins = new self;
        return self::$ins;
    }

    /* 
    **========== Load all front-end scripts =========== 
    */
    function load_script() {
        
        wp_enqueue_style('WPMQ-bs', WPMQ_URL."/css/bootstrap.min.css");
        wp_enqueue_style('WPMQ-frontend-form', WPMQ_URL."/css/wpmq-form.css");
        wp_enqueue_style('WPMQ-frontend-quiz', WPMQ_URL."/css/wpmq-simple-quiz.css");
        wp_enqueue_style('WPMQ-font-asme', WPMQ_URL."/css/font-awesome/css/font-awesome.css");
        wp_enqueue_style('WPMQ-swlt', WPMQ_URL."/css/sweetalert.css");

        wp_enqueue_script('WPMQ-swlt', WPMQ_URL."/js/sweetalert.js", array('jquery'), WPMQ_VERSION, true);
    }

    /* 
    **========== Form Templates =========== 
    */
    function Form_Submit_Template() {
        
        $this -> load_script();
        ob_start();

        $member_template   = "shortcodes/wpmq-submit-form.php";
        $template_vars      = array( "form" => $this );  
        $this->wpmq_load_templates( $member_template, $template_vars );

        $wpmq_frontend = ob_get_clean();

        return $wpmq_frontend;
    }


    /* 
    **========== Quiz Templates =========== 
    */
    function Simple_Quiz_Template() {
        
        $this -> load_script();
        ob_start();

        $member_template   = "shortcodes/wpmq-simple-quiz.php";
        $template_vars      = array( "quiz" => $this );  
        $this->wpmq_load_templates( $member_template, $template_vars );

        $wpmq_frontend = ob_get_clean();

        return $wpmq_frontend;
    }

     /* 
    **========== Music Quiz Templates =========== 
    */
    function Music_Quiz_Template() {
        
        $this -> load_script();
        ob_start();

        $member_template   = "shortcodes/wpmq-music-quiz.php";
        $template_vars      = array( "quiz" => $this );  
        $this->wpmq_load_templates( $member_template, $template_vars );

        $wpmq_frontend = ob_get_clean();

        return $wpmq_frontend;
    }


    /* 
    **========== Quiz Templates Load =========== 
    */
    function wpmq_load_templates( $template_name, $vars = null) {

        if( $vars != null && is_array($vars) ){
            extract( $vars );
        };

        $template_path =  WPMQ_PATH . "/templates/{$template_name}";
        if( file_exists( $template_path ) ){
            require ( $template_path );
        } else {
            die( "Error while loading file {$template_path}" );
        }
    }

    
}

WPQM_FrontEnd();
function WPQM_FrontEnd() {
    return WPQM_FrontEnd::get_instance();
}