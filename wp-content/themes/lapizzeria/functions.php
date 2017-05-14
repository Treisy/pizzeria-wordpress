<?php
// Add styles
function lapizzeria_styles() {
    // Registrar los estillos
    wp_register_style('normalize', get_template_directory_uri(), '/css/normalize.css', array(), '7.0.0');
    wp_register_style('style', get_template_directory_uri(). '/style.css', array('normalize'), '1.0');

    //Llamar a los estilos 
    wp_enqueue_style('normalize');
    wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'lapizzeria_styles');

// Create menus
function lapizzeria_menus() {
    register_nav_menus(array(
        'header-menu' => _('Header Menu', lapizzeria),
        'social-menu' => _('Social Menu', lapizzeria)
    ));
}

add_action('init', lapizzeria_menus);
?>