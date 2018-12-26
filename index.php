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
$plugin_name = "Auto Blogging";
$plugin_slug = "auto_blogging";

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
  global $plugin_name;
   echo "<h1>$plugin_name</h1>";
   include_once('inc/home.php');
}

// Menu Item admin
function hdc_auto_blog_menu_page(){
  global $plugin_slug,$plugin_name;
    add_menu_page(
        $plugin_name,
        $plugin_name,
        'manage_options',
        $plugin_slug,
        'hdc_auto_blog_menupage_content',
        '',
        50
    );

    add_submenu_page($plugin_slug, 'Advance Setup', 'Advance Setup', 'manage_options', 'auto-blogging-advance-setup', 'hdc_auto_blog_advance_setup' );
    add_submenu_page($plugin_slug, 'Developer Setup', 'Developer Setup', 'manage_options', 'auto-blogging-developer-setup', 'hdc_auto_blog_developer_setup' );
}
add_action( 'admin_menu', 'hdc_auto_blog_menu_page' );