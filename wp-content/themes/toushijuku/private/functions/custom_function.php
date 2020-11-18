<?php
// remove default post type

add_action( 'admin_menu', 'remove_default_post_type' );

function remove_default_post_type() {
    remove_menu_page( 'edit.php' );
}

add_action( 'admin_bar_menu', 'remove_default_post_type_menu_bar', 999 );

function remove_default_post_type_menu_bar( $wp_admin_bar ) {
    $wp_admin_bar->remove_node( 'new-post' );
}

add_action( 'wp_dashboard_setup', 'remove_draft_widget', 999 );

function remove_draft_widget(){
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
}

// end remove

function string_limit($input, $length) {
  $result = '';
  $result = mb_strlen( $input ) > $length ? mb_substr($input, 0, $length) . '...' : $input;
  return $result;
}

function get_first_paragraph(){
  global $post;
  $str = wpautop( get_the_content() );
  $start = strpos($str, '<p>');
  $str = substr( $str, $start, strpos( $str, '</p>' ) + 4 );
  $str = strip_tags($str, '<a><strong><em>');
  return string_limit($str, 130);
}

function query_articles() {
  $args = array(
    'post_type'      => ARTICLES_POST_TYPE,
    'post_status'    => 'publish',
    'posts_per_page' => 4,
    'order'          => 'DESC',
  );

  return new WP_Query( $args );
}

add_filter( 'body_class', 'slug_class_name' );
function slug_class_name( $classes ) {
  global $post;
  // add 'post_name' to the $classes array 
  $classes[] = $post->post_name .'-page';
  // return the $classes array
  return $classes;
}

//add author in screen option
function wpcodex_add_author_support_for_posts() {
	add_post_type_support( 'articles', 'author' );
}
add_action( 'init', 'wpcodex_add_author_support_for_posts' );

/* Set post views count*/
function count_post_visits() {
	if( is_single() ) {
		global $post;
		$views = get_post_meta( $post->ID, 'my_post_viewed', true );
		if( $views == '' ) {
			update_post_meta( $post->ID, 'my_post_viewed', '1' );	
		} else {
			$views_no = intval( $views );
			update_post_meta( $post->ID, 'my_post_viewed', ++$views_no );
		}
	}
}
add_action( 'wp_head', 'count_post_visits' );

function query_popular_articles() {
  $args = array(
		'post_type'      => ARTICLES_POST_TYPE,
		'post_status'    => 'publish',
		'posts_per_page' => 4,
		'order'          => 'DESC',
		'meta_key'      => 'my_post_viewed',
		'orderby'       => 'meta_value_num',
  );

  return new WP_Query( $args );
}
