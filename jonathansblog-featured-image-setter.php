<?php
  /*
  Plugin name: jonathansblog featured image setter
  Plugin URI: https://jonathansblog.co.uk/
  Description: plugin to set all posts without featured image to have an image
  Author: Jonathan Mitchell
  Author URI: https://jonathansblog.co.uk/
  Version: 0.1
  */

// include admin page if present
if (file_exists(WP_PLUGIN_DIR . '/jonathansblog-featured-image-setter/includes/jonathansblog-featured-image-setter-admin.php')) {
	require_once WP_PLUGIN_DIR . '/jonathansblog-featured-image-setter/includes/jonathansblog-featured-image-setter-admin.php';
}

// helper functions
if (file_exists(WP_PLUGIN_DIR . '/jonathansblog-featured-image-setter/includes/helper.php')) {
	require_once WP_PLUGIN_DIR . '/jonathansblog-featured-image-setter/includes/helper.php';
}
