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

	<div class="tmp-block"></div>

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