<?php 

/**
 * Class WP_Docs_Class.
 */
class WPCustomPostType {

  /**
   * Constructor
   */
  public $label;
  public $menu_icon = 'dashicons-book';
  public $supports = array('title');
  
  public function __construct($label, $menu_icon = 'dashicons-book', $supports = array('title')) {
    $this->label = $label;
    $this->menu_icon = $menu_icon;
    $this->$supports = $supports;
    add_action( 'init', array( $this, 'register_post_type' ) );
  }

  /**
   * Handle saving post data.
   */
  public function register_post_type() {
    $label = $this->label;
    $labelPlural = $label.'s';
    $labelTitle = ucfirst($label);
    $labelTitlePlural = ucfirst($labelPlural);
    // do stuff here...
    $labels = array(
      'name'                  => _x( $labelTitlePlural, 'Post type general name', 'textdomain' ),
      'singular_name'         => _x( $labelTitle, 'Post type singular name', 'textdomain' ),
      'menu_name'             => _x( $labelTitlePlural, 'Admin Menu text', 'textdomain' ),
      'name_admin_bar'        => _x( $labelTitle, 'Add New on Toolbar', 'textdomain' ),
      'add_new'               => __( 'Add New', 'textdomain' ),
      'add_new_item'          => __( 'Add New '.$labelTitle, 'textdomain' ),
      'new_item'              => __( 'New '.$labelTitle, 'textdomain' ),
      'edit_item'             => __( 'Edit '.$labelTitle, 'textdomain' ),
      'view_item'             => __( 'View '.$labelTitle, 'textdomain' ),
      'all_items'             => __( 'All '.$labelTitlePlural, 'textdomain' ),
      'search_items'          => __( 'Search '.$labelTitlePlural, 'textdomain' ),
      'parent_item_colon'     => __( 'Parent '.$labelTitlePlural.':', 'textdomain' ),
      'not_found'             => __( 'No projects found.', 'textdomain' ),
      'not_found_in_trash'    => __( 'No projects found in Trash.', 'textdomain' ),
      'featured_image'        => _x( $labelTitle.' Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
      'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
      'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
      'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
      'archives'              => _x( $labelTitle.' archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
      'insert_into_item'      => _x( 'Insert into project', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
      'uploaded_to_this_item' => _x( 'Uploaded to this project', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
      'filter_items_list'     => _x( 'Filter projects list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
      'items_list_navigation' => _x( $labelTitlePlural.' list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
      'items_list'            => _x( $labelTitlePlural.' list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );

    $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array( 'slug' => $label ),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => null,
      'menu_icon'           => $this->menu_icon,
      // 'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
      'supports'           => $this->supports,
    );

    register_post_type( $label, $args );
  }
}