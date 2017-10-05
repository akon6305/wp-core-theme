<?php
function wpb_widgets_init() {
 
    register_sidebar( array(
        'name' => __( 'Video Widgets', 'wpb' ),
        'id' => 'video_wid',
        'description' => __( 'This is for adding Blog Widged for Blog Pages', 'wpb' ),
        'before_widget' => '<div style="margin-bottom: 36px;" class="col-md-4">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ) );
 
    register_sidebar( array(
        'name' =>__( 'Footer Area Widget', 'wpb'),
        'id' => 'sidebar-2',
        'description' => __( 'This is for footer latest post widtes', 'wpb' ),
        'before_widget' => '<div class="col-md-3 footer_menu">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );

    register_sidebar( array(
        'name' =>__( 'Org Address Area Widget', 'wpb'),
        'id' => 'sidebar-3',
        'description' => __( 'This is for Address Area widtes', 'wpb' ),
        'before_widget' => '<div class="col-md-4"><div class="address"><div class="office">',
        'after_widget' => '</div></div></div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );

    }
 
add_action( 'widgets_init', 'wpb_widgets_init' );


?>