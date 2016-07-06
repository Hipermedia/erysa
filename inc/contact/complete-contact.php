
<section class="contacto">

    <h2 class="contenido-contactoTitulo">Contacto</h2>

    <article class="contenido-contacto u-contenedor">
        <!-- Datos de contacto -->  
        <div class="formulario">
            <h2 class="escribenos">
                Escríbenos, un ejecutivo se pondrá en contacto
            </h2>
            <?php echo do_shortcode('[contact-form-7 id="73" title="Default CF"]'); ?>
        </div><!-- .entry-content -->  

        <div class="datos">
            <h2>ERYSA</h2>
            <h3>Energías Renovables y Saneamiento Ambiental</h3>
            <p><?php the_field('direccionContacto', 'option'); ?></p>
            <p><?php the_field('movilContacto', 'option'); ?></p>
            <p><?php the_field('telefonoContacto', 'option'); ?></p>
            <p><?php the_field('correoContacto', 'option'); ?></p>
        </div>

    </article><!-- .default-page ?> -->
</section>