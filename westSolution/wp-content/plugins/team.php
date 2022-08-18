<?php
/*
Plugin Name: Movie Reviews
Plugin URI: http://wp.tutsplus.com/
Description: Declares a plugin that will create a custom post type displaying movie reviews.
Version: 1.0
Author: Soumitra Chakraborty
Author URI: http://wp.tutsplus.com/
License: GPLv2
*/

function create_team() {
  register_post_type( 'team',
      array(
          'labels' => array(
              'name' => 'team',
              'singular_name' => 'team',
              'add_new' => 'Add New',
              'add_new_item' => 'Add New team item',
              'edit' => 'Edit',
              'edit_item' => 'Edit team item',
              'new_item' => 'sNew team item',
              'view' => 'View',
              'view_item' => 'View team item',
              'search_items' => 'Search team item',
              'not_found' => 'No team item found',
              'not_found_in_trash' => 'No Movie team found in Trash',
              'parent' => 'Parent team item'
          ),

          'public' => true,
          'menu_position' => 15,
          'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
          'taxonomies' => array( '' ),
          'menu_icon' => plugins_url( 'images/image.png', __FILE__ ),
          'has_archive' => true
      )
  );
}

add_action( 'init', 'create_team' );
?>