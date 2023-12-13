<?php

function add_social_icons_options () {
  acf_add_local_field_group(array(
    'key' => 'options_contact_social_icons',
    'title' => 'Social Icons',
    'fields' => array (
        array (
            'key' => 'options-contact-social-whatsapp',
            'label' => 'Whatsapp',
            'instructions' => 'Link that will be associated with the whatsapp icon.',
            'name' => 'options-contact-social-whatsapp',
            'type' => 'url',
            'required' => 1
        ),
        array (
            'key' => 'options-contact-social-instagram',
            'label' => 'Instagram',
            'instructions' => 'Link that will be associated with the instagram icon.',
            'name' => 'options-contact-social-instagram',
            'type' => 'url',
            'required' => 1
        ),
        array (
            'key' => 'options-contact-social-behance',
            'label' => 'Behance',
            'instructions' => 'Link that will be associated with the behance icon.',
            'name' => 'options-contact-social-behance',
            'type' => 'url',
            'required' => 1
        ),
        array (
            'key' => 'options-contact-social-email',
            'label' => 'Email',
            'instructions' => 'Link that will be associated with the email icon.',
            'name' => 'options-contact-social-email',
            'type' => 'url',
            'required' => 1
        ),
      ),
    'location' => array (
        array (
            array (
                'param' => 'options_page',
                'operator' => '==',
                'value' => 'options-content-contact',
            ),
        ),
    ),
  ));
}

function add_contact_info_options() {
  acf_add_local_field_group(array(
    'key' => 'options_contact_info',
    'title' => 'Contact Info',
    'fields' => array (
        array (
            'key' => 'options-contact-info-email',
            'label' => 'E-mail',
            'instructions' => 'E-mail for contact.',
            'name' => 'options-contact-info-email',
            'type' => 'email',
            'wrapper' => array(
              'width' => '50%'
            ),
            'required' => 1
        ),
        array (
            'key' => 'options-contact-info-phone',
            'label' => 'Phone',
            'instructions' => 'Phone for contact.',
            'name' => 'options-contact-info-phone',
            'type' => 'text',
            'wrapper' => array(
              'width' => '50%'
            ),
            'required' => 1
        ),
        array (
            'key' => 'options-contact-info-address',
            'label' => 'Address',
            'instructions' => 'Office address (Use "/" to define a line-break).',
            'name' => 'options-contact-info-address',
            'type' => 'text',
            'required' => 1
        ),
      ),
    'location' => array (
        array (
            array (
                'param' => 'options_page',
                'operator' => '==',
                'value' => 'options-content-contact',
            ),
        ),
    ),
  ));
}

if( function_exists('acf_add_options_page') ) {
  acf_add_options_sub_page(array(
      'page_title'    => 'Contact Info',
      'menu_title'    => 'Contact Info',
      'menu_slug'     => 'options-content-contact',
      'parent_slug'   => 'options-content',
  ));
  add_social_icons_options();
  add_contact_info_options();
}