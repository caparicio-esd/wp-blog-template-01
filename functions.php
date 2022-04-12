<?php

add_theme_support('post-thumbnails');


/**
 * Register menu
 */
function register_menus()
{
    register_nav_menu('header-menu', __('Header Menu'));
}

add_action('init', 'register_menus');
