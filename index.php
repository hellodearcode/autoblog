<?php
/**
 * Plugin Name: Auto Blogging
 * Plugin URI: http://tabishrana.blogspot.com
 * Description: pick top volume keyword and grab article from api and publish
 * Version: 1.0
 * Author: Hello Dear Code
 * Author URI: http://www.facebook.com/hellodearcode
 * License: GPL
 */
$autoblog_plugin_name = "Auto Blogging";
$autoblog_plugin_slug = "auto-blogging";

/*
** plugin topic keywords collection
** to create articles
*/

if(isset($_POST['home-submit']))
{
  var_dump($_POST);
}
/*
** Plugin advance setup options
*/

if(isset($_POST['settings-submit']))
{
  include_once('processor/settings.php');
}


/*
** plugin developer options
*/

if(isset($_POST['dev-submit']))
{
  var_dump($_POST);
    //global $current_user;
    //get_currentuserinfo();
    //update_user_meta($current_user->ID, 'wpppdescription', $_POST);
}

/*
** Page Setup front end
** wp menu page content
*/

// developer setup page content
function hdc_auto_blog_developer_setup()
{
   ?>

<h1>Developer setup</h1>

   <?php
   include_once('inc/dev_opt.php');
}

// advance setup page content
function hdc_auto_blog_advance_setup()
{
   ?>

<h1>Advance setup</h1>

   <?php
   include_once('inc/advance_opt.php');
}

// main page content
function hdc_auto_blog_menupage_content()
{
  global $autoblog_plugin_name;
   echo "<h1>$autoblog_plugin_name</h1>";
   include_once('inc/home.php');
}

// Menu Item admin
function hdc_auto_blog_menu_page(){
  global $autoblog_plugin_slug,$autoblog_plugin_name;
  add_menu_page($autoblog_plugin_name, $autoblog_plugin_name, 'manage_options', $autoblog_plugin_slug,'hdc_auto_blog_menupage_content');
  add_submenu_page($autoblog_plugin_slug, 'Advance Setup', 'Advance Setup', 'manage_options', 'auto-blogging-advance-setup', 'hdc_auto_blog_advance_setup' );
  add_submenu_page($autoblog_plugin_slug, 'Developer Setup', 'Developer Setup', 'manage_options', 'auto-blogging-developer-setup', 'hdc_auto_blog_developer_setup' );
}
add_action( 'admin_menu', 'hdc_auto_blog_menu_page' );

/*
** Plugin activation tables creation
*/
function test_contact_form()
{
  global $wpdb;
  $db_table_name = $wpdb->prefix . 'contactus_detail';  // table name
  $charset_collate = $wpdb->get_charset_collate();

  $sql = "CREATE TABLE $db_table_name (
                id int(11) NOT NULL auto_increment,
                ip varchar(15) NOT NULL,
                name varchar(60) NOT NULL,
                emailid varchar(200) NOT NULL,
                mobileno varchar(10) NOT NULL,
                message varchar(1000) NOT NULL,
                UNIQUE KEY id (id)
        ) $charset_collate;";

   require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
   dbDelta( $sql );
   add_option( 'test_db_version', $test_db_version );
}
function del_test_contact_form()
{
  global $wpdb;
  $db_table_name = $wpdb->prefix . 'contactus_detail';  // table name
  $sql = "drop table $db_table_name";
   require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
   dbDelta( $sql );
   delete_option('test_db_version');
}
register_activation_hook( __FILE__, 'test_contact_form' );

register_deactivation_hook( __FILE__, 'del_test_contact_form' );
