<?php

require_once get_template_directory() . '/inc/customizer.php';

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
        'height' => 500,
        'width' => 1920
    ];

    add_theme_support('title-tag');
    add_theme_support('custom-header', $args);
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', ['video', 'image']);
    add_theme_support('custom-logo', ['height' => 110, 'width' => 200]);
}

function wordpress_sidebars(): void
{
    register_sidebar([
        'name' => 'Home Page Sidebar',
        'id' => 'sidebar-1',
        'description' => 'sidebar da home page',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title   ' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ]);

    register_sidebar([
        'name' => 'Blog Sidebar',
        'id' => 'sidebar-2',
        'description' => 'sidebar da página blog',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title   ' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ]);

    register_sidebar([
        'name' => 'Services 1',
        'id' => 'services-1',
        'description' => 'primeiro serviço',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title   ' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ]);

    register_sidebar([
        'name' => 'Services 2',
        'id' => 'services-2',
        'description' => 'segundo serviço',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title   ' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ]);

    register_sidebar([
        'name' => 'Services 3',
        'id' => 'services-3',
        'description' => 'terceiro serviço',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title   ' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ]);

    register_sidebar([
        'name' => 'Social Icons',
        'id' => 'social-media',
        'description' => 'Seus ícones de redes sociais aqui',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title   ' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ]);
}

add_action('after_setup_theme', 'wordpress_config', 0);
add_action('widgets_init', 'wordpress_sidebars', 0);