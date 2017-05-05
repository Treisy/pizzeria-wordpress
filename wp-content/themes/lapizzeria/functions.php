<?php

function lapizzeria_styles() {
    // Registrar los estillos
    wp_register_style('normalize', get_template_directory_uri(), '/css/normalize.css', array(), '7.0.0');
    wp_register_style('style', get_template_directory_uri(). '/style.css', array('normalize'), '1.0');

    //Llamar a los estilos 
    wp_enqueue_style('normalize');
    wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'lapizzeria_styles');

?>