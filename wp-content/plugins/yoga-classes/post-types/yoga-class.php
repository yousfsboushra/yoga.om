<?php

function yoga_classes_post_class() {
    $labels = array(
      'name'               => _x( 'Yoga Classes', 'post type general name' ),
      'singular_name'      => _x( 'Yoga Class', 'post type singular name' ),
      'add_new'            => _x( 'Add New', 'Yoga Class' ),
      'add_new_item'       => __( 'Add New Yoga Class' ),
      'edit_item'          => __( 'Edit Yoga Class' ),
      'new_item'           => __( 'New Yoga Class' ),
      'all_items'          => __( 'All Yoga Classes' ),
      'view_item'          => __( 'View Yoga Class' ),
      'search_items'       => __( 'Search Yoga Classes' ),
      'not_found'          => __( 'No yoga classes found' ),
      'not_found_in_trash' => __( 'No yoga classes found in trash' ),
      'parent_item_colon'  => '',
      'menu_name'          => 'Yoga Classes'
    );
  
    $args = array(
      'labels'        => $labels,
      'description'   => 'Yoga Classes',
      'public'        => true,
      'menu_position' => 4,
      'supports'      => array('title', 'editor', 'excerpt', 'thumbnail'),
      'has_archive'   => true,
    );
  
    register_post_type( 'yoga_class', $args );
  
    if( function_exists('acf_add_local_field_group') ){

        acf_add_local_field_group(array(
            'key' => 'group_5f4e9d402145a',
            'title' => 'Yoga Class',
            'fields' => array(
                array(
                    'key' => 'field_5f4e9fbbbeda4',
                    'label' => 'Start Date',
                    'name' => 'start_date',
                    'type' => 'date_time_picker',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'display_format' => 'F j, Y H:i',
                    'return_format' => 'F j, H:i',
                    'first_day' => 1,
                ),
                array(
                    'key' => 'field_5f4e9d4bb385f',
                    'label' => 'Day',
                    'name' => 'day',
                    'type' => 'select',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array(
                        'monday' => 'Monday',
                        'tuesday' => 'Tuesday',
                        'wednesday' => 'Wednesday',
                        'thursday' => 'Thursday',
                        'friday' => 'Friday',
                        'saturday' => 'Saturday',
                        'sunday' => 'Sunday',
                    ),
                    'default_value' => false,
                    'allow_null' => 0,
                    'multiple' => 0,
                    'ui' => 0,
                    'return_format' => 'value',
                    'ajax' => 0,
                    'placeholder' => '',
                ),
                array(
                    'key' => 'field_5f4e9e25b3860',
                    'label' => 'Time',
                    'name' => 'time',
                    'type' => 'time_picker',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'display_format' => 'H:i',
                    'return_format' => 'H:i',
                ),
                array(
                    'key' => 'field_5f4ea04fbeda5',
                    'label' => 'Price',
                    'name' => 'price',
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
                    'max' => '',
                    'step' => '',
                ),
                array(
                    'key' => 'field_5f4e9f62beda3',
                    'label' => 'Is Summer Class',
                    'name' => 'is_summer_class',
                    'type' => 'true_false',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'message' => 'Is Summer Class',
                    'default_value' => 0,
                    'ui' => 0,
                    'ui_on_text' => '',
                    'ui_off_text' => '',
                ),
                array(
                    'key' => 'field_5f4ea416885fc',
                    'label' => 'Modules',
                    'name' => 'modules',
                    'type' => 'number',
                    'instructions' => '',
                    'required' => 0,
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
                    'min' => '',
                    'max' => '',
                    'step' => 1,
                ),
                array(
                    'key' => 'field_5f4ea42d885fd',
                    'label' => 'Weekends',
                    'name' => 'weekends',
                    'type' => 'number',
                    'instructions' => '',
                    'required' => 0,
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
                    'min' => '',
                    'max' => '',
                    'step' => 1,
                ),
                array(
                    'key' => 'field_5f5202f8677e0',
                    'label' => 'Offer',
                    'name' => 'offer',
                    'type' => 'relationship',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'post_type' => array(
                        0 => 'offer',
                    ),
                    'taxonomy' => '',
                    'filters' => array(
                        0 => 'search',
                    ),
                    'elements' => '',
                    'min' => '',
                    'max' => '',
                    'return_format' => 'object',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'yoga_class',
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
  add_action( 'init', 'yoga_classes_post_class' );