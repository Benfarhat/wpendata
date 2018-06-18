<?php

/**
 * Display a custom menu page
 */

function wpendata_options_page_html()
{
    // check user capabilities
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
    ?>
    <div class="wrap">
        <h1><?= esc_html(get_admin_page_title()); ?></h1>
        <form action="options.php" method="post">
            <?php
            // output security fields for the registered setting "wpendata_options"
            settings_fields('wpendata_options');
            // output setting sections and their fields
            // (sections are registered for "wpendata", each field is registered to a specific section)
            do_settings_sections('wpendata');
            // output save settings button
            submit_button('Save Settings');
            ?>
        </form>
    </div>
    <?php
}

/**
 * Register a custom menu page.
 */

function wpendata_options_page()
{
    add_menu_page(
        'wpendata',
        'Opendata',
        'manage_options',
        'wpendata',
        'wpendata_options_page_html',
        'dashicons-media-text',
        20
    );
    // Catalogs
    add_submenu_page('wpendata', __( 'Catalogs', WPENDATA_TEXT_DOMAIN ),  __( 'Catalogs', WPENDATA_TEXT_DOMAIN ), 'manage_options', 'edit.php?post_type=catalog');
    add_submenu_page('wpendata',  __( 'Add New Catalog', WPENDATA_TEXT_DOMAIN ),  __( 'Add New Catalog', WPENDATA_TEXT_DOMAIN ), 'manage_options', 'post-new.php?post_type=catalog');
    // Datasets
    add_submenu_page('wpendata',  __( 'Datasets', WPENDATA_TEXT_DOMAIN ),  __( 'Datasets', WPENDATA_TEXT_DOMAIN ), 'manage_options', 'edit.php?post_type=dataset');
    add_submenu_page('wpendata',  __( 'Add New Dataset', WPENDATA_TEXT_DOMAIN ),  __( 'Add New Dataset', WPENDATA_TEXT_DOMAIN ), 'manage_options', 'post-new.php?post_type=dataset');
    // Distributions
    add_submenu_page('wpendata',  __( 'Distributions', WPENDATA_TEXT_DOMAIN ),  __( 'Distributions', WPENDATA_TEXT_DOMAIN ), 'manage_options', 'edit.php?post_type=distribution');
    add_submenu_page('wpendata',  __( 'Add New Distribution', WPENDATA_TEXT_DOMAIN ),  __( 'Add New Distribution', WPENDATA_TEXT_DOMAIN ), 'manage_options', 'post-new.php?post_type=distribution');
    // Taxonomies
    add_submenu_page('wpendata',  __( 'Themes / Categories', WPENDATA_TEXT_DOMAIN ),  __( 'Themes / Categories', WPENDATA_TEXT_DOMAIN ), 'manage_options', 'edit-tags.php?taxonomy=opendata-theme&post_type=dataset');
    add_submenu_page('wpendata',  __( 'Data format', WPENDATA_TEXT_DOMAIN ),  __( 'Data format', WPENDATA_TEXT_DOMAIN ), 'manage_options', 'edit-tags.php?taxonomy=opendata-dataformat&post_type=dataset');

}
add_action('admin_menu', 'wpendata_options_page');