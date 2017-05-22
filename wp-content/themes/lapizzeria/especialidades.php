
<?php
    /*
    * Template Name: Espcialidades
    */
?>

<?php get_header(); ?>

    <?php while(have_posts()): the_post(); ?>

        <?php 
            $imagen = get_the_post_thumbnail_url();

        ?>

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
    <?php endwhile; ?>

    <div class="nuestras-especialidades contenedor">
        <h3 class="texto-rojo">Pizzas</h3>
        <div class="contenedor-grid">
            <?php 
                $args = array(
                    'post_type' => 'especialidades',
                    'posts_per_page' => -1,
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'category_name' => 'pizzas' 
                );
                $pizzas = new WP_Query( $args );
                while($pizzas->have_posts()): $pizzas->the_post();
            ?>

            <div class="columnas2-4">
                <?php the_post_thumbnail('espcialidades'); ?>

                <div class="texto-especialidad">
                    <h4><?php the_title() ?>
                        <span>$<?php the_field('precio'); ?></span>
                    </h4>
                    <?php the_content(); ?>
                </div>
            </div>

            <?php endwhile; wp_reset_postdata();?>
        </div>


        <h3 class="texto-rojo">Otros</h3>
        <div class="contenedor-grid">
            <?php 
                $args = array(
                    'post_type' => 'especialidades',
                    'posts_per_page' => -1,
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'category_name' => 'otros' 
                );
                $otros = new WP_Query( $args );
                while($otros->have_posts()): $otros->the_post();
            ?>

            <div class="columnas2-4">
                <?php the_post_thumbnail('espcialidades'); ?>

                <div class="texto-especialidad">
                    <h4><?php the_title() ?>
                        <span>$<?php the_field('precio'); ?></span>
                    </h4>
                    <?php the_content(); ?>
                </div>
            </div>

            <?php endwhile; wp_reset_postdata();?>
        </div>
    </div>

<?php get_footer(); ?>