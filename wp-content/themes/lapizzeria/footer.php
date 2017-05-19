    <footer>
        <?php 
            $args = array(
                'theme_location' => 'header-menu',
                'container' => 'nav',
                'after' => '<span class="separador"> | </span>'    
            );

            wp_nav_menu($args);
        ?>

        <div class="ubicacion">
            <p>8179 Bay Avenue Mountain View, CA 94043</p>
            <p>Teléfono: +1-92-456-7890</p>
        </div>

        <p class="copyright">Todos los derechos reservados <?php echo date('Y'); ?></p>
    </footer>
    
    <?php wp_footer() ?>
</body>
</html>