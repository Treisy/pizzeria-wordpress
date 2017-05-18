<?php get_header(); ?>

    <?php while(have_posts()): the_post(); ?>

        <div class="hero">
            <div class="contenido-hero">
                <div class="texto-hero">
                    <?php the_title('<h1>', '</h1>'); ?>
                </div>
            </div>
        </div>
        <!--<?php the_post_thumbnail(); ?>-->

        <div class="principal contenedor">
            <main class="texto-centrado contenido-paginas">
                <?php the_content(); ?>
            </main>
        </div>
    <?php endwhile; ?>

<?php get_footer(); ?>