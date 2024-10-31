<?php
/*
  Plugin Name: Online Users
  Plugin URI: http://blogbuzztime.com
  Description: Show current online users
  Version: 1.0
  Author: BlogBuzzTime
  Author URI: http://blogbuzztime.com
  License: GPL2
  Text Domain: BlogBuzzTime
 */

include  dirname(__FILE__) . '/functions.php';
include  dirname(__FILE__) . '/class/uteUSBlogBuzzTime.php';
include  dirname(__FILE__) . '/class/uteUSBlogBuzzTime_widget.php';
$blogbuzztime = uteUSBlogbuzztime::getInstance();

register_activation_hook( __FILE__, 'uteUSblogBuzzTime_Install' );
register_deactivation_hook ( __FILE__, 'uteUSblogBuzzTime_Uninstall' );

// register widget
add_action('widgets_init', 'uteUSblogbuzztime_widget');
