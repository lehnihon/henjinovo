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
 * @package site
 */

get_header(); ?>
	<?php 
	    echo do_shortcode("[metaslider id=122]"); 
	?>
	<div class="secao-a">
		<div class="container">
		<h2>Por que escolher o sistema da Henji?</h2>
		<h4>É um completo sistema de gestão de locadoras de veículos.</h4>
		<img width="100%" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/separador-topo.jpg"; ?>"/>
	</div>

	<div class="secao-b">
		<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vantagens1.png"; ?>"/>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
