<?php
/*
Plugin Name: Yoga classes
Description: Yoga classes
Version: 1.0
Author: Yousef Samir
 */

include 'post-types/yoga-class.php';
include 'post-types/offer.php';



function yoga_classes_get_number_of_posts_of_type_in_chunks($number_of_posts = 3, $post_type, $chunk_size){
    $args = array(
        'post_type' => $post_type,
        'post_status' => 'publish',
        'posts_per_page' => $number_of_posts, 
        'orderby' => 'id', 
        'order' => 'ASC'
    );

    $the_query = new WP_Query( $args ); 
        
    $posts_to_return = array();
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        $post = get_post();
        $acf_fields = get_fields($post, 0);
        $posts_to_return[] = array(
            'post' => clone $post,
            'acf_fields' => $acf_fields,
        );
    }
    wp_reset_postdata();
    return array_chunk($posts_to_return, $chunk_size);
}

function get_post_object_by_slug_and_post_type($the_slug, $post_type){
    $args = array(
        'name'        => $the_slug,
        'post_type'   => $post_type,
        'post_status' => 'publish',
        'numberposts' => 1
    );
    $posts = get_posts($args);
    print_r($posts);
    if( $posts ){
        return $posts[0];
    }
    return null;
}