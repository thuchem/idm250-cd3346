<?php

function theme_scripts_and_styles() 
{
    wp_enqueue_script('chem-main-script', get_template_directory_uri() . '/dist/scripts/main.js');
    wp_enqueue_style('chem-main-style', get_template_directory_uri() . '/dist/styles/main.css');
}

add_action('wp_enqueue_scripts', 'theme_scripts_and_styles');

function register_theme_menus()
{
    register_nav_menus([
        'primary' => 'Primary Menu',
        '404-menu' => '404 Menu'
    ]);
}

add_action('init', 'register_theme_menus' );

// Enable featured images
add_theme_support('post-thumbnails');

/* Custom Post Type Start */
function create_posttype() {
register_post_type( 'projects',
// CPT Options
array(
'labels' => array(
'name' => __( 'Projects' ),
'singular_name' => __( 'Projects' )
),
'public' => true,
'has_archive' => false,
'rewrite' => array('slug' => 'projects'),
)
);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

