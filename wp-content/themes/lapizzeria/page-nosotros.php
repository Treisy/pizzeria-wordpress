<?php get_header(); ?>

    <?php while(have_posts()): the_post(); ?>

        <div class="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)">
            <div class="contenido-hero">
                <div class="texto-hero">
                    <?php the_title('<h1>', '</h1>'); ?>
                </div>
            </div>
        </div>

        <div class="principal contenedor">
            <main class="texto-centrado contenido-paginas">
                <?php the_content(); ?>
            </main>
        </div>

        <div class="informacion-cajas contenedor clear">
            <div class="caja">
                <?php 
                    $id_imagen = get_field('imagen_1');
                    $imagen = wp_get_attachment_image_src($id_imagen, 'nosotros');
                ?>

                <img src="<?php echo $imagen[0] ?>" class="imagen-caja">

                <div class="contenido-caja">
                    <?php the_field('descripcion_1'); ?>
                </div>
            </div>
            <div class="caja">
                <div class="contenido-caja">
                    <?php the_field('descripcion_2'); ?>
                </div>

                <?php 
                    $id_imagen = get_field('imagen_2');
                    $imagen = wp_get_attachment_image_src($id_imagen, 'nosotros');
                ?>

                <img src="<?php echo $imagen[0] ?>" class="imagen-caja">

            </div>
            <div class="caja">
                <?php 
                    $id_imagen = get_field('imagen_3');
                    $imagen = wp_get_attachment_image_src($id_imagen, 'nosotros');
                ?>

                <img src="<?php echo $imagen[0] ?>" class="imagen-caja">

                <div class="contenido-caja">
                    <?php the_field('descripcion_3'); ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>

<?php get_footer(); ?>