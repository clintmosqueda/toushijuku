<?php

$args = array(
    'label' => 'Articles',
    
    'labels' => array(
        'singular_name' => ARTICLES_POST_TYPE, 
        'menu_name' => strtoupper(ARTICLES_POST_TYPE), 
        'add_new_item' => 'Add New Article Post Title', 
        'add_new' => 'Add New Article' , 
        'new_item' => 'New Item', 
        'edit_item' => 'Edit Article Post', 
        'view_item' => 'View Article Post', 
        'not_found' => 'No Posts Found', 
        'not_found_in_trash' => 'ゴミ箱に投稿はありません。', 
        'search_items' => 'Search Article Post', 
    ),

    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'rewrite' => true,

    'supports' => array('title', 'editor', 'thumbnail'),
);

register_post_type(ARTICLES_POST_TYPE,$args);

//column category
$args = array(

  'label'        => 'Categories',
  'labels'       => array(
    'name'          => 'Categories',
    'singular_name' => 'Category',
    'all_items'     => 'Categories'
  ),
  'hierarchical' => true,
  'public'       => true,
  'show_ui'      => true,
  'rewrite'      => array( 'slug' => ARTICLES_POST_TYPE_CATEGORY ),
  'show_in_rest' => true
);
register_taxonomy( ARTICLES_POST_TYPE_CATEGORY, array( ARTICLES_POST_TYPE ), $args );

