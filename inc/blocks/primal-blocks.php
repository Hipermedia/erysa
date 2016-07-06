<?php 
/** Bloques de contenido. Estilo PRIMAL
------------------------------------------------------------------- */ 
?>
<!-- PrimalBloques -->
<section class="PrimalBlocks">
	<!-- Contenedor -->
	<div class="PrimalBlocks-contenido">
		<!-- Títulos de la sección -->
		<h2 class="PrimalBlocks-titulo">Servicios</h2>
		<?php 
		$paginaUno = get_field('paginaPortada1', 'option');
		$paginaDos = get_field('paginaPortada2', 'option');
		$paginaTres = get_field('paginaPortada3', 'option');
		$paginaCuatro = get_field('paginaPortada4', 'option');
		$args = array( 'post_type' => 'page', 'post__in' => array( $paginaUno, $paginaDos, $paginaTres, $paginaCuatro ) );
		$the_query = new WP_Query( $args ); 
		?>
		<div class="PrimalBlocks-blocks u-contenedor">
			<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="PrimalBlocks-blocksBlock">
						<h2><?php the_title(); ?></h2>
						<div><?php the_excerpt(); ?></div>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
	</div>
</section>
