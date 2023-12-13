<?php 

function get_projects($count=null) {
  $posts = get_posts(array(
      'posts_per_page'    => -1,
      'post_type'         => 'project'
  ));
  $projects = array();
  foreach ($posts as $post) {
    $projects[] = array_merge($post->to_array(), get_fields($post->ID));
    $projects[] = array_merge($post->to_array(), get_fields($post->ID));
  }
  return $count ? array_slice($projects, 0, $count) : $projects;
}

function get_project_categories() {
  $field = get_field_object('project_category');
  $choices = $field['choices'];
  return $choices;
}