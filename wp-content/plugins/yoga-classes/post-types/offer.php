<?php

function yoga_classes_post_offer() {
    $labels = array(
      'name'               => _x( 'Offers', 'post type general name' ),
      'singular_name'      => _x( 'Offer', 'post type singular name' ),
      'add_new'            => _x( 'Add New', 'Offer' ),
      'add_new_item'       => __( 'Add New Offer' ),
      'edit_item'          => __( 'Edit Offer' ),
      'new_item'           => __( 'New Offer' ),
      'all_items'          => __( 'All Offers' ),
      'view_item'          => __( 'View Offer' ),
      'search_items'       => __( 'Search Offers' ),
      'not_found'          => __( 'No offers found' ),
      'not_found_in_trash' => __( 'No offers found in trash' ),
      'parent_item_colon'  => '',
      'menu_name'          => 'Offers'
    );
  
    $args = array(
      'labels'        => $labels,
      'description'   => 'Offers',
      'public'        => true,
      'menu_position' => 5,
      'supports'      => array('title'),
      'has_archive'   => true,
    );
  
    register_post_type( 'offer', $args );
  
    if( function_exists('acf_add_local_field_group') ){

      acf_add_local_field_group(array(
        'key' => 'group_5f4ea6ee1bd8a',
        'title' => 'Offer',
        'fields' => array(
          array(
            'key' => 'field_5f4ea6f753caa',
            'label' => 'Percentage',
            'name' => 'percentage',
            'type' => 'number',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'min' => 0,
            'max' => 100,
            'step' => 1,
          ),
          array(
            'key' => 'field_5f4ea71e53cab',
            'label' => 'Start Date',
            'name' => 'start_date',
            'type' => 'date_picker',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'display_format' => 'd/m/Y',
            'return_format' => 'd/m/Y',
            'first_day' => 1,
          ),
          array(
            'key' => 'field_5f4ea74053cac',
            'label' => 'End date',
            'name' => 'end_date',
            'type' => 'date_picker',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'display_format' => 'd/m/Y',
            'return_format' => 'd/m/Y',
            'first_day' => 1,
          ),
        ),
        'location' => array(
          array(
            array(
              'param' => 'post_type',
              'operator' => '==',
              'value' => 'offer',
            ),
          ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'seamless',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
      ));
      
    }
  
  }
  add_action( 'init', 'yoga_classes_post_offer' );