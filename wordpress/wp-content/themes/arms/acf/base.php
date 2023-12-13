<?php

class ACFColumns {
  public $parent;
  public $fields;

  public function __construct($parent, $fields) {
    $this->parend = $parent;
    $this->fields = $fields;
    add_filter('manage_'.$parent.'_posts_columns', array($this, 'manage_posts_columns'));
    add_action('manage_'.$parent.'_posts_custom_column', array($this, 'manage_posts_custom_column'), 10 ,2);
  }

  public function manage_posts_columns($columns) {
    $fields_columns = array();
    foreach($this->fields as $field) {
      $fields_columns[$field['key']] = __ ($field['label']);
    }
    array_splice( $columns, 2, 0, $fields_columns);
    return $columns;
  }

  public function manage_posts_custom_column($column, $post_id) {
    $field_key = array_keys($this->fields)[$column];
    echo get_field($this->fields[$field_key]['key'], $post_id);
    return;
  }
}

function generate_acf_field_group($post_type, $title) {
  $key = $post_type.'_fields_group';
  $field_group = array(
    'key' => $key,
    'title' => $title,
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => $post_type
        )
      )
    )
  );
  acf_add_local_field_group($field_group);
  return $key;
}

function generate_acf_field($parent, $key, $label, $type, $args=array()) {
  $parent_clean = str_replace('_fields_group', '', $parent);
  $field_key = $parent_clean.'_'.$key;
  $field = array_merge(array(
    'key' => $field_key,
    'label' => $label,
    'name' => $field_key,
    'type' => $type,
    'parent' => $parent
  ), $args);
  acf_add_local_field($field);
  return array('key'=>$field_key, 'label'=>$label);
}