<?php

  function add_content_page_fluxo_options() {
    acf_add_local_field_group(array(
      'key' => 'options-content-page-fluxo',
      'title' => 'Page Content',
      'fields' => array (
          array (
              'key' => 'options-content-page-fluxo-menu-title',
              'label' => 'Menu Title',
              'instructions' => 'Short text that will be presented as the current menu option.',
              'name' => 'options-content-page-fluxo-menu-title',
              'type' => 'text',
              'required' => 1,
              'wrapper' => array(
                'width' => '33%'
              )
          ),
          array (
              'key' => 'options-content-page-fluxo-title',
              'label' => 'Title',
              'instructions' => 'Short word that will be highlighted.',
              'name' => 'options-content-page-fluxo-title',
              'type' => 'text',
              'required' => 1,
              'wrapper' => array(
                'width' => '33%'
              )
          ),
          array (
              'key' => 'options-content-page-fluxo-cta',
              'label' => 'CTA',
              'instructions' => 'Short text that will be presented inside the action button.',
              'name' => 'options-content-page-fluxo-cta',
              'type' => 'text',
              'required' => 1,
              'wrapper' => array(
                'width' => '33%'
              )
          ),
          array (
              'key' => 'options-content-page-fluxo-content-image',
              'label' => 'Content Image',
              'instructions' => 'Image that will be presented as the studio workflow.',
              'name' => 'options-content-page-fluxo-content-image',
              'type' => 'image',
              'required' => 1
          ),
          array (
              'key' => 'options-content-page-fluxo-content-title',
              'label' => 'Content Title',
              'instructions' => 'Short text that will be as the page text content title.',
              'name' => 'options-content-page-fluxo-content-title',
              'type' => 'text',
              'required' => 1
          ),
          array (
              'key' => 'options-content-page-fluxo-content',
              'label' => 'Content',
              'instructions' => 'Longer content to be presented in the page.',
              'name' => 'options-content-page-fluxo-content',
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
                    'value' => 'options-content-fluxo',
                ),
            ),
      ),
    ));
  }

if( function_exists('acf_add_options_page') ) {
  acf_add_options_sub_page(array(
      'page_title'    => 'Page "Fluxo"',
      'menu_title'    => 'Page "Fluxo"',
      'menu_slug'     => 'options-content-fluxo',
      'parent_slug'   => 'options-content',
  ));
  add_content_page_fluxo_options();
}