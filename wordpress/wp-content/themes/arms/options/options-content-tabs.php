<?php

function add_tab_option_fields($tab_number) {
  acf_add_local_field_group(array(
    'key' => 'options_tabs_'.$tab_number,
    'title' => 'Tab '.$tab_number,
    'fields' => array (
        array (
            'key' => 'options-tabs-'.$tab_number.'-title',
            'label' => 'Tab Title',
            'instructions' => 'Text to be shown as tab title.',
            'name' => 'options-tabs-'.$tab_number.'-title',
            'type' => 'text',
            'required' => 1
        ),
        array (
            'key' => 'options-tabs-'.$tab_number.'-content-title',
            'label' => 'Content Title',
            'instructions' => 'Title to be shown in the purple section when this tab is active.',
            'name' => 'options-tabs-'.$tab_number.'-content-title',
            'type' => 'text',
            'required' => 1
        ),
        array (
            'key' => 'options-tabs-'.$tab_number.'-content-text',
            'label' => 'Content',
            'instructions' => 'Text to be shown in the purple section when this tab is active.',
            'name' => 'options-tabs-'.$tab_number.'-content-text',
            'type'           => 'wysiwyg',
            'media_upload'   => 0,
            'required' => 1
        ),
        array (
            'key' => 'options-tabs-'.$tab_number.'-items',
            'label' => 'Items',
            'instructions' => 'Items to be shown inside this tab.',
            'name' => 'options-tabs-'.$tab_number.'-items',
            'type' => 'repeater',
            'required' => 0
        )
      ),
    'location' => array (
        array (
            array (
                'param' => 'options_page',
                'operator' => '==',
                'value' => 'options-content-tabs',
            ),
        ),
    ),
  ));
  acf_add_local_field(array(
    'key'            => 'options-tabs-'.$tab_number.'-item-title',
    'label'          => 'Title',
    'name'           => 'options-tabs-'.$tab_number.'-item-title',
    'parent'         => 'options-tabs-'.$tab_number.'-items', // key of parent repeater
    'type'           => 'text',
    'required'       => 1
  ));
  acf_add_local_field(array(
    'key'            => 'options-tabs-'.$tab_number.'-item-content',
    'label'          => 'Content',
    'name'           => 'options-tabs-'.$tab_number.'-item-content',
    'parent'         => 'options-tabs-'.$tab_number.'-items', // key of parent repeater
    'type'           => 'textarea',
    'media_upload'   => 0,
    'required'       => 1
  ));
}

if( function_exists('acf_add_options_page') ) {
  acf_add_options_sub_page(array(
      'page_title'    => 'Page "Criamos"',
      'menu_title'    => 'Page "Criamos"',
      'menu_slug'     => 'options-content-tabs',
      'parent_slug'   => 'options-content',
  ));
  add_tab_option_fields('01');
  add_tab_option_fields('02');
  add_tab_option_fields('03');
  add_tab_option_fields('04');
}