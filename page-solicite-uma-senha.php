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

get_header('solicite-uma-senha'); ?>
	<div class="banner-formulario">
		<div class="container">
			<div class="col-md-5 responsivo-solicite" style="padding-top:40px">
				<h2>Solicite uma senha temporária e confira o que o sistema da Henji pode oferecer para sua locadora de veículos.</h2><br>
				<p style="line-height:2">
					Perfeito para sua empresa, <br>
					Multi Versões, <br>
					Integração total, <br>
					Segurança.
				</p>				
			</div>	
			<div class="col-md-4 col-md-offset-2 form-solicite-uma-senha">
				<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 8 ); } ?>
			</div>		
		</div>
	</div>	
</header><!--#header-->
<div id="content">
	<div class="secao-a">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<h2>Por que escolher o sistema da Henji?</h2>
				<h4>É um completo sistema de gestão de locadoras de veículos.</h4><br/>
				<img width="100%" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/separador-topo.jpg"; ?>"/>
				</div>
			</div>
		</div>
	</div>

	<div class="secao-b">
		<div class="container">
			<div class="row row-spacing">
				<div class="col-md-4">
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vantagens1.png"; ?>"/>
					<h3>Perfeito para a sua empresa</h3>
					<p>Atende todos os nichos de locação de veículos, seja terceirização de frota, rent a car, pacotes, semanal etc.</p>
				</div>
				<div class="col-md-4">
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vantagens2.png"; ?>"/>
					<h3>Possibilidade de customizações</h3>
					<p>O sistema pode ser configurado de acordo com o perfil da sua locadora, diferente do "pacote fechado" da concorrência.</p>				
				</div>
				<div class="col-md-4">
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vantagens3.png"; ?>"/>
					<h3>Treinamento</h3>
					<p>Treinamento online, presencial com visitas de nossos consultores ou em nosso próprio Centro de Treinamento.</p>				
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vantagens4.png"; ?>"/>
					<h3>Segurança</h3>
					<p>Segurança é uma das principais características do sistema, é possível definir a permissão de cada um dos colaboradores.</p>				
				</div>
				<div class="col-md-4">
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vantagens5.png"; ?>"/>
					<h3>Integração Total</h3>
					<p>É possível integrar com qualquer sistema de terceiros, seja ele contábil, fiscal, agências, análise de crédito etc.</p>
				</div>
				<div class="col-md-4">
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vantagens6.png"; ?>"/>
					<h3>Multi Versões</h3>
					<p>Nosso sistema é o único no mercado com Multi Versões, de acordo com a real necessidade da sua locadora.</p>				
				</div>
			</div>
		</div>
	</div>
	<div class="secao-a">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<h2>Conheça a Henji.</h2>
				<h4>Conheça um pouco mais sobre a Henji.</h4><br/>
				<img width="100%" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/separador-topo.jpg"; ?>"/><br/><br/>
				</div>
			</div>
			<div class="row conheca-henji">
				<div class="col-md-6">
					<h3>A Henji é uma empresa que desenvolve sistemas para a gestão de locadoras de veículos.</h3>
					<p>Prestamos toda assistência no processo de implantação e treinamento do nosso sistema. <br>
						Nossos clientes são acompanhados por profissionais altamente capacitados, com profundos conhecimentos técnicos e gestão do negócio.
					</p>
				</div>
				<div class="col-md-4 col-md-offset-2">
					<ul class="conheca-dados">
						<li>
							<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/icon-seta.png"; ?>"/>
							<strong>Henji</strong> <br>
							Rua Américo Batista, 12 - Baeta Neves<br/>
							São Bernardo do Campo - SP
						</li>
						<li>
							<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/icon-carta.png"; ?>"/>
							<strong>contato@henji.com.br</strong>

						</li>
						<li>
							<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/icon-tel.png"; ?>"/>
							<strong> 4332-8787</strong>						
						</li>
					</ul>
				</div>
			</div><br><br>
		</div>
	</div>
	
<?php get_footer(); ?>
