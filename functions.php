<?php
/**
 * Hood functions and definitions
 *
 * @package Hood
 */

function enqueue_styles() {
  wp_enqueue_style('style', get_template_directory_uri() . './style.css');
}

add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts() {
  wp_enqueue_script( 'script', get_template_directory_uri() . './assets/scripts/script.js');
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');
?>
