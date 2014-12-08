<?php
/** 
 * Top boilerplate layer of the CPT / RPT 1 "stack". 
 * 
 * You're going to edit this so make a copy (and be sure to rename it) in your "local" code (i.e., theme or plugin), 
 * fill in the TODOs, and that's it. That's all these is to doing CPTs The ezWay.
 *
 * TODO (@link ) 
 *
 * PHP version 5.3
 *
 * LICENSE: MIT
 *
 * @package WPezClasses
 * @author Mark Simchock <mark.simchock@alchemyunited.com>
 * @since 0.5.0
 * @license MIT
 */
 
/*
 * == Change Log == 
 *
 */

if ( ! defined('ABSPATH') ) {
	header('HTTP/1.0 403 Forbidden');
    die();
}

if ( ! class_exists('TODO-CLASS_NAME' ) ){
  class TODO-CLASS_NAME extends Class_WP_ezClasses_CPT_RPT_1_Public_Exclude_From_Search_1-TODO {

    protected $_str_post_type;  

		protected function __construct() {	
			parent::__construct();
		}
		
		/*
		 * * * IMPORTANT * * * 
		 *
		 * When you do the: TODO-CLASS_NAME::ez_new('my_post_type_name');
		 *
		 * Be sure to pass your post type name. All the other parms that matter are below. This gives you
		 * a "last minute" opportunity to name the CPT.
		 */
		public function ez__construct( $str_post_type = '' ) {
		
		  $this->_str_post_type = $str_post_type;
		
		  add_action( 'init', array($this, 'cpt_do'), 50);
		  
		}
		
		protected function this_cpt_do( $str_cpt_name = '' ){
		
		  $str_post_type = $this->_str_post_type;
		  if ( empty($str_post_type) ){
		    $str_post_type = $this->this_post_type();
		  }
		
		  $arr_args = array(
			  
			'post_type'		=> $str_post_type,
			'labels'		=> $this->this_post_type_labels(),
			'supports'		=> $this->this_post_type_supports(),
			'arguments'		=> $this->this_post_type_arguments(),
			'capabilities'	=> $this->capabilities_settings(),
			);
		  return  $arr_args;
		
		}
		
		/**
		 * TODO or you can pass the name is an the arg of ::ez_new()
		 */
		protected this_post_type(){
		
		  return substr('TODO_' . __CLASS__, 0, 19);
		
		}
		
		
		protected function this_post_type_labels(){
		
			$str_labels_plural_name = 'TODO';
		
			$arr_register_post_type_labels	= array(
	
												'name'					=> 'TODO',
												'singular_name' 		=> 'TODO',
												'search_items' 			=> 'Search ' . $str_labels_plural_name,
												'not_found' 			=> 'No ' . $str_labels_plural_name . ' found',
												'not_found_in_trash'	=> 'No ' . $str_labels_plural_name . ' found in trash',
												'menu_name'				=> 'TODO'
											);	
												
			return $arr_register_post_type_labels;
		}
		
		/*
		 * Configure these or just rely on the parent(s). 
		 */
		protected function this_post_type_supports(){
		
		  $arr_register_post_type_supports = array();
		  
		  /*
		  $arr_register_post_type_supports = array(
		  
		    'title'				=> true,
			'editor'			=> true,
			'author'			=> true,
			'thumbnail' 		=> true,			// (featured image, current theme must also support post-thumbnails)
			'excerpt'			=> true,		
			'trackbacks'		=> false,
			'custom-fields'		=> false,			
			'comments'			=> false,			// (also will see comment count balloon on edit screen)
			'revisions'			=> false,			// (will store revisions)
			'page-attributes'	=> false, 			//(menu order, hierarchical must be true to show Parent option)
			'post-formats' 		=> false,			// add post formats,
		  );
		  */
		  
		  return $arr_register_post_type_supports;
		}
		
		
		
		/*
		 * Note: You can add any other args here. This is the minimum viable subset that needs tending to.
		 */
		protected function this_post_type_arguments(){
		
		  $arr_register_post_type_arguments = array(
		  
		    'description'		=> 'TODO',
			'rewrite' 			=> array('slug' => 'TODO'),
			'menu_position' 	=> 30,	
			'menu_icon' 		=> NULL,
		  );
		  
		  return $arr_register_post_type_arguments;
		}
					
		/*
		 * capabilites are unique to a given project and should be manually configured.
		 *
		 * that said, it's not impossible that you'll design your own parent class with a typical fixed set of caps
		 * and then override as necessary.
		 */
		public function capabilities_settings(){
		
			$arr_capabilities = = array();
			
			return $arr_capabilities;
		}
		
	}
}

// Don't worry about the add_action('init',...) that's taken care of as well :)
$obj_new_TODO-CLASS_NAME = TODO-CLASS_NAME::ez_new();