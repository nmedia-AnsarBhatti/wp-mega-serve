<?php
/**
 * Mega Quiz Admin class
**/

/* 
**========== Direct access not allowed =========== 
*/
if( ! defined('ABSPATH' ) ){ exit; }

class WPQM_Admin {

    private static $ins = null;

    function __construct() {

        $this->slug = 'wpmq';

        add_action('admin_enqueue_scripts', array($this, 'load_script'));

        add_action('admin_menu', array($this, 'main_admin_menu'), 0);

        add_action( 'add_meta_boxes', array($this, 'quiz_metaboxes_desplay' ) );

    }

    public static function get_instance() {
        // create a new object if it doesn't exist.
        is_null(self::$ins) && self::$ins = new self;
        return self::$ins;
    }

    /* 
    **========== Load all admin scripts =========== 
    */
    function load_script($hook) {
        global $post;
        
        if( ($hook != 'post.php' && $hook != 'post-new.php') || $post->post_type != 'wp_quizer')
            return '';

        wp_enqueue_style('WPMQ-bs', WPMQ_URL."/css/bootstrap.min.css");
        wp_enqueue_style('WPMQ-admin-css', WPMQ_URL."/css/wpmq-admin.css");
        wp_enqueue_style('WPMQ-font-asme', WPMQ_URL."/css/font-awesome/css/font-awesome.css");
        wp_enqueue_style('WPMQ-accordian', WPMQ_URL."/css/accordian.css");
        wp_enqueue_style('WPMQ-swlt', WPMQ_URL."/css/sweetalert.css");

        wp_enqueue_script('WPMQ-admin-js', WPMQ_URL."/js/wpmq-admin.js", array('jquery'), WPMQ_VERSION, true);
        wp_enqueue_script('WPMQ-accordian', WPMQ_URL."/js/accordion.js", array('jquery'), WPMQ_VERSION, true);
        wp_enqueue_script('WPMQ-swlt', WPMQ_URL."/js/sweetalert.js", array('jquery'), WPMQ_VERSION, true);
    }

    /* 
    **========== Quiz admin menus =========== 
    */
    function main_admin_menu() {
        
        add_menu_page( __('Wordpress Mega Quiz', $this->slug), __('Mega Quiz', $this->slug), 'manage_options', $this->slug, array($this, 'admin_page'), 'dashicons-welcome-learn-more', 21);
        add_submenu_page( $this->slug, __('Dashboard', $this->slug), __('Dashboard', $this->slug), 'manage_options', $this->slug, array($this, 'admin_page') );        
        add_submenu_page( $this->slug, __('Create Quiz', $this->slug), __('Create Quiz', $this->slug), 'manage_options', 'edit.php?post_type=wp_quizer', '', '' );
        add_submenu_page( $this->slug, __('Quiz Result', $this->slug), __('Result', $this->slug), 'manage_options', 'edit.php?post_type=wp_quizer_result', '', '' );
    }

    /* 
    **========== Load dashboard template =========== 
    */
    function admin_page(){

        wpmq_load_templates("admin/dashboard.php");
    }

    /* 
    **========== Quiz metaboxes rendering =========== 
    */
    function quiz_metaboxes_desplay(){
    
        // quiz types metabox
        add_meta_box( 
            'quiz_type_id',
            __( 'Select Quiz Type' , $this->slug),
            array($this, 'quiz_type_display' ),
            'wp_quizer',
            'normal',
            'default'
        );

        // question rendering metabox
        add_meta_box( 
            'wpmq_questions_id',
            __( 'Questions' , $this->slug),
            array($this, 'question_display' ),
            'wp_quizer',
            'normal',
            'default'
        );

    }

    /* 
    **========== Load quiz type template =========== 
    */
    function quiz_type_display(){
        // $this->hide_metaboxes();
        wpmq_load_templates("admin/quiz-type.php");
    }

    /* 
    **========== Load questions template =========== 
    */
    function question_display(){
        
        wpmq_load_templates("admin/questions.php");
    }

    // function hide_metaboxes(){
    //     echo '<style>';
    //         echo '.post-type-wp_quizer {
    //                 display:none
    //             }';
    //     echo '</style>';
    // }
}

WPQM_ADMIN();
function WPQM_ADMIN() {
    return WPQM_Admin::get_instance();
}