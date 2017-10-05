<?php 

/**
 * Proper way to enqueue scripts and styles
 */
function my_custom_files_functions() {

    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '3.3.7', all );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), '4.6.3', all );
    wp_enqueue_style( 'animate', get_template_directory_uri().'/assets/css/animate.css', array(), '3.5.1', all );
    wp_enqueue_style( 'responsive', get_template_directory_uri().'/assets/css/responsive.css', array(), '1.0.0', all );
    wp_enqueue_style( 'forkan-style', get_template_directory_uri().'/style.css', array(), '1.0.0', all );

   
wp_enqueue_script('jquery');
    
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '1.3.0', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '3.3.7', true );
    wp_enqueue_script( 'countdown', get_template_directory_uri() . '/assets/js/jquery.countdown.min.js', array('jquery'), '1.0.0', true );


}
add_action( 'wp_enqueue_scripts', 'my_custom_files_functions' );










?>