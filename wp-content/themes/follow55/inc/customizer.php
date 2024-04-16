<?php

function codigowp_customizer($wp_customize)
{
    $wp_customize->add_section('sec_map', [
        'title' => 'Map',
        'description' => 'Map Section'
    ]);

    $wp_customize->add_setting('set_address', [
        'type' => 'theme_mod',
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ]);

    $wp_customize->add_control('set_address', [
        'type' => 'text',
        'label' => 'Address',
        'section' => 'sec_map',
        'description' => 'Add your address here'
    ]);
}

add_action('customize_register', 'codigowp_customizer');