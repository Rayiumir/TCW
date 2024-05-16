<?php

defined('ABSPATH') || exit;

define("Rayium_Url", get_template_directory_uri());
define("Rayium_Style", get_stylesheet_uri());

define("Rayium_Company_Version", '1.0.0');

define("Rayium_Compnay_Asset_Version", defined('WP_DEBUG') && WP_DEBUG ? time() : Rayium_Company_Version);

// Calling Files style

function Rayium_Styles() {
    wp_enqueue_style(
        'bootstrap',
        Rayium_Url . '/css/bootstrap.rtl.min.css',
        '5.3.0'
    );

    wp_enqueue_style(
        'all',
        Rayium_Url . '/css/all.min.css',
        '6.5.0'
    );

    wp_enqueue_style(
        'aos',
        Rayium_Url . '/css/aos.css',
        '1.0.0'
    );

    wp_enqueue_style(
        'style',
        Rayium_Style,
        '1.0.0'
    );

}
add_action('wp_head', 'Rayium_Styles', 1);

// Calling Files Scripts

function Rayium_Scripts() {

    $deps = ['jquery'];

    wp_enqueue_script(
        'main',
        Rayium_Url . '/js/main.js',
        $deps,
        Rayium_Company_Version,
        true
    );

    wp_enqueue_script(
        'bootstrap',
        Rayium_Url . '/js/bootstrap.bundle.min.js',
        '5.3.0',
        true
    );

    wp_enqueue_script(
        'aos',
        Rayium_Url . '/js/aos.js',
        $deps,
        Rayium_Company_Version,
        true
    );
}
add_action('wp_footer', 'Rayium_Scripts');

function Gallery_scripts($hook) {
    
    global $post;

    if($hook == 'post-new.php' || $hook == 'post.php'){

        if('portfolio' === $post->post_type){

            wp_enqueue_media();

            $deps = ['jquery'];

            wp_enqueue_script(
                'gallery-metabox',
                Rayium_Url . '/js/gallery.js',
                $deps,
                Rayium_Company_Version,
                null,
                true
            );

            wp_enqueue_style(
                'gallery-metabox',
                Rayium_Url . '/css/gallery.css',
            );

        }

    }
}
add_action('admin_enqueue_scripts', 'Gallery_scripts');

