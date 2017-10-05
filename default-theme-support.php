<?php 







//Default Theme Support


add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
add_theme_support( 'post-thumbnails' );


add_image_size('slide-image', 1024,360,true);
add_image_size('post-image', 800,450,true);