<?php
register_post_type( 'board-meeting',
  array(
    'labels' => array(
      'name'        	=> 'Board Meetings',
      'singular_name' => 'Board Meeting',
      'menu_name'	    => 'Board Meetings',
      'add_new_item'	=> 'Add New Meeting',
    ),
    'public'              => true,
    'show_ui'             => true,
    'rewrite'             => array( 'slug' => 'board-meetings' ),
    'capability_type'    	=> 'post',
    'menu_icon' 		 			=> 'dashicons-clipboard',
    'supports'           	=> array( 'title', 'editor'),
  )
);

// Add/Register board meeting template page
// Add board meeting page to database 
