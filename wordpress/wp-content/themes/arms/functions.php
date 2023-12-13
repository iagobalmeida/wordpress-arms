<?php 

// Post Types
include 'custom-post-types/base.php';
include 'custom-post-types/custom-post-type-project.php';
include 'custom-post-types/custom-post-type-contato.php';

// Post Fields
include 'acf/base.php';
include 'acf/acf-project.php';
include 'acf/acf-contato.php';
include 'acf/acf-pre-save-contato.php';

// ACF Options
include 'options/options-pages.php';
include 'options/options-content-home.php';
include 'options/options-content-contact.php';
include 'options/options-content-page-criamos.php';
include 'options/options-content-page-work.php';
include 'options/options-content-page-fluxo.php';

// Helpers
include 'helpers.php';

// Configure Admin
// admin_init action works better than admin_menu in modern wordpress (at least v5+)
function my_remove_menu_pages() {
  if(get_current_user_id() != 1) {
    remove_menu_page('edit.php'); // Posts
    remove_menu_page('upload.php'); // Media
    remove_menu_page('link-manager.php'); // Links
    remove_menu_page('edit-comments.php'); // Comments
    remove_menu_page('edit.php?post_type=page'); // Pages
    remove_menu_page('edit.php?post_type=acf-field-group'); // Pages
    remove_menu_page('plugins.php'); // Plugins
    remove_menu_page('themes.php'); // Appearance
    remove_menu_page('users.php'); // Users
    remove_menu_page('tools.php'); // Tools
    remove_menu_page('options-general.php'); // Settings
  }
}
add_action( 'admin_init', 'my_remove_menu_pages' );