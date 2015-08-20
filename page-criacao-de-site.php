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

get_header('criacao-de-site'); ?>
	<div class="banner-formulario">
		<div class="container">
			<div class="col-md-6">
				<h2>CRIAÇÃO DE SITES</h2>
				<h3>Tenha um site profissional para sua empresa</h3><br>
				<p>
					Estamos inovando mais uma vez, oferecendo o serviço de criação de sites para locadoras de veículos. <br><br>
					O serviço de criação de sites, com o objetivo de auxiliar sua locadora de veículos a aumentar as vendas. Um site profissional e bem desenvolvido vai atrair cada vez mais clientes para a sua locadora <br><br>
					Se você ainda não possui um site, está deixando de participar de um universo com mais de 105 milhões de pessoas só aqui no Brasil.
				</p>				
			</div>	
	
		</div>
	</div>	
</header><!--#header-->
<div id="content">
	<div class="secao-a">
		<div class="container">
			<div class="row">
				<h2>Planos e Valores</h2>
				<h4>
					Confira nosso planos e escolha qual modelo vai atender melhor as suas necessidades<br/>
					Dê o primeiro passo para colocar sua locadora na internet e sair na frente da concorrência.
				</h4>
				<img width="100%" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/separador-topo.jpg"; ?>"/>
			</div>
		</div>
	</div>

	<div class="secao-b planos-henji">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-offset-1">
					<ul class="planos">
						<li class="head">
							<h3>Modelo Premium</h3>
							<p>
								Com o sistema Henji integrado, seu site será uma locadora online. Venda pela internet.
							</p>
						</li>
						<li>Você escolhe o modelo de layout</li>
						<li>Seu site integrado ao Sistema Henji</li>
						<li>Integração ao Google Maps</li>
						<li>Integrado com suas redes sociais</li>
						<li>Personalização de cores</li>
					</ul>
				</div>
				<div class="col-md-5">
					<ul class="planos">
						<li class="head">
							<h3>Modelo Básico</h3>
							<p>
								Dê o primeiro passo para sua locadora de veículos ser encontrado na internet.
							</p>
						</li>
						<li>Você escolhe o modelo de layout</li>
						<li>Integração ao Google Maps</li>
						<li>Integrado com suas redes sociais</li>
						<li>Personalização de cores</li>
					</ul>
				</div>
			</div><br>
			<div class="row">
				<a href="<?php echo esc_url( home_url( '/' ))."/contrate/"; ?>"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/contrate-agora.png"; ?>"/></a>
			</div>
		</div>
	</div>
	<div class="secao-a solucoes-locadoras">
		<div class="container">
			<div class="row">
				<h2>Soluções para sua locadora de veículos.</h2>
				<h4>Confira as soluções completas que a Henji oferece para sua locadora de veículos.</h4><br/>
				<img width="100%" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/separador-topo.jpg"; ?>"/><br/><br/>
			</div>
			<div class="row">
				<div class="col-md-3 col-md-offset-2 solucoes-padding">
					<div class="solucoes-quadro">
						<div class="quadro-cima">
							<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes1.jpg"; ?>"/>
							<p>
								<strong>SISTEMA HENJI</strong><br/><br/>
								O Sistema de Gestão de Locadoras de Veículos Henji, coloca sua empresa em suas mãos e aonde você estiver.
							</p>
						</div>
						<div class="quadro-baixo">
							<p><strong>LOCAÇÃO DE VEÍCULOS</strong></p>
							<p>Central de Reservas</p>
							<p>Módulo de Frotas</p>
							<p>Módulo Operacional</p>
							<p>Módulo Manutenção</p>
							<p>Módulo Financeiro</p>			
						</div>
						<a href="<?php echo esc_url( home_url( '/' ))."/sistema-henji/"; ?>"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/saiba-mais.jpg"; ?>"/></a>	
					</div>				
				</div>
				<div class="col-md-3 solucoes-padding">
					<div class="solucoes-quadro">
						<div class="quadro-cima">
							<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes2.jpg"; ?>"/>
							<p>
								<strong>MÓDULO GMD</strong><br/><br/>
								Realize cotações, aberturas de Ordens de Serviços através de seus prestadores de serviços.
							</p>
						</div>
						<div class="quadro-baixo">
							<p><strong>MÓDULOS</strong></p>
							<p>Análise online</p>
							<p>Módulo manutenção integrado</p>
							<p>Criação de rede credenciada</p>
							<p>Histórico de manutenções</p>
							<p>Fique próximo do seu cliente</p>							
						</div>
						<a href="<?php echo esc_url( home_url( '/' ))."/gmd/"; ?>"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/saiba-mais.jpg"; ?>"/></a>
					</div>	
				</div>
				<div class="col-md-3 solucoes-padding">
					<div class="solucoes-quadro">
						<div class="quadro-cima">
							<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes3.jpg"; ?>"/>
							<p>
								<strong>LOCAÇÃO DE MÁQUINAS</strong><br/><br/>
								O Sistema de Gestão de Locadoras de Veículos Henji, coloca sua empresa em suas mãos e aonde você estiver.
							</p>
						</div>
						<div class="quadro-baixo">
							<p><strong>LOCAÇÃO DE MÁQUINAS</strong></p>
							<p>Você escolhe o layout</p>
							<p>Site integrado ao Sistema Henji</p>
							<p>Integração com o Google Maps</p>
							<p>Integrado com suas redes sociais</p>
							<p>Personalização de cores</p>					
						</div>
						<a href="<?php echo esc_url( home_url( '/' ))."/locacao-de-maquinas/"; ?>"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/saiba-mais.jpg"; ?>"/></a>	
					</div>					
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
