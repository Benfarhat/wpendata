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
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();


define('WPENDATA_TEXT_DOMAIN', 'wpendata'); // text domain of the plugin

require_once( dirname( __FILE__ ) . '/includes/custom-post-types.php' );
require_once( dirname( __FILE__ ) . '/includes/admin-menu.php' );
require_once( dirname( __FILE__ ) . '/includes/taxonomies.php' );