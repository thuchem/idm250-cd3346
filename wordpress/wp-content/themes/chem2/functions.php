<?php

function theme_scripts_and_styles() 
{
    wp_enqueue_script('chem-main-script', get_template_directory_uri() . '/dist/scripts/main.js');
    wp_enqueue_style('chem-main-style', get_template_directory_uri() . '/dist/styles/main.css');
}

add_action('wp_enqueue_scripts', 'theme_scripts_and_styles');

function register_themes_menus()
{
    register_nav_menus([
        'primary' => 'Primary Menu',
        '404-menu' => '404 Menu'
    ]);
}

add_action('init', 'register_themes_menus');
