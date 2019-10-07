<?php

add_post_type_support( 'blog', 'comments' );

// function: post_type BEGIN
function blog_post_type(){
    
    $labels = array(
                    'name' => __( 'Blog'), 
                    'singular_name' => __('Blog'),
                    'rewrite' => array(
                            'slug' => __( 'adp_blog' ) 
                    ),
                    'add_new' => _x('Add Item', 'blog'), 
                    'edit_item' => __('Edit Blog Item'),
                    'new_item' => __('New Blog Item'), 
                    'view_item' => __('View Blog'),
                    'search_items' => __('Search Blog'), 
                    'not_found' =>  __('No Blog Items Found'),
                    'not_found_in_trash' => __('No Blog Items Found In Trash'),
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
                    'rewrite' => array('slug' => 'blog'),
                    'has_archive' => true,
                    'menu_icon' => get_template_directory_uri('template_directory').'/images/icons/blog.png',
                    'supports' => array(
                            'comments',
                            'title',
                            'editor',
                            'thumbnail',
                            'excerpt',
                            'custom-fields',
                            'page-attributes'
                    ),
                  //'taxonomies' => array('post_tag', 'blog_category'),
                  //'suppress_filters' => true
             ); 
    
    register_post_type(__( 'blog' ), $args);        
} 

// function: blog_messages BEGIN
function blog_messages($messages)
{
    $messages[__( 'blog' )] = 
            array(
                    0 => '', 
                    1 => sprintf(('Blog Updated. <a href="%s">View blog</a>'), esc_url(get_permalink($post_ID))),
                    2 => __('Custom Field Updated.'),
                    3 => __('Custom Field Deleted.'),
                    4 => __('Blog Updated.'),
                    5 => isset($_GET['revision']) ? sprintf( __('Blog Restored To Revision From %s'), wp_post_revision_title((int)$_GET['revision'], false)) : false,
                    6 => sprintf(__('Blog Published. <a href="%s">View Portfolio</a>'), esc_url(get_permalink($post_ID))),
                    7 => __('Blog Saved.'),
                    8 => sprintf(__('Blog Submitted. <a target="_blank" href="%s">Preview Blog</a>'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
                    9 => sprintf(__('Blog Scheduled For: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Blog</a>'), date_i18n( __( 'M j, Y @ G:i' ), strtotime($post->post_date)), esc_url(get_permalink($post_ID))),
                    10 => sprintf(__('Blog Draft Updated. <a target="_blank" href="%s">Preview Blog</a>'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
            );
    return $messages;

} // function: blog_messages END

// function: blog_category BEGIN
function blog_category()
{
    register_taxonomy(
            __( "blog_category" ),
            array(__( "blog" )),
            array(
                    "hierarchical" => true,
                    "label" => __( "Category" ),
                    "singular_label" => __( "Category" ),
                    'show_ui'           => true,
                    'show_admin_column' => true,
                    "rewrite" => array(
                            'slug' => 'blog_category',
                            'hierarchical' => true
                    )
            )
    );
} // function: blog_category END

add_action( 'init', 'blog_post_type' );
add_action( 'init', 'blog_category', 0 );
add_filter( 'post_updated_messages', 'blog_messages' );