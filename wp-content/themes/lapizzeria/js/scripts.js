$ = jQuery.noConflict();

$(document).ready(function() {
    // Ocultar y mostrar el menú
    $('.mobile-menu a').on('click', function() {
        $('nav.menu-sitio').toggle('slow');
    });

    // Reaccionar al resize en la pantalla
    var breakpoint = 768;
    $(window).resize(function() {
        ajustarCajas();

        if ($(document).width() >= breakpoint) {
            $('nav.menu-sitio').show();
        } else {
            $('nav.menu-sitio').hide();
        }
    });

    ajustarCajas();
});

// Ajustar cajas según tamaño de imagen
function ajustarCajas() {
    var imagenes = $('.imagen-caja');

    if (imagenes.length > 0) {
        var altura = imagenes[0].height;
        var cajas = $('div.contenido-caja');

        $(cajas).each(function(i, elemento) {
            $(elemento).css({ 'height': altura + 'px' });
        });
    }
}