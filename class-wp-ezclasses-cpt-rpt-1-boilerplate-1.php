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
  class TODO-CLASS_NAME extends Class_WP_ezClasses_CPT_RPT_1 {

	/**
	 * This is where your magic happens. The idea here is to (re) define as little as possible. 
	 *
	 * It is recommended you use this  boilerplate: >>>>>>>>>>>>>>>> TODO <<<<<<<<<<<<<
	 *
	 * This method remains simply as an example. 
	 *
	 * Ref: http://codex.wordpress.org/Function_Reference/register_post_type
	 */			
    public function cpt_todo(){
	  
	  // $this->_str_action = 'init';
	  // $this->_int_priority = 50;
	  
	  
	  $str_args_labels_name_plural = 'TODO';		// just saves a couple key strokes. 
	  
	  $arr_labels = array(
	    'name'					=> 'TODO',			// typically plural
		'singular_name' 		=> 'TODO',
		'search_items' 			=> 'Search ' . $str_args_labels_name_plural,
		'not_found' 			=> 'No ' . $str_args_labels_name_plural . ' found',
		'not_found_in_trash'	=> 'No ' . $str_args_labels_name_plural . ' found in trash',
		'menu_name'				=> 'TODO'
		);
		
		
	  $arr_supports = array(
	    'title'				=> true,
		'editor'			=> true,
		'author'			=> true,
		'thumbnail' 		=> true,			// featured image, current theme must also support post-thumbnails
		'excerpt'			=> true,		
		'trackbacks'		=> false,
		'custom-fields'		=> false,			
		'comments'			=> false,			// also will see comment count balloon on edit screen
		'revisions'			=> false,			// will store revisions
		'page-attributes'	=> false, 			// menu order, hierarchical must be true to show Parent option
		'post-formats' 		=> false,			// add post formats
		);
		
	  $arr_capabilities = array();
	  
	  
	  $this->_arr_args_preset_key = 'TODO'; 	// the key of the preset (that can override the arguments_defaults but before your custom settings)
		
	  $arr_cpt_todo = array(
	  
	    'post_type'		=> 'TODO',
	
		'arguments'		=> array(
		
		  'description'		=> 'TODO',
		  'rewrite' 		=> array(
		    'slug' => 'TODO',
			),
		  'menu_position' 	=> 30,	// TODO
		  'menu_icon' 		=> NULL,
		  
		  'labels'			=> $arr_labels,
		  'supports'		=> $arr_supports,
		  'capabilities'	=> $arr_capabilities, 
		  			
		  ),
	    );
	  
	  return $arr_cpt_todo;	
    }  
  }
}

// Don't worry about the add_action('init',...) that's taken care of as well :)
$obj_new_TODO-CLASS_NAME = TODO-CLASS_NAME::ez_new();