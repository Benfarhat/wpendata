<?php
 /**
 * Register a custom post type called "Catalog".
 *
 */
function wpendata_catalog_init() {
    $labels = array(
        'name'                  => _x( 'Catalogs', 'Post type general name', WPENDATA_TEXT_DOMAIN ),
        'singular_name'         => _x( 'Catalog', 'Post type singular name', WPENDATA_TEXT_DOMAIN ),
        'menu_name'             => _x( '1. Catalogs', 'Admin Menu text', WPENDATA_TEXT_DOMAIN ),
        'name_admin_bar'        => _x( 'Catalog', 'Add New on Toolbar', WPENDATA_TEXT_DOMAIN ),
        'add_new'               => __( 'Add New Catalog', WPENDATA_TEXT_DOMAIN ),
        'add_new_item'          => __( 'Add New Catalog', WPENDATA_TEXT_DOMAIN ),
        'new_item'              => __( 'New Catalog', WPENDATA_TEXT_DOMAIN ),
        'edit_item'             => __( 'Edit Catalog', WPENDATA_TEXT_DOMAIN ),
        'view_item'             => __( 'View Catalog', WPENDATA_TEXT_DOMAIN ),
        'all_items'             => __( 'Catalogs', WPENDATA_TEXT_DOMAIN ),
        'search_items'          => __( 'Search Catalogs', WPENDATA_TEXT_DOMAIN ),
        'parent_item_colon'     => __( 'Parent Catalogs:', WPENDATA_TEXT_DOMAIN ),
        'not_found'             => __( 'No Catalogs found.', WPENDATA_TEXT_DOMAIN ),
        'not_found_in_trash'    => __( 'No Catalogs found in Trash.', WPENDATA_TEXT_DOMAIN ),
        'featured_image'        => _x( 'Catalog Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', WPENDATA_TEXT_DOMAIN ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', WPENDATA_TEXT_DOMAIN ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', WPENDATA_TEXT_DOMAIN ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', WPENDATA_TEXT_DOMAIN ),
        'archives'              => _x( 'Catalog archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', WPENDATA_TEXT_DOMAIN ),
        'insert_into_item'      => _x( 'Insert into Catalog', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', WPENDATA_TEXT_DOMAIN ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Catalog', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', WPENDATA_TEXT_DOMAIN ),
        'filter_items_list'     => _x( 'Filter Catalogs list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', WPENDATA_TEXT_DOMAIN ),
        'items_list_navigation' => _x( 'Catalogs list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', WPENDATA_TEXT_DOMAIN ),
        'items_list'            => _x( 'Catalogs list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', WPENDATA_TEXT_DOMAIN ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => false,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Catalog' ),
        'capability_type'    => 'catalog',
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
 */
function wpendata_dataset_init() {
    $labels = array(
        'name'                  => _x( 'Datasets', 'Post type general name', WPENDATA_TEXT_DOMAIN ),
        'singular_name'         => _x( 'Dataset', 'Post type singular name', WPENDATA_TEXT_DOMAIN ),
        'menu_name'             => _x( '2. Datasets', 'Admin Menu text', WPENDATA_TEXT_DOMAIN ),
        'name_admin_bar'        => _x( 'Dataset', 'Add New on Toolbar', WPENDATA_TEXT_DOMAIN ),
        'add_new'               => __( 'Add New Dataset', WPENDATA_TEXT_DOMAIN ),
        'add_new_item'          => __( 'Add New Dataset', WPENDATA_TEXT_DOMAIN ),
        'new_item'              => __( 'New Dataset', WPENDATA_TEXT_DOMAIN ),
        'edit_item'             => __( 'Edit Dataset', WPENDATA_TEXT_DOMAIN ),
        'view_item'             => __( 'View Dataset', WPENDATA_TEXT_DOMAIN ),
        'all_items'             => __( 'Datasets', WPENDATA_TEXT_DOMAIN ),
        'search_items'          => __( 'Search Datasets', WPENDATA_TEXT_DOMAIN ),
        'parent_item_colon'     => __( 'Parent Datasets:', WPENDATA_TEXT_DOMAIN ),
        'not_found'             => __( 'No Datasets found.', WPENDATA_TEXT_DOMAIN ),
        'not_found_in_trash'    => __( 'No Datasets found in Trash.', WPENDATA_TEXT_DOMAIN ),
        'featured_image'        => _x( 'Dataset Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', WPENDATA_TEXT_DOMAIN ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', WPENDATA_TEXT_DOMAIN ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', WPENDATA_TEXT_DOMAIN ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', WPENDATA_TEXT_DOMAIN ),
        'archives'              => _x( 'Dataset archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', WPENDATA_TEXT_DOMAIN ),
        'insert_into_item'      => _x( 'Insert into Dataset', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', WPENDATA_TEXT_DOMAIN ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Dataset', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', WPENDATA_TEXT_DOMAIN ),
        'filter_items_list'     => _x( 'Filter Datasets list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', WPENDATA_TEXT_DOMAIN ),
        'items_list_navigation' => _x( 'Datasets list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', WPENDATA_TEXT_DOMAIN ),
        'items_list'            => _x( 'Datasets list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', WPENDATA_TEXT_DOMAIN ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => false,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Dataset' ),
        'capability_type'    => 'dataset',
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
 */
function wpendata_distribution_init() {
    $labels = array(
        'name'                  => _x( 'Distributions', 'Post type general name', WPENDATA_TEXT_DOMAIN ),
        'singular_name'         => _x( 'Distribution', 'Post type singular name', WPENDATA_TEXT_DOMAIN ),
        'menu_name'             => _x( '3. Distributions', 'Admin Menu text', WPENDATA_TEXT_DOMAIN ),
        'name_admin_bar'        => _x( 'Distribution', 'Add New on Toolbar', WPENDATA_TEXT_DOMAIN ),
        'add_new'               => __( 'Add New Distribution', WPENDATA_TEXT_DOMAIN ),
        'add_new_item'          => __( 'Add New Distribution', WPENDATA_TEXT_DOMAIN ),
        'new_item'              => __( 'New Distribution', WPENDATA_TEXT_DOMAIN ),
        'edit_item'             => __( 'Edit Distribution', WPENDATA_TEXT_DOMAIN ),
        'view_item'             => __( 'View Distribution', WPENDATA_TEXT_DOMAIN ),
        'all_items'             => __( 'Distributions', WPENDATA_TEXT_DOMAIN ),
        'search_items'          => __( 'Search Distributions', WPENDATA_TEXT_DOMAIN ),
        'parent_item_colon'     => __( 'Parent Distributions:', WPENDATA_TEXT_DOMAIN ),
        'not_found'             => __( 'No Distributions found.', WPENDATA_TEXT_DOMAIN ),
        'not_found_in_trash'    => __( 'No Distributions found in Trash.', WPENDATA_TEXT_DOMAIN ),
        'featured_image'        => _x( 'Distribution Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', WPENDATA_TEXT_DOMAIN ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', WPENDATA_TEXT_DOMAIN ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', WPENDATA_TEXT_DOMAIN ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', WPENDATA_TEXT_DOMAIN ),
        'archives'              => _x( 'Distribution archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', WPENDATA_TEXT_DOMAIN ),
        'insert_into_item'      => _x( 'Insert into Distribution', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', WPENDATA_TEXT_DOMAIN ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Distribution', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', WPENDATA_TEXT_DOMAIN ),
        'filter_items_list'     => _x( 'Filter Distributions list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', WPENDATA_TEXT_DOMAIN ),
        'items_list_navigation' => _x( 'Distributions list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', WPENDATA_TEXT_DOMAIN ),
        'items_list'            => _x( 'Distributions list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', WPENDATA_TEXT_DOMAIN ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => false,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Distribution' ),
        'capability_type'    => 'distribution',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 22,
        'menu_icon'          => 'dashicons-media-text',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );
 
    register_post_type( 'Distribution', $args );
}
 
add_action( 'init', 'wpendata_distribution_init' );