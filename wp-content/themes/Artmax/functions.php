<?php


function artmax_assets() {

    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap' );

    wp_enqueue_style( 'bootstrap-grid', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css' );

    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap-reboot.min.css' );

    wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/css/style.css' );
    
    wp_enqueue_script('jquery.js','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js');



//    wp_enqueue_script( 'script-all', get_template_directory_uri() . '/assets/js/scripts-all.js', array(), '20151215', true );
//
//    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), '20151215', true );
}

add_action( 'wp_enqueue_scripts', 'artmax_assets' );

show_admin_bar(false);

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
