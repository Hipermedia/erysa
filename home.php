<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage SH_Base
 */

get_header(); ?>

	<div class="tmp-block">
		<div class="u-contenedor">
			<div class="fsbanner" id="demo-3">
			  <div style="background-image:url(https://unsplash.it/789/525?image=885)"><span class="name">Industrial</span></div>
			  <div style="background-image:url(https://unsplash.it/789/525?image=884)"><span class="name">Urbano</span></div>
			  <div style="background-image:url(https://unsplash.it/789/525?image=883)"><span class="name">Residencial</span></div>
			  <div style="background-image:url(https://unsplash.it/789/525?image=882)"><span class="name">Doméstico</span></div>
			</div>
		</div>
	</div>

	<!-- Texto -->
	<?php primalText(); //  Bloques de contenido primordiales ?>

	<?php filmstripSlider(); ?>

	<!-- Bloques -->
	<?php primalBlocks(); //  Bloques de contenido primordiales ?>

	<?php completeContact(); ?>

	<!-- Cover -->
	<?php //primalCover(); // Cover con imágen de fondo, imagen principal y títulos ?>
	
	<?php //primalDocs(); ?>

	<?php //newsSlider(); ?>

	<?php //sauteBlocks();  //  Bloques de contenido salteados ?>

	<?php //videoSlider(); ?>

	<?php //starchiQuote(); ?>

	<?php //cardsTestimony(); ?>

	<?php //textSlider(); ?>
	
	<?php //primalSlider(); ?>

	<?php //primalTabs(); ?>
	
	<!-- Testimonios -->
	<?php //primalTestimony(); //  Bloques de contenido primordiales ?>

	<?php //gallerySlider(); ?>

	<?php //meteoroContact(); ?>
	
	<?php //primalContact(); ?>

	<?php //primalGallery(); ?>

	<?php //primalPricing(); ?>

	<?php //imgridPortfolio(); ?>

	<?php //backgroundVideo(); ?>

	<?php //primalFooter(); ?>

<?php get_footer(); ?>