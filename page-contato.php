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

get_header('contato'); ?>
</header><!--#header-->
<div id="content">
	<div class="secao-a">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Contato</h2>
					<h4>Fale com a Henji.<br> Temos a solução perfeita para sua locadora de veículos.</h4><br/>
					<img width="100%" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/separador-topo.jpg"; ?>"/>
				</div>
			</div>
		</div>
	</div>

	<div class="secao-b">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-left">
					<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 6 ); } ?>
				</div> 
				<div class="col-md-6 text-left">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.4082674008687!2d-46.542949500000134!3d-23.6970110034906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce423ad6ecf095%3A0xc7729dbdc8ce38e5!2sR.+Am%C3%A9rico+Batista%2C+12+-+Baeta+Neves%2C+S%C3%A3o+Bernardo+do+Campo+-+SP%2C+09760-330!5e0!3m2!1spt-BR!2sbr!4v1439860833908" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					<br><br>
					<p>
						<strong>Endereço</strong><br/>
						Rua Américo Batista, 12 - Baeta Neves<br/>
						São Bernardo do Campo - SP
					</p>
					<p>
						<strong>Telefones</strong><br/>
						11 4332-1944<br/>
						11 4332-9871 <br>
						11 4337-8404
					</p>
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
