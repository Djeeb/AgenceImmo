<?php
defined('ABSPATH') or die('');

add_action('after_setup_theme', function(){
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('html5');
    add_theme_support('post-thumbnails');
});
/* Supported svg files and added header in logo.svg file */
add_filter('upload_mimes', function ($mimes){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
});
/*Supported fake SMTP Server for development */
function mailtrap($phpmailer) {
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = 'f4df3e1d80e5cc';
    $phpmailer->Password = 'fade7826c782d2';
  }
  
  add_action('phpmailer_init', 'mailtrap');