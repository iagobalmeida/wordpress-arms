<?php

  function add_content_page_work_options() {
    acf_add_local_field_group(array(
      'key' => 'options-content-page-work',
      'title' => 'Page Content',
      'fields' => array (
          array (
              'key' => 'options-content-page-work-menu-title',
              'label' => 'Menu Title',
              'instructions' => 'Short text that will be presented as the current menu option.',
              'name' => 'options-content-page-work-menu-title',
              'type' => 'text',
              'required' => 1,
              'wrapper' => array(
                'width' => '33%'
              )
          ),
          array (
              'key' => 'options-content-page-work-title',
              'label' => 'Title',
              'instructions' => 'Short word that will be highlighted.',
              'name' => 'options-content-page-work-title',
              'type' => 'text',
              'required' => 1,
              'wrapper' => array(
                'width' => '33%'
              )
          ),
          array (
              'key' => 'options-content-page-work-cta',
              'label' => 'CTA',
              'instructions' => 'Short text that will be presented inside the action button.',
              'name' => 'options-content-page-work-cta',
              'type' => 'text',
              'required' => 1,
              'wrapper' => array(
                'width' => '33%'
              )
          ),
          array (
              'key' => 'options-content-page-work-content-title',
              'label' => 'Content Title',
              'instructions' => 'Short text that will be as the page text content title.',
              'name' => 'options-content-page-work-content-title',
              'type' => 'text',
              'required' => 1
          ),
          array (
              'key' => 'options-content-page-work-content',
              'label' => 'Content',
              'instructions' => 'Longer content to be presented in the page.',
              'name' => 'options-content-page-work-content',
              'type' => 'wysiwyg',
              'media_upload' => 0,
              'required' => 1
          )
        ),
      'location' => array (
            array (
                array (
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'options-content-work',
                ),
            ),
      ),
    ));
  }

if( function_exists('acf_add_options_page') ) {
  acf_add_options_sub_page(array(
      'page_title'    => 'Page "Work"',
      'menu_title'    => 'Page "Work"',
      'menu_slug'     => 'options-content-work',
      'parent_slug'   => 'options-content',
  ));
  add_content_page_work_options();
}