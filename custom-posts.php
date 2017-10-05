<?php 


function my_custom_post(){


//for Slider
register_post_type('slide',array(
		'public'    => true,
        'label'     => 'Slide',
        'menu_icon' => 'dashicons-book',
        'labels' => array('name'=>'Slides', 'singular_name'=>'Slide', 'add_new'=>'Add New Slide'),
        'supports' => array('title','thumbnail','excerpt','author'),
	));


//for Promos Heading
register_post_type('promo_heading',array(
		'public'    => true,
        'label'     => 'promo_heading',
        'menu_icon' => 'dashicons-screenoptions',
        'labels' => array('name'=>'Promos_heads', 'singular_name'=>'PromoHeading', 'add_new'=>'Add New PromoHeading'),
        'supports' => array('title','editor','excerpt','author'),
	));



//for Single Promos 
register_post_type('Single_promo',array(
		'public'    => true,
        'label'     => 'Single Promo',
        'menu_icon' => 'dashicons-list-view',
        'labels' => array('name'=>'SinglePromos', 'singular_name'=>'Promo', 'add_new'=>'Add New Promo'),
        'supports' => array('title','editor','author'),
	));


//for Package Plan
register_post_type('PackagePlan',array(
		'public'    => true,
        'label'     => 'Pagckge Plan',
        'menu_icon' => 'dashicons-chart-bar',
        'labels' => array('name'=>'Package Plans', 'singular_name'=>'Plan', 'add_new'=>'Add New Plan'),
        'supports' => array('title','editor','author'),
	));


}

add_action('init', 'my_custom_post');



?>