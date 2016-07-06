<?php 
/** Columnistas destacados
------------------------------------------------------------------- */ 
?>
<!-- columnistas-destacados -->
<section class="FilmstripSlider u-contenedor">

	<h2 class="FilmstripSlider-titulo">Productos</h2>
	<!-- <div class="wrapper"> -->
		<div id="slider-filmstrip" class="flexslider FilmstripSlider-contenido">
		  	<ul class="slides">
		  		<?php
		  		$args = array( 'post_type' => 'cpt_servicios' ); 
		  		// the query
		  		$the_query = new WP_Query( $args ); ?>
		  		<?php if ( $the_query->have_posts() ) : ?>
		  			<!-- pagination here -->
		  			<!-- the loop -->
		  			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		  				<li class="FilmstripSlider-slide">
							<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
		  					<img class="FilmstripSlider-slideImagen" src="<?php echo $url; ?>" alt="">
		  					<h2 class="FilmstripSlider-slideTitulo"><?php the_title(); ?></h2>
		  				</li>
		  			<?php endwhile; ?>
		  			<!-- end of the loop -->
		  			<!-- pagination here -->
		  			<?php wp_reset_postdata(); ?>
		  		<?php else : ?>
		  			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		  		<?php endif; ?>
		  	</ul>
		</div>
	<!-- </div> -->
</section>
