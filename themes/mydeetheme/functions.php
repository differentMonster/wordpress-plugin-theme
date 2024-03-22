<?php
function mydeetheme_register_styles(){
   $version = wp_get_theme()->get('Version');
   wp_enqueue_style('mydeetheme-fontawesome', get_template_directory_uri() . "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
   wp_enqueue_style('mydeetheme-bootstrap', get_template_directory_uri() . "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
   wp_enqueue_style('mydeetheme-style', get_template_directory_uri() . "/style.css", array('mydeetheme-bootstrap'), $version, 'all');

}

add_action('wp_enqueue_scripts', 'mydeetheme_register_styles');

function mydeetheme_register_scripts(){
   wp_enqueue_script('mydeetheme-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
   wp_enqueue_script('mydeetheme-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16', true);
   wp_enqueue_script('mydeetheme-boostrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1', true);

}

add_action('wp_enqueue_scripts', 'mydeetheme_register_scripts');


?>