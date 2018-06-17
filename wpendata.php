<?php
/**
 * Plugin Name: WP Data Portal
 * Plugin URI: https://github.com/Benfarhat/wpendata
 * Description: A simple opendata alternative to CKAN and DKAN for Wordpress Lovers
 * Version: 1.0.0
 * Author: Benfarhat Elyes
 * Author URI: https://github.com/Benfarhat
 * License: GPL2
 * License URI:  https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:  WPDataPortal
 * Domain Path:  /languages
 * 
 * WP Data Portal is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 2 of the License, or
* any later version.
*  
* WP Data Portal is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*  
* You should have received a copy of the GNU General Public License
* along with WP Data Portal. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
 */


 

 /**
 * Register a custom post type called "Catalog".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpendata_catalog_init() {
    $labels = array(
        'name'                  => _x( 'Catalogs', 'Post type general name', 'wpendata' ),
        'singular_name'         => _x( 'Catalog', 'Post type singular name', 'wpendata' ),
        'menu_name'             => _x( '1. Catalogs', 'Admin Menu text', 'wpendata' ),
        'name_admin_bar'        => _x( 'Catalog', 'Add New on Toolbar', 'wpendata' ),
        'add_new'               => __( 'Add New Catalog', 'wpendata' ),
        'add_new_item'          => __( 'Add New Catalog', 'wpendata' ),
        'new_item'              => __( 'New Catalog', 'wpendata' ),
        'edit_item'             => __( 'Edit Catalog', 'wpendata' ),
        'view_item'             => __( 'View Catalog', 'wpendata' ),
        'all_items'             => __( 'All Catalogs', 'wpendata' ),
        'search_items'          => __( 'Search Catalogs', 'wpendata' ),
        'parent_item_colon'     => __( 'Parent Catalogs:', 'wpendata' ),
        'not_found'             => __( 'No Catalogs found.', 'wpendata' ),
        'not_found_in_trash'    => __( 'No Catalogs found in Trash.', 'wpendata' ),
        'featured_image'        => _x( 'Catalog Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'wpendata' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'wpendata' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'wpendata' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'wpendata' ),
        'archives'              => _x( 'Catalog archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'wpendata' ),
        'insert_into_item'      => _x( 'Insert into Catalog', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'wpendata' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Catalog', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'wpendata' ),
        'filter_items_list'     => _x( 'Filter Catalogs list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'wpendata' ),
        'items_list_navigation' => _x( 'Catalogs list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'wpendata' ),
        'items_list'            => _x( 'Catalogs list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'wpendata' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Catalog' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );
 
    register_post_type( 'Catalog', $args );
}
 
add_action( 'init', 'wpendata_catalog_init' );


 /**
 * Register a custom post type called "Dataset".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpendata_dataset_init() {
    $labels = array(
        'name'                  => _x( 'Datasets', 'Post type general name', 'wpendata' ),
        'singular_name'         => _x( 'Dataset', 'Post type singular name', 'wpendata' ),
        'menu_name'             => _x( '2. Datasets', 'Admin Menu text', 'wpendata' ),
        'name_admin_bar'        => _x( 'Dataset', 'Add New on Toolbar', 'wpendata' ),
        'add_new'               => __( 'Add New Dataset', 'wpendata' ),
        'add_new_item'          => __( 'Add New Dataset', 'wpendata' ),
        'new_item'              => __( 'New Dataset', 'wpendata' ),
        'edit_item'             => __( 'Edit Dataset', 'wpendata' ),
        'view_item'             => __( 'View Dataset', 'wpendata' ),
        'all_items'             => __( 'All Datasets', 'wpendata' ),
        'search_items'          => __( 'Search Datasets', 'wpendata' ),
        'parent_item_colon'     => __( 'Parent Datasets:', 'wpendata' ),
        'not_found'             => __( 'No Datasets found.', 'wpendata' ),
        'not_found_in_trash'    => __( 'No Datasets found in Trash.', 'wpendata' ),
        'featured_image'        => _x( 'Dataset Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'wpendata' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'wpendata' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'wpendata' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'wpendata' ),
        'archives'              => _x( 'Dataset archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'wpendata' ),
        'insert_into_item'      => _x( 'Insert into Dataset', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'wpendata' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Dataset', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'wpendata' ),
        'filter_items_list'     => _x( 'Filter Datasets list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'wpendata' ),
        'items_list_navigation' => _x( 'Datasets list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'wpendata' ),
        'items_list'            => _x( 'Datasets list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'wpendata' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Dataset' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-book-alt',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );
 
    register_post_type( 'Dataset', $args );
}
 
add_action( 'init', 'wpendata_dataset_init' );


 /**
 * Register a custom post type called "Distribution".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpendata_distribution_init() {
    $labels = array(
        'name'                  => _x( 'Distributions', 'Post type general name', 'wpendata' ),
        'singular_name'         => _x( 'Distribution', 'Post type singular name', 'wpendata' ),
        'menu_name'             => _x( '3. Distributions', 'Admin Menu text', 'wpendata' ),
        'name_admin_bar'        => _x( 'Distribution', 'Add New on Toolbar', 'wpendata' ),
        'add_new'               => __( 'Add New Distribution', 'wpendata' ),
        'add_new_item'          => __( 'Add New Distribution', 'wpendata' ),
        'new_item'              => __( 'New Distribution', 'wpendata' ),
        'edit_item'             => __( 'Edit Distribution', 'wpendata' ),
        'view_item'             => __( 'View Distribution', 'wpendata' ),
        'all_items'             => __( 'All Distributions', 'wpendata' ),
        'search_items'          => __( 'Search Distributions', 'wpendata' ),
        'parent_item_colon'     => __( 'Parent Distributions:', 'wpendata' ),
        'not_found'             => __( 'No Distributions found.', 'wpendata' ),
        'not_found_in_trash'    => __( 'No Distributions found in Trash.', 'wpendata' ),
        'featured_image'        => _x( 'Distribution Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'wpendata' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'wpendata' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'wpendata' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'wpendata' ),
        'archives'              => _x( 'Distribution archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'wpendata' ),
        'insert_into_item'      => _x( 'Insert into Distribution', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'wpendata' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Distribution', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'wpendata' ),
        'filter_items_list'     => _x( 'Filter Distributions list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'wpendata' ),
        'items_list_navigation' => _x( 'Distributions list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'wpendata' ),
        'items_list'            => _x( 'Distributions list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'wpendata' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Distribution' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 22,
        'menu_icon'          => 'dashicons-media-text',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );
 
    register_post_type( 'Distribution', $args );
}
 
add_action( 'init', 'wpendata_distribution_init' );