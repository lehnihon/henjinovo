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

get_header('desconto'); ?>
	
</header><!--#header-->
<div id="content">
	<div class="secao-a">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<h2>Chegou a hora de ser mais competitivo.</h2>
				<h4>Prencha o formulário abaixo e garanta o seu desconto no melhor sistema de gestão para Locadoras de Veículos.</h4><br/>
				<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 12 ); } ?>
				<p>Após o envio do formulário acima, um de nossos especialistas entrará em contato com você!</p>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
