<?php

// Calling files

require_once('inc/enqueue.php');
require_once('inc/post_type.php');
require_once('inc/services.php');
require_once('inc/teams.php');
require_once('navbar.php');


// Enable Register Nav Menus

register_nav_menu('main-menu', 'منوی اول');

// Enable Thumbnails

if(function_exists('add_theme_support')){
    add_theme_support('post-thumbnails');
}