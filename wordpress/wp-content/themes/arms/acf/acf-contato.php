<?php

if( function_exists('acf_add_local_field_group') ) {
  $field_group = generate_acf_field_group('contact', 'Contact Form Submission');

  $field_name = generate_acf_field(
    $field_group,
    'name',
    'Name',
    'text',
    array(
      'placeholder' => 'NOME:'
    )
  );
  
  $field_phone = generate_acf_field(
    $field_group,
    'phone',
    'Phone',
    'text',
    array(
      'placeholder' => 'NÚMERO:'
    )
  );

  $field_email = generate_acf_field(
    $field_group,
    'email',
    'E-mail',
    'email',
    array(
      'placeholder' => 'E-MAIL:'
    )
  );

  $field_message = generate_acf_field(
    $field_group,
    'message',
    'Message',
    'textarea',
    array(
      'placeholder' => 'CONTA TUDO:'
    )
  );

  $acf_columns = new ACFColumns('contact', array($field_name, $field_phone, $field_email, $field_message));
}


function register_contact_form() {
  $fields = [
    "contact_name",
    "contact_phone",
    "contact_email",
    "contact_message"
  ];

  acf_register_form(array(
      'id' => 'new-contact',
      'post_id' => 'new_post',
      'new_post' => array(
          'post_type' => 'contact',
          'post_status' => 'publish',
          'post_title' => 'Contact Home',
      ),
      'post_title' => false,
      'fields' => $fields,
      'post_content' => false,
      'return' => home_url('?contact=success#conta'),
      'submit_value' => __("Enviar", 'jcd'),
      'updated_message' => __("Contato enviado com sucesso! Obrigado!", 'jcd'),
  ));
}
add_action('acf/init', 'register_contact_form');