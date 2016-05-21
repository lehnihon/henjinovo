f<?php
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

get_header('parceiros'); ?>
</header><!--#header-->
<div id="content">
	<div class="secao-a">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<h2>Parceiros</h2>
				<h4>Construímos ao longo de mais de 20 anos uma sólida rede de parcerias, que fortalece ainda mais nossos produtos.<br> A Henji e seus parceiros estão focados em um objetivo: o sucesso dos clientes.</h4><br/>
				<img width="100%" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/separador-topo.jpg"; ?>"/>
				</div>
			</div>
		</div>
	</div>

	<div class="secao-b">
		<div class="container">
			<div class="row parceiros-pag">
				<div class="col-md-3">
					<a target="_blank" href="http://www.clickseminovos.com.br"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/parceiro2.jpg"; ?>"/></a>					
				</div>
				<div class="col-md-3">
					<a target="_blank" href="http://www.yacp.com.br"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/parceiro3.jpg"; ?>"/></a>					
				</div>
				<div class="col-md-3">
					<a target="_blank" href="http://www.weblocadoras.com.br/portal/view/index.php"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/parceiro4.jpg"; ?>"/></a>					
				</div>
				<div class="col-md-3">
					<a target="_blank" href="http://www.segurototal.com.br/view/index.php"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/parceiro5.jpg"; ?>"/></a>					
				</div>
			</div>
		</div>
	</div>
	<div class="secao-a">
		<div class="container">
		</div>
	</div>
	<?php get_template_part( 'newsletter' ); ?>
	<div class="secao-a">
		<div class="container">
		</div>
	</div>	

<?php get_footer(); ?>
