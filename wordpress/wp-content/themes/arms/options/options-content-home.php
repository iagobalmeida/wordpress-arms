<?php

function add_homepage_slide_field_group($slide_number) {
  acf_add_local_field_group(array(
    'key' => 'options-content-home-slide-'.$slide_number.'',
    'title' => 'Slide '.$slide_number.'',
    'fields' => array (
        array (
            'key' => 'options-content-home-slide-'.$slide_number.'-title',
            'label' => 'Title',
            'instructions' => 'Short word that will be highlighted in the slide.',
            'name' => 'options-content-home-slide-'.$slide_number.'-title',
            'type' => 'text',
            'required' => 1,
            'wrapper' => array(
              'width' => '50%'
            )
        ),
        array (
            'key' => 'options-content-home-slide-'.$slide_number.'-cta',
            'label' => 'CTA',
            'instructions' => 'Short text that will be presented inside the action button of the slide',
            'name' => 'options-content-home-slide-'.$slide_number.'-cta',
            'type' => 'text',
            'required' => 1,
            'wrapper' => array(
              'width' => '50%'
            )
        ),
        array (
            'key' => 'options-content-home-slide-'.$slide_number.'-description',
            'label' => 'Description',
            'instructions' => 'Longer content to be presented in the slide.',
            'name' => 'options-content-home-slide-'.$slide_number.'-description',
            'type' => 'wysiwyg',
            'media_upload' => 0,
            'required' => 1
        ),
      ),
    'location' => array (
          array (
              array (
                  'param' => 'options_page',
                  'operator' => '==',
                  'value' => 'options-content-home',
              ),
          ),
    ),
  ));
}

if( function_exists('acf_add_options_page') ) {
  acf_add_options_sub_page(array(
      'page_title'    => 'Homepage',
      'menu_title'    => 'Homepage',
      'menu_slug'     => 'options-content-home',
      'parent_slug'   => 'options-content',
  ));
  add_homepage_slide_field_group('01');
  add_homepage_slide_field_group('02');
  add_homepage_slide_field_group('03');
  add_homepage_slide_field_group('04');
}