<?php
add_action( 'wp_enqueue_scripts', 'insert_css' );

function insert_css() {

    wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/owl.carousel.min.css' );
    wp_enqueue_style( 'owl.theme.default', get_template_directory_uri() . '/owl.theme.default.min.css' );
    wp_enqueue_style( 'stellarnav', get_template_directory_uri() . '/stellarnav.min.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js' );
    wp_enqueue_script( 'jquery' );
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
    wp_enqueue_script('popper');
    wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
    wp_enqueue_script('bootstrap');
    wp_register_style( 'fonts', 'https://fonts.googleapis.com/css?family=Playfair+Display|Raleway' );
    wp_enqueue_style( 'fonts' );
    wp_register_script( 'owl.carousel', get_template_directory_uri() . '/owl.carousel.min.js');
    wp_enqueue_script('owl.carousel');
    wp_register_script( 'stellarnav', get_template_directory_uri() . '/stellarnav.min.js');
    wp_enqueue_script('stellarnav');
    wp_register_script('scripts',get_template_directory_uri() . '/scripts.js');
    wp_enqueue_script('scripts');
    wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.6.3/css/all.css' );

}

//* Enqueue Font Awesome
add_action( 'wp_enqueue_scripts', 'borabora_enqueue_scripts' );
function borabora_enqueue_scripts() {

}

add_theme_support( 'menus' );
register_nav_menus( array( 'menu-principal'  => 'Navigation principale',
    'menu-secondaire' => 'Navigation secondaire'
) );

