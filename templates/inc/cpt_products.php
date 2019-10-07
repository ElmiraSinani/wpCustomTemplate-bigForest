<?php

add_post_type_support( 'products', 'comments' );

// function: post_type BEGIN
function products_post_type(){
    
    $labels = array(
                    'name' => __( 'Products'), 
                    'singular_name' => __('Products'),
                    'rewrite' => array(
                            'slug' => __( 'adp_products' ) 
                    ),
                    'add_new' => _x('Add Item', 'products'), 
                    'edit_item' => __('Edit Products Item'),
                    'new_item' => __('New Products Item'), 
                    'view_item' => __('View Products'),
                    'search_items' => __('Search Products'), 
                    'not_found' =>  __('No Products Items Found'),
                    'not_found_in_trash' => __('No Products Items Found In Trash'),
                    'parent_item_colon' => ''
                );
    $args = array(
                    'labels' => $labels,
                    'public' => true,
                    'publicly_queryable' => true,
                    'show_ui' => true,
                    'query_var' => true,
                    'capability_type' => 'post',
                    'hierarchical' => false,
                    'menu_position' => null,
                    'rewrite' => array('slug' => 'products'),
                    'has_archive' => true,
                    'menu_icon' => get_template_directory_uri('template_directory').'/images/icons/products.png',
                    'supports' => array(
                            'comments',
                            'title',
                            'editor',
                            'thumbnail',
                            'excerpt',
                            'custom-fields',
                            'page-attributes'
                    ),
                  //'taxonomies' => array('post_tag', 'products_category'),
                  //'suppress_filters' => true
             ); 
    
    register_post_type(__( 'products' ), $args);        
} 

// function: products_messages BEGIN
function products_messages($messages)
{
    $messages[__( 'products' )] = 
            array(
                    0 => '', 
                    1 => sprintf(('Products Updated. <a href="%s">View products</a>'), esc_url(get_permalink($post_ID))),
                    2 => __('Custom Field Updated.'),
                    3 => __('Custom Field Deleted.'),
                    4 => __('Products Updated.'),
                    5 => isset($_GET['revision']) ? sprintf( __('Products Restored To Revision From %s'), wp_post_revision_title((int)$_GET['revision'], false)) : false,
                    6 => sprintf(__('Products Published. <a href="%s">View Portfolio</a>'), esc_url(get_permalink($post_ID))),
                    7 => __('Products Saved.'),
                    8 => sprintf(__('Products Submitted. <a target="_blank" href="%s">Preview Products</a>'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
                    9 => sprintf(__('Products Scheduled For: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Products</a>'), date_i18n( __( 'M j, Y @ G:i' ), strtotime($post->post_date)), esc_url(get_permalink($post_ID))),
                    10 => sprintf(__('Products Draft Updated. <a target="_blank" href="%s">Preview Products</a>'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
            );
    return $messages;

} // function: products_messages END

// function: products_category BEGIN
function products_category()
{
    register_taxonomy(
            __( "products_category" ),
            array(__( "products" )),
            array(
                    "hierarchical" => true,
                    "label" => __( "Category" ),
                    "singular_label" => __( "Category" ),
                    'show_ui'           => true,
                    'show_admin_column' => true,
                    "rewrite" => array(
                            'slug' => 'products_category',
                            'hierarchical' => true
                    )
            )
    );
} // function: products_category END

add_action( 'init', 'products_post_type' );
add_action( 'init', 'products_category', 0 );
add_filter( 'post_updated_messages', 'products_messages' );