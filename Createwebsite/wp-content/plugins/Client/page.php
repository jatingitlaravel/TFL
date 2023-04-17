<?php
/**
* Plugin Name: create_plugin
* Plugin URI: https://www.Createwebsite.com/
* Description: Test.
* Version: 0.1
* Author: jatin
* Author URI: https://www.Createwebsite.com/
**/


function  my_plugin_activation(){
global $wpdb, $table_prefix;
$wp_emp = $table_prefix."emp";


$q = "CREATE TABLE IF NOT EXISTS `wp_emp` (`ID` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL ,
 `email` VARCHAR(100) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;";
 $wpdb->query($q);

//  $data = array(
// 'name'=> 'client_jatin',
// 'email' => 'jatin125@gmail.com',


//  );
//  $wpdb->insert($wp_emp, $data);
}

register_activation_hook(__FILE__, 'my_plugin_activation');


function  plugin_deactivation(){
    global $wpdb, $table_prefix;
    $wp_emp = $table_prefix."emp";

    $q = "DELETE TABLE '$wp_emp'";
    $wpdb->query($q);
}
register_deactivation_hook(__FILE__, 'plugin_deactivation');


function register_my_custom_menu_page() {
	add_menu_page(
		__( 'Custom Menu Title', 'Add Client' ),
		'custom menu',
		'manage_options',
		'addmenu_callback',
		'addmenu_callback',
		'',
		6
	);
}

function addmenu_callback(){

    include 'admin/main-page.php';
}
add_action( 'admin_menu', 'register_my_custom_menu_page' );

function books_register_ref_page() {
    add_submenu_page(
        '',
        __( 'Books Shortcode Reference', 'Add client' ),
        __( 'Shortcode Reference', 'Add client' ),
        'manage_options',
        '',
        ''
    );
}

function youtube(){
global $wpdb, $table_prefix;
$wp_emp = $table_prefix. 'emp';


$q = "SELECT * FROM `$wp_emp`;";
$results = $wpdb->get_results($q);

echo"<pre>";
print_r($results);
echo"<pre>";
}
add_shortcode('youtube','youtube');
