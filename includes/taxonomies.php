<?php
/**
 * Register taxonomies for datasets and projects.
 */
function wpendata_register_taxonomies() {

    $themes = array(
        'name'                => _x( 'Themes', 'taxonomy general name' , WPENDATA_TEXT_DOMAIN),
        'singular_name'       => _x( 'Theme', 'taxonomy singular name' , WPENDATA_TEXT_DOMAIN),
        'search_items'        => __( 'Search Categories', WPENDATA_TEXT_DOMAIN ),
        'all_items'           => __( 'All Categories', WPENDATA_TEXT_DOMAIN ),
        'parent_item'         => __( 'Parent Theme', WPENDATA_TEXT_DOMAIN ),
        'parent_item_colon'   => __( 'Parent Theme:', WPENDATA_TEXT_DOMAIN ),
        'edit_item'           => __( 'Edit Theme', WPENDATA_TEXT_DOMAIN ), 
        'update_item'         => __( 'Update Theme', WPENDATA_TEXT_DOMAIN ),
        'add_new_item'        => __( 'Add New Theme', WPENDATA_TEXT_DOMAIN ),
        'new_item_name'       => __( 'New Theme Name', WPENDATA_TEXT_DOMAIN ),
        'menu_name'           => __( 'Themes', WPENDATA_TEXT_DOMAIN )
    );    

    $args_themes = array(
        'labels'              => $themes,
        'hierarchical'        => true,
        'show_ui'             => true,
        'show_admin_column'   => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'opendata-theme' ),
        'capabilities'        => array('assign_terms' => 'edit_datasets', 'edit_terms' => 'manage_categories')
    );

    register_taxonomy( 'opendata-theme', array( 'dataset' ), $args_themes );



    $format = array(
        'name'                => _x( 'Data Formats', 'taxonomy general name' , WPENDATA_TEXT_DOMAIN),
        'singular_name'       => _x( 'Data Format', 'taxonomy singular name' , WPENDATA_TEXT_DOMAIN),
        'search_items'        => __( 'Search Data Formats', WPENDATA_TEXT_DOMAIN ),
        'all_items'           => __( 'All Data Formats', WPENDATA_TEXT_DOMAIN ),
        'parent_item'         => __( 'Parent Data Format', WPENDATA_TEXT_DOMAIN ),
        'parent_item_colon'   => __( 'Parent Data Format:', WPENDATA_TEXT_DOMAIN ),
        'edit_item'           => __( 'Edit Data Format', WPENDATA_TEXT_DOMAIN ), 
        'update_item'         => __( 'Update Data Format', WPENDATA_TEXT_DOMAIN ),
        'add_new_item'        => __( 'Add New Data Format', WPENDATA_TEXT_DOMAIN ),
        'new_item_name'       => __( 'New Data Format Name', WPENDATA_TEXT_DOMAIN ),
        'menu_name'           => __( 'Data Formats', WPENDATA_TEXT_DOMAIN )
    );    

    $args_format = array(
        'hierarchical'        => true,
        'labels'              => $format,
        'show_ui'             => true,
        'show_admin_column'   => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'opendata-dataformat' ),
        'capabilities'        => array('assign_terms' => 'edit_datasets', 'edit_terms' => 'manage_categories')
    );

    register_taxonomy( 'opendata-dataformat', array( 'dataset'), $args_format );

    	
	// insert some data formats
	$dataformat_file = term_exists('File', 'opendata-dataformat');
	if ( $dataformat_file === 0 || $dataformat_file === null ) {
		$dataformat_file = wp_insert_term('File', 'opendata-dataformat', array ('description' => 'The data is stored in a (downloadable) file.', 'slug' => 'file') );
		if ( $dataformat_file !== 0 && $dataformat_file !== null ) {
			$parent_id = $dataformat_file['term_id'];
			wp_insert_term('File CSV', 'opendata-dataformat', array ('description' => 'The data is stored in a CSV file.', 'slug' => 'file-csv', 'parent' => $parent_id) );
			wp_insert_term('File XLS', 'opendata-dataformat', array ('description' => 'The data is stored in an Excel sheet.', 'slug' => 'file-xls', 'parent' => $parent_id) );
			wp_insert_term('File XLSX', 'opendata-dataformat', array ('description' => 'The data is stored in an Excel Open XML format sheet.', 'slug' => 'file-xlsx', 'parent' => $parent_id) );
			wp_insert_term('File XML', 'opendata-dataformat', array ('description' => 'The data is stored in an XML file.', 'slug' => 'file-xml', 'parent' => $parent_id) );
			wp_insert_term('File JSON', 'opendata-dataformat', array ('description' => 'The data is stored in a JSON file.', 'slug' => 'file-json', 'parent' => $parent_id) );
			wp_insert_term('File IMG', 'opendata-dataformat', array ('description' => 'The data is stored in as an image (JPG, JPEG, PNG, GIF, BMP, ...).', 'slug' => 'file-img', 'parent' => $parent_id) );
			wp_insert_term('File PDF', 'opendata-dataformat', array ('description' => 'The data is stored in a PDF file.', 'slug' => 'file-doc', 'parent' => $parent_id) );
			wp_insert_term('File DOC', 'opendata-dataformat', array ('description' => 'The data is stored in a DOC file.', 'slug' => 'file-docx', 'parent' => $parent_id) );
			wp_insert_term('File DOCX', 'opendata-dataformat', array ('description' => 'The data is stored in a DOC Open XML format file.', 'slug' => 'file-pdf', 'parent' => $parent_id) );
		}
	}
	$dataformat_database = term_exists('Database', 'opendata-dataformat');
	if ( $dataformat_database === 0 || $dataformat_database === null ) {
		$dataformat_database = wp_insert_term('Database', 'opendata-dataformat', array ('description' => 'The data is stored in a database.', 'slug' => 'database') );
		if ( $dataformat_database !== 0 && $dataformat_database !== null ) {
			$parent_id = $dataformat_database['term_id'];
			wp_insert_term('Database MySQL', 'opendata-dataformat', array ('description' => 'The data is stored in a MySQL database.', 'slug' => 'database-mysql', 'parent' => $parent_id) );
			wp_insert_term('Database PostGreSQL', 'opendata-dataformat', array ('description' => 'The data is stored in a PostGreSQL database.', 'slug' => 'database-psql', 'parent' => $parent_id) );
			wp_insert_term('Database SQL Server', 'opendata-dataformat', array ('description' => 'The data is stored in a SQL Server database.', 'slug' => 'database-sqlserver', 'parent' => $parent_id) );
			wp_insert_term('Database MongoDB', 'opendata-dataformat', array ('description' => 'The data is stored in a NoSQL database (MongoDB).', 'slug' => 'database-mongo', 'parent' => $parent_id) );
		}
	}
	$dataformat_http = term_exists('HTTP', 'opendata-dataformat');
	if ( $dataformat_http === 0 || $dataformat_http === null ) {
		$dataformat_http = wp_insert_term('HTTP', 'opendata-dataformat', array ('description' => 'The data can be obtained by a HTTP API (other than REST).', 'slug' => 'http') );
		if ( $dataformat_http !== 0 && $dataformat_http !== null ) {
			$parent_id = $dataformat_http['term_id'];
			wp_insert_term('HTTP XML', 'opendata-dataformat', array ('description' => 'The data can be obtained by a HTTP XML API.', 'slug' => 'http-xml', 'parent' => $parent_id) );
		}
	}
	$dataformat_rest = term_exists('REST', 'opendata-dataformat');
	if ( $dataformat_rest === 0 || $dataformat_rest === null ) {
		$dataformat_rest = wp_insert_term('REST', 'opendata-dataformat', array ('description' => 'The data can be obtained by a REST service.', 'slug' => 'rest') );
		if ( $dataformat_rest !== 0 && $dataformat_rest !== null ) {
			$parent_id = $dataformat_rest['term_id'];
			wp_insert_term('REST JSON', 'opendata-dataformat', array ('description' => 'The data can be obtained by a REST JSON service.', 'slug' => 'rest-json', 'parent' => $parent_id) );
			wp_insert_term('REST XML', 'opendata-dataformat', array ('description' => 'The data can be obtained by a REST XML service.', 'slug' => 'rest-xml', 'parent' => $parent_id) );
		}
	}
   

}

add_action( 'init', 'wpendata_register_taxonomies' );