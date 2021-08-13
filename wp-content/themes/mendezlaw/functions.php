<?php

function theme_styles()
{
	wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css');
	wp_enqueue_style('bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
	wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'theme_styles');


function theme_js()
{

	global $wp_scripts;
	wp_register_script('html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '', false);
	wp_register_script('respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false);
	$wp_scripts->add_data('html5_shiv', 'conditional', 'lt IE 9');
	$wp_scripts->add_data('respond_js', 'conditional', 'lt IE 9');
	$wp_scripts->add_data('recaptcha', 'conditional', 'lt IE 9');

	wp_enqueue_script('bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquery'), '4.4.1', true);
	wp_enqueue_script('recaptcha', 'https://www.google.com/recaptcha/api.js', array(), '3.0.0', true);
	wp_enqueue_script('theme_js', get_template_directory_uri() . '/js/theme.js', array('bootstrap_js'), '', true);
}

add_action('wp_enqueue_scripts', 'theme_js');
add_theme_support('menus');
add_theme_support('post-thumbnails');
