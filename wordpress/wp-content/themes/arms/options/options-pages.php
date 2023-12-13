<?php


if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Site Content',
        'menu_title'    => 'Site Content',
        'menu_slug'     => 'options-content',
        'capability'    => 'edit_posts',
        'redirect'      => true
    ));
}