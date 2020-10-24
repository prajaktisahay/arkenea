<?php
/*
Theme Name: Astra Child
Theme URI: http://example.com/astra/
description: >-
  Astra Child Theme
Author: Prajakti Sahay
Author URI: http://example.com
Template: astra
Version: 1.0.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: light, dark, two-columns, right-sidebar, responsive-layout, accessibility-ready
Text Domain: astra-child
*/

function astrachild_scripts() {

$parent_style = 'parent-style';

wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
wp_enqueue_style( 'astrachild-style', get_stylesheet_uri(), array( $parent_style ), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'astrachild_scripts' );

 ?>
