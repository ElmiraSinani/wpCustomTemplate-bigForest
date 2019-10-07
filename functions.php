<?php
	
include("templates/inc/cpt_blog.php");
include("templates/inc/cpt_products.php");

function register_bigf_menus() {
register_nav_menus(
        array(
            'main-menu' => __('Main Menu','haragast'),
            'footer-menu' => __('Footer Menu','haragast')
        )
    );
}
add_action('init', 'register_bigf_menus');

if ( function_exists("add_theme_support") ) { 
    add_theme_support("post-thumbnails"); 
    
    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'blogthumb', 370, 200, true );
    add_image_size( 'frontthumb', 170, 200, true );
    add_image_size( 'frontprods', 270, 200, true );
    add_image_size( 'archivprods', 270, 140, true );
} 

function bigf_sidebar_init() {
    register_sidebar(
         array(
            'name' => 'Left Sidebar',
            'id' => 'left-sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="recent_posts margin-bottom-25">',
            'after_title' => '</h3>',
        )
    );
    register_sidebar(
         array(
            'name' => 'Right Sidebar',
            'id' => 'right-sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h4 class="none">',
            'after_title' => '</h4>',
        )
    );
}

add_action( 'init', 'bigf_sidebar_init' );
