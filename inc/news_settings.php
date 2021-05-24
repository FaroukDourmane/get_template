<?php

class NewsSettings {

        public function __construct() 
        {
            add_theme_support( 'post-thumbnails' );
            add_action( 'init', array( $this, 'news_post_type' ));
        }

        public function news_post_type () {
            
            $labels = array(
                'name' => _x( 'News', 'post type general name' ),
                'singular_name' => _x( 'News', 'post type singular name' ),
                'add_new' => _x( 'Add New', 'Article' ),
                'add_new_item' => __( 'Add New Article' ),
                'edit_item' => __( 'Edit Article' ),
                'new_item' => __( 'New Article' ),
                'all_items' => __( 'All News' ),
                'view_item' => __( 'View Article' ),
                'search_items' => __( 'Search News' ),
                'not_found' => __( 'No News found' ),
                'not_found_in_trash' => __( 'No news found in the Trash' ),
                'parent_item_colon' => '',
                'menu_name' => 'News'
                );

            register_post_type( 'news', array(
                'labels' => $labels,
                'description' => 'Displays news',
                'public' => true,
                'menu_position' => 3,
                'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
                'has_archive' => true,
            ) );
        }
        
}