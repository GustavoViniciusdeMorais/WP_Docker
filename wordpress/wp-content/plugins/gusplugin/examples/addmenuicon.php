<?php

function menu_icon(){
     //Labels for post type
     $labels = array(
           'name'               => 'GusPlugin',
           'singular_name'      => 'GusPlugin',
           'menu_name'          => 'GusPlugin',
           'name_admin_bar'     => 'GusPlugin',
           'add_new'            => 'Novo', 
           'add_new_item'       => 'Add New Item',
           'new_item'           => 'New Item', 
           'edit_item'          => 'Edit Item',
           'view_item'          => 'View Item',
           'all_items'          => 'All Items',
           'search_items'       => 'Search',
           'parent_item_colon'  => 'Parent Items:', 
           'not_found'          => 'No found.', 
           'not_found_in_trash' => 'No found in Trash.',
       );
       //arguments for post type
       $args = array(
           'labels'            => $labels,
           'public'            => true,
           'publicly_queryable'=> true,
           'show_ui'           => true,
           'show_in_nav'       => true,
           'query_var'         => true,
           'hierarchical'      => false,
           'supports'          => array('title','thumbnail','editor'),
           'has_archive'       => true,
           'menu_position'     => 20,
           'show_in_admin_bar' => true,
           'menu_icon'         => 'dashicons-database',
           'rewrite'            => array('slug' => 'locations', 'with_front' => 'true')
       );
       //register post type
       register_post_type('wp_gusplugin', $args);
}