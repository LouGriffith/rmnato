<?php

// Create Location Custom Post Type
add_action('init', 'cptui_register_my_cpt_location');
function cptui_register_my_cpt_location() {
register_post_type('location', array(
'label' => 'Locations',
'description' => '',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'location', 'with_front' => true),
'query_var' => true,
'supports' => array('title','editor','excerpt','thumbnail'),
'labels' => array (
  'name' => 'Locations',
  'singular_name' => 'Location',
  'menu_name' => 'Locations',
  'add_new' => 'Add Location',
  'add_new_item' => 'Add New Location',
  'edit' => 'Edit',
  'edit_item' => 'Edit Location',
  'new_item' => 'New Location',
  'view' => 'View Location',
  'view_item' => 'View Location',
  'search_items' => 'Search Locations',
  'not_found' => 'No Locations Found',
  'not_found_in_trash' => 'No Locations Found in Trash',
  'parent' => 'Parent Location',
)
) ); }

// Create Staff Custom Post Type
add_action('init', 'cptui_register_my_cpt_staff');
function cptui_register_my_cpt_staff() {
register_post_type('staff', array(
'label' => 'Staff',
'description' => '',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'staff', 'with_front' => true),
'query_var' => true,
'supports' => array('title','revisions'),
'labels' => array (
  'name' => 'Staff',
  'singular_name' => 'Staff Member',
  'menu_name' => 'Staff',
  'add_new' => 'Add Staff Member',
  'add_new_item' => 'Add New Staff Member',
  'edit' => 'Edit',
  'edit_item' => 'Edit Staff Member',
  'new_item' => 'New Staff Member',
  'view' => 'View Staff Member',
  'view_item' => 'View Staff Member',
  'search_items' => 'Search Staff',
  'not_found' => 'No Staff Found',
  'not_found_in_trash' => 'No Staff Found in Trash',
  'parent' => 'Parent Staff Member',
)
) ); }

?>