<?php
/* 
** create the Custome post typr
*/

/* 
**========== Direct access not allowed =========== 
*/
if( ! defined('ABSPATH' ) ){ exit; }

	/* 
	**========== Register all custom post type =========== 
	*/
	function wpmq_cpt_register_post() {

		register_post_type( 'wp_quizer', array(
				'labels' => array(
					'name' => __( 'Quizes' ),
					'singular_name' => __( 'Quiz' ),
					'add_new' => __( 'Add New' ),
					'add_new_item' => __('Add New Quiz' ),
					'edit_item' => __('Edit Quiz'),
					'not_found' => __('You did not create any Quiz yet'),
					'not_found_in_trash' => __('Nothing found in Trash'),
					'search_items' => __('Search Quizes')
				),
				'show_ui' => true,
				'show_in_menu' => false,
				'public' => false,
				'supports' => array('title')
			)
		);

		register_post_type( 'wp_quizer_result', array(
				'labels' => array(
					'name' => __( 'Results' ),
					'singular_name' => __( 'Result' ),
					// 'add_new' => __( 'Add New' ),
					// 'add_new_item' => __('Add New Quiz' ),
					'edit_item' => __('Edit Result'),
					'not_found' => __('You did not create any Result yet'),
					'not_found_in_trash' => __('Nothing found in Trash'),
					'search_items' => __('Search Results')
				),
				'show_ui' => true,
				'show_in_menu' => false,
				'public' => false,
				'supports' => array('')
			)
		);
}