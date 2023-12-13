<?php

if( function_exists('acf_add_local_field_group') ) {
  $field_group = generate_acf_field_group('project', 'Project Information');

  $field_description = generate_acf_field(
    $field_group,
    'subtitle',
    'Subtitle',
    'text'
  );
  
  $field_category = generate_acf_field(
    $field_group,
    'category',
    'Category',
    'radio',
    array(
      'instructions' => 'Projects with the same category will be grouped together.',
      'choices' => array(
        'branding' => 'branding',
        'ilustracao' => 'ilustração',
        'video' => 'vídeo',
        'web' => 'web'
      )
    )
  );

  $field_description = generate_acf_field(
    $field_group,
    'description',
    'Description',
    'wysiwyg',
    array(
      'media_upload' => 0
    )
  );

  $field_content = generate_acf_field(
    $field_group,
    'content',
    'Content',
    'repeater'
  );
  
  $field_content_image = generate_acf_field(
    $field_content['key'],
    'image',
    'Image',
    'image',
    array(
      'required'=>1
    )
  );
  
  $acf_columns = new ACFColumns('project', array($field_category));
}



