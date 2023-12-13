<?php

add_filter('acf/pre_save_post' , 'my_pre_save_post' );

function my_pre_save_post( $post_id ) {
  // bail early if not a new post
  if( $post_id !== 'new_post' ) {
    return $post_id;
  }

  // vars
  $title = $_POST['fields']['field_59c6d5f47898c'];
  global $current_user;
      get_currentuserinfo();

  // Create a new post
  $post = array(
    'post_status'	=> 'publish',
    'post_type'		=> 'contact',
    'post_title'	=> $current_user->user_login.'-'.$title,
    'post_author'	=> $current_user->user_login,
  );	

  // insert the post
  $post_id = wp_insert_post( $post ); 


  // return the new ID
  return $post_id;
}