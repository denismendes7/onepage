<?php
/*
Plugin Name: Crud
Description: 
Version: 1
*/
// function to create the DB / Options / Defaults					
function ss_options_install() {

    global $wpdb;

    $table_name = $wpdb->prefix . "crud";
    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE $table_name (
            `id` varchar(3) CHARACTER SET utf8 NOT NULL,
            `name` varchar(50) CHARACTER SET utf8 NOT NULL,
            `sobrenome` varchar(50) CHARACTER SET utf8 NOT NULL,           
            `datenasc` datetime NOT NULL,   
            `datefal` datetime  NOT NULL,  
            `description` text  NOT NULL,        
            `photo` text  NOT NULL,                                                                
            PRIMARY KEY (`id`)R
          ) $charset_collate; ";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta($sql);
}

// run the install scripts upon plugin activation
register_activation_hook(__FILE__, 'ss_options_install');

//menu items
add_action('admin_menu','crud_demo_modifymenu');
function crud_demo_modifymenu() {
	
	//this is the main item for the menu
	add_menu_page('Crud', //page title
	'Crud', //menu title
	'manage_options', //capabilities
	'crud_demo_list', //menu slug
	'crud_demo_list' //function
	);
	
	//this is a submenu
	add_submenu_page('crud_demo_list', //parent slug
	'Crear nuevo', //page title
	'Nuevo', //menu title
	'manage_options', //capability
	'crud_demo_create', //menu slug
	'crud_demo_create'); //function
	
	//this submenu is HIDDEN, however, we need to add it anyways
	add_submenu_page(null, //parent slug
	'Actualizar registro', //page title
	'Actualizar', //menu title
	'manage_options', //capability
	'crud_demo_update', //menu slug
	'crud_demo_update'); //function
}
define('ROOTDIR', plugin_dir_path(__FILE__));
require_once(ROOTDIR . 'crud-list.php');
require_once(ROOTDIR . 'crud-create.php');
require_once(ROOTDIR . 'crud-update.php');
