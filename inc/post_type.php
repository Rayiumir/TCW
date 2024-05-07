<?php

// Services

function Services() {
    register_post_type('service',
        array(
            'labels' => array(
                'name' => 'خدمات ما',
                'singular_name' => 'خدمات ها'
            ),

            'public' => true,
            'rewrite' => array('slug' => 'service'),
            'supports' => array('title', 'editor')
        )
    );
}
add_action('init', 'Services');

// Portfolios

function Portfolios() {
    register_post_type('portfolio',
        array(
            'labels' => array(
                'name' => 'نمونه کار',
                'singular_name' => 'نمونه کارها'
            ),

            'public' => true,
            'rewrite' => array('slug' => 'portfolio'),
            'supports' => array('title', 'thumbnail', 'editor')
        )
    );
}
add_action('init', 'Portfolios');

// Teams

function Teams() {
    register_post_type('team',
        array(
            'labels' => array(
                'name' => 'تیم ما',
                'singular_name' => 'تیم ها'
            ),

            'public' => true,
            'rewrite' => array('slug' => 'team'),
            'supports' => array('title', 'thumbnail', 'editor')
        )
    );
}
add_action('init', 'Teams');

// Customers

function Customers() {
    register_post_type('customer',
        array(
            'labels' => array(
                'name' => 'مشتریان ما',
                'singular_name' => 'مشتری ها'
            ),

            'public' => true,
            'rewrite' => array('slug' => 'customer'),
            'supports' => array('title', 'thumbnail')
        )
    );
}
add_action('init', 'Customers');