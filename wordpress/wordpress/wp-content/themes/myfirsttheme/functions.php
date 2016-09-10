<?php

function awesome_first_theme_enqueue() {

  wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/firsttheme.css', array(), '1.0.0','all');
  wp_enqueue_script('customjs',get_template_directory_uri() . '/js/firsttheme.js', array(), '1.0.0',true );

}

add_action('wp_enqueue_scripts','awesome_first_theme_enqueue');

function awesome_first_theme_setup() {

  add_theme_support('menu');

  register_nav_menu('primary', 'Primary Header Navigation');
  register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init','awesome_first_theme_setup');
