<?php

register_nav_menus( array(
    'primary' => __( 'Top primary menu', 'mb' ),
    'secondary' => __( 'Secondary menu', 'mb' ),
    ) );

add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );
add_theme_support( 'widgets' );

function register_footer1_widget_area() {
    register_sidebar(
        array(
            'id' => 'footer-widget-area-1',
            'name' => esc_html__( 'Footer First Part', 'theme-domain' ),
            'description' => esc_html__( 'Your footer content', 'theme-domain' ),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => ''
        )
    );
    register_sidebar(
        array(
            'id' => 'footer-widget-area-2',
            'name' => esc_html__( 'Footer Second Part', 'theme-domain' ),
            'description' => esc_html__( 'Your footer content', 'theme-domain' ),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => ''
        )
    );

    register_sidebar(
        array(
            'id' => 'footer-widget-area-3',
            'name' => esc_html__( 'footer third Part', 'theme-domain' ),
            'description' => esc_html__( 'Your footer content', 'theme-domain' ),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => ''
        )
    );

    register_sidebar(
        array(
            'id' => 'footer-widget-area-4',
            'name' => esc_html__( 'footer fourth Part', 'theme-domain' ),
            'description' => esc_html__( 'Your footer content', 'theme-domain' ),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => ''
        )
    );

    
}
add_action( 'widgets_init', 'register_footer1_widget_area' );

/* custome post type for slider */

add_action('init','register_mb_post_type',0);
function register_mb_post_type(){
    $Banner_labels=array(
        'name'=>__('Banner','mb'),
        'singular_name'=>__('Banner','mb'),
        'add_new'=>__('Add New Banner','mb'),
        'add_new_item'=>__('Add New Banner','mb'),
        'edit_item'=>__('Edit Banner','mb'),
        'new_item'=>__('New Banner','mb'),
        'view_item'=>__('View Banner','mb'),
        'search_item'=>__('Search Banner','mb'),
        'not_found'=>__('No Banner Found','mb'),
        'not_found_in_trash'=>__('No Banner Found in Trash','mb'),
        'parent_item_colon'=>__('Parent Banner:','mb'),
        'menu_name'=>__('Banner','mb'),
    );

    $slider_args=[
        'labels'=>$Banner_labels,
        'description'=>__('Add your home page banner', 'mb'),
        'supports'=>array('title','thumbnail','editor'),//,'editor'
        'public'=>true,
        'show_ui'=>true,
        'show_ui_menu'=>true,
        'menu_icon'=>get_stylesheet_directory_uri().'/images/slider.png',
        'show_in_nav_menu'=>true,
        'publicly_queryable'=>true,
        'exclude_from_search'=>true,
        'has_archive'=>false,
        'query_var'=>true,
        'can_export'=>true,
        'rewrite'=>true,
        'capability_type'=>'post'
    ];

    register_post_type('banner',$slider_args);
}
/* custome post type for next to slider */

add_action('init','register_feature_post_type',0);
function register_feature_post_type(){
    $feature_labels=array(
        'name'=>__('Feature','mb'),
        'singular_name'=>__('Feature ','mb'),
        'add_new'=>__('Add New Feature ','mb'),
        'add_new_item'=>__('Add New Feature ','mb'),
        'edit_item'=>__('Edit Feature ','mb'),
        'new_item'=>__('New Feature ','mb'),
        'view_item'=>__('View Feature ','mb'),
        'search_item'=>__('Search Feature ','mb'),
        'not_found'=>__('No Feature Found','mb'),
        'not_found_in_trash'=>__('No Feature  Found in Trash','mb'),
        'parent_item_colon'=>__('Parent Feature :','mb'),
        'menu_name'=>__('Feature ','mb'),
    );

    $feature_arg=[
        'labels'=>$feature_labels,
        'description'=>__('Add your home page slides', 'mb'),
        'supports'=>array('title','thumbnail','editor'),
        'public'=>true,
        'show_ui'=>true,
        'show_ui_menu'=>true,
        'menu_icon'=>get_stylesheet_directory_uri().'/images/slider.png',
        'show_in_nav_menu'=>true,
        'publicly_queryable'=>true,
        'exclude_from_search'=>true,
        'has_archive'=>false,
        'query_var'=>true,
        'can_export'=>true,
        'rewrite'=>true,
        'capability_type'=>'post'
    ];

    register_post_type('feature',$feature_arg);
}