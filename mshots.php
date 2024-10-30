<?php
/*
Plugin Name: mShots
Plugin URI: http://wpforchurch.com/plugins/mshots/
Description: WordPress.com has a service called mShots that allows you to easily insert screenshots of any website into your blog. This simple plugin lets you use mShots with a shortcode.
Version: 0.1
Author: Jack Lamb
Author URI: http://wpforchurch.com/
License: GPL2
*/

// The idea and code for this plugin comes from here: http://www.wprecipes.com/wordpress-shortcode-display-a-thumbnail-of-any-website/

// Security check to see if someone is accessing this file directly
if(preg_match("#^mshots.php#", basename($_SERVER['PHP_SELF']))) exit();

function wpfc_mshot($atts, $content = null) {
        extract(shortcode_atts(array(
			"mshot" => 'http://s.wordpress.com/mshots/v1/',
			"url" => 'http://wpforchurch.com',
			"alt" => 'My image',
			"w" => '600', // width
			"h" => '500' // height
        ), $atts));

	$img = '<img src="' . $mshot . '' . urlencode($url) . '?w=' . $w . '&h=' . $h . '" alt="' . $alt . '" target="_blank"/>';
        return $img;
}

add_shortcode("mshot", "wpfc_mshot");

?>
