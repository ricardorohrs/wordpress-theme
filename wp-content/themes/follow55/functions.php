<?php

function load_scripts(): void
{
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js', [], '5.3.3', true);
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',  [], '5.3.3', 'all');
    wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css',  [], '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'load_scripts');

function wordpress_config(): void
{
    register_nav_menus([
        'main_menu' => 'Main Menu',
        'footer_menu' => 'Footer Menu',
    ]);

    $args = [
        'height' => 225,
        'width' => 1920
    ];

    add_theme_support('custom-header', $args);
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', ['video', 'image']);
}

add_action('after_setup_theme', 'wordpress_config', 0);