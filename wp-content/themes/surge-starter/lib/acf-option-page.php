<?php
//Theme Settings Page
if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page(array(
    'page_title'  => 'General Settings',
    'menu_title'  => 'Page Settings',
    'menu_slug'   => 'general-settings',
    'capability'  => 'edit_posts',
  ));
  
}