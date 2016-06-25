<?php 
/** Sección de texto. Estilo PRIMAL
------------------------------------------------------------------- */ 
?>

<!-- PrimalBloques -->
<section class="PrimalText">
	<!-- Contenedor -->
	<div class="PrimalText-contenido u-contenedor">
		<span class="rombo-gris"></span>	
		<p><?php the_field('textoPlecaAzul', 'option'); ?></p>
		<span class="rombo-negro"></span>
	</div>
</section>

<!-- PrimalBloques -->
<section class="PrimalText PrimalText-clone">
	<!-- Contenedor -->
	<div class="u-contenedor">	
		<h2><?php the_field('tituloBloquePortada', 'option'); ?></h2>
		<div><?php the_field('textoBloquePortada', 'option'); ?></div>
	</div>
</section>