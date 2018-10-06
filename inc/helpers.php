<?php 
/*
** Mega Quiz Helper Functions
*/

/* 
**========== Direct access not allowed =========== 
*/
if( ! defined('ABSPATH' ) ){ exit; }

    /* 
	**========== Load templates =========== 
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

    /* 
	**========== Print defualt array =========== 
	*/
    function wpmq_pa($arr){
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    }