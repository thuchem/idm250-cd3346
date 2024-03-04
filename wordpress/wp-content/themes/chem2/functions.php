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

add_filter('wp_nav_menu_items', 'wrap_menu_item_in_button', 10, 2);

function wrap_menu_item_in_button($items, $args) {
    if (in_array($args->theme_location, array('primary', 'footer'))) {
        $find = '<li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20">';
        $replace = '<button><li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20">';
        $items = str_replace($find, $replace, $items);
        $find = '</li>';
        $replace = '</button></li>';
        $items = str_replace($find, $replace, $items);
        $find = '<li id="menu-item-27" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27">';
        $replace = '<button><li id="menu-item-27" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27">';
        $items = str_replace($find, $replace, $items);
        $find = '</li>';
        $replace = '</button></li>';
        $items = str_replace($find, $replace, $items);
    }
    return $items;
}

function create_post_type() {
    register_post_type('projects', // Use lowercase for the post type ID
        array(
            'labels' => array(
                'name' => __('Projects', 'text-domain'), // Use double underscores and specify your theme's text-domain
                'singular_name' => __('Projects', 'text-domain'),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'projects'), // Optional: Custom slug for archive pages
            'supports' => array('title', 'editor', 'thumbnail'), // Specify what features the post type supports
            'show_in_rest' => true,
        )
    );
}
add_action('init', 'create_post_type');
