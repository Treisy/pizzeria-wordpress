<?php

// Agregar imágenes destacadas
function lapizzeria_setup() {
    add_theme_support('post-thumbnails');

    add_image_size('nosotros', 437, 291, true);
}

add_action('after_setup_theme', 'lapizzeria_setup');

// Agregar estilos
function lapizzeria_styles() {
    // Registrar los estillos
    wp_register_style('normalize', get_template_directory_uri().'/css/normalize.css', array(), '7.0.0');
    wp_register_style('fontawesome', get_template_directory_uri().'/css/font-awesome.min.css', array('normalize'), '4.7.0');
    wp_register_style('google_fonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway', array(), '1.0.0');
    wp_register_style('style', get_template_directory_uri().'/style.css', array('normalize'), '1.0');

    //Llamar a los estilos 
    wp_enqueue_style('normalize');
    wp_enqueue_style('fontawesome');
    wp_enqueue_style('style');

    // Registrar JS

    wp_register_script('scripts', get_template_directory_uri().'/js/scripts.js', array(), '1.0.0', true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('scripts');
}

add_action('wp_enqueue_scripts', 'lapizzeria_styles');

// Crear menús
function lapizzeria_menus() {
    register_nav_menus(array(
        'header-menu' => _('Header Menu', lapizzeria),
        'social-menu' => _('Social Menu', lapizzeria)
    ));
}

add_action('init', lapizzeria_menus);
?>