<?php

// Calling files

require_once('inc/enqueue.php');
require_once('inc/post_type.php');
require_once('inc/services.php');
require_once('inc/teams.php');
require_once('inc/customer.php');
require_once('inc/statictis.php');
require_once('inc/gallery.php');
require_once('post-like.php');
require_once('navbar.php');
require_once('pagination.php');


// Enable Register Nav Menus

register_nav_menu('main-menu', 'منوی اول');

// Enable Thumbnails

if(function_exists('add_theme_support')){
    add_theme_support('post-thumbnails');
}

// بازدید ها

function set_post_view_custom_field() {
    
    if(is_single()){
        global $post;
        $post_id = $post->ID;
        $count = 1;
        $post_view_count = get_post_meta($post_id, 'post_view_count', true);
        if($post_view_count){
            $count = $post_view_count + 1;
        }
        update_post_meta($post_id, 'post_view_count', $count);
    }
}
add_action('wp_head', 'set_post_view_custom_field');

function add_post_view_count_column($columns) {
    
    if(is_array($columns) && !isset($columns['post_view_count'])){
        $columns['post_view_count'] = 'تعداد بازدید ها';
    }

    return $columns;
}
add_filter('manage_posts_columns', 'add_post_view_count_column');

function set_post_view_count_column($column_name, $post_ID) {
    
    if($column_name === 'post_view_count'){
        $count = get_post_meta($post_ID, 'post_view_count', true);
        echo $count ? $count : 0;
    }
}
add_action('manage_posts_custom_column', 'set_post_view_count_column', 10, 2);

function get_post_view_count($post_id){
    return get_post_meta($post_id, 'post_view_count', true);
}

// ابزارک ها

function Rayium_widgets() {
    
    register_sidebar(
        array(
            'name' => 'ابزارک سمت راست',
            'id' => 'sidebar',
            'before_widget' => '<div class="card rounded-4 mb-3"><div class="card-body">',
            'after_widget' => '</div></div>'
        )
    );
}
add_action('widgets_init', 'Rayium_widgets');