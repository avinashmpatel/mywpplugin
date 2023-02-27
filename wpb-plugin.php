<?php
/*
Plugin Name:  WPB Plugin
Plugin URI:   https://www.wpbplugin.com 
Description:  A short little description of the plugin. It will be displayed on the Plugins page in WordPress admin area. 
Version:      1.0
Author:       WPBPlugin 
Author URI:   https://www.wpbplugin.com
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wpb-plugin
Domain Path:  /languages
*/

function wpb_follow_us($content) {
 
// Only do this when a single post is displayed
if ( is_single() ) { 
 
// Message you want to display after the post
// Add URLs to your own Twitter and Facebook profiles
 
$content .= '<p class="follow-us">If you liked this article, then please follow us on <a href="" title="Linkedin" target="_blank" rel="nofollow">Linkedin</a>.</p>';
 
} 
// Return the content
return $content; 
 
}
// Hook our function to WordPress the_content filter
add_filter('the_content', 'wpb_follow_us');