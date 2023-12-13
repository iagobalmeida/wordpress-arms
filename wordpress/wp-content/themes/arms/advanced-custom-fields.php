<?php

if( function_exists('acf_add_local_field_group') ) {
  acf_add_local_field_group(array(
      'key' => 'project_fields_group',
      'title' => 'Project Information',
      'fields' => array (
          array (
              'key' => 'project_category',
              'label' => 'Category',
              'instructions' => 'Projects with the same category will be grouped in the projects list page.',
              'name' => 'project_category',
              'type' => 'radio',
              'choices' => array(
                'brand_identity' => 'Brand Identity'
              ),
              'other_choice' => 1,
              'save_other_choice' => 1
          ),
          array (
            'key' => 'project_description',
            'label' => 'Description',
            'name' => 'project_description',
            'type' => 'wysiwyg',
            'media_upload' => 0
          ),
          array (
            'key' => 'project_content',
            'label' => 'Content',
            'name' => 'project_content',
            'type' => 'repeater'
          )
      ),
      'location' => array (
          array (
              array (
                  'param' => 'post_type',
                  'operator' => '==',
                  'value' => 'project',
              ),
          ),
      ),
  ));
}

if(function_exists('acf_add_local_field')) {
  acf_add_local_field(array(
    'key'            => 'project_content_image',
    'label'          => 'Image',
    'name'           => 'project_content_image',
    'parent'         => 'project_content', // key of parent repeater
    'type'           => 'image',
    'required'       => 1
  ));
}

function add_acf_columns ( $columns ) {
  return array(
    'post_title' => __ ('Title'),
    'project_category' => __ ('Category'),
    'post_date' => __('Creation Date')
  );
}
add_filter ( 'manage_project_posts_columns', 'add_acf_columns' );

function project_custom_column ( $column, $post_id ) {
   switch ( $column ) {
     case 'post_title':
       echo '<a href='.get_edit_post_link($post_id).'>'.get_the_title($post_id).'</a>';
       break;
     case 'project_category':
       echo get_field ( 'project_category', $post_id );
       break;
      case 'post_date':
        echo '<time datetime="'.get_the_date('c').'" itemprop="datePublished">'.get_the_date().'</time>';
        break;
   }
 }
 add_action ( 'manage_project_posts_custom_column', 'project_custom_column', 10, 2 );