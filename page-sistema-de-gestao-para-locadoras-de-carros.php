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

get_header('gmd'); ?>
	<div class="banner-formulario" style="padding-top:30px">
		<div class="container">
			<div class="col-md-6">
				<h2>MÓDULO GMD</h2>
				<h3>Gerenciamento de Manutenção á Distância</h3><br>
				<p>
					Neste módulo é possível realizar as cotações, negociações e aberturas de Ordens de Serviços pela Internet através da sua própria rede
					 de prestadores de serviços credenciados <br><br>
					O condutor leva o veículo para o prestador de serviço (fornecedor) que acessa a internet e lança todos os serviços e peças necessárias 
					para a revisão, seja ela preventiva ou corretiva. <br><br>
					Em tempo real, a empresa recebe o orçamento e inicia o processo de negociação, avaliando últimos preços pagos, necessidade de troca, prazos,
					 descontos concedidos, poder de negociaão do administrador etc.
					É um sistema de gestão completo que vai atender todas as necessidades da sua empresa, seja ela de pequeno, médio ou grande porte. <br>
				</p>				
			</div>	
	
		</div>
	</div>	
</header><!--#header-->
<div id="content">
	<div class="secao-a">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<h2>Gerenciamento de Manutenção a Distância</h2>
				<h4>Nesse módulo é possível realizar ordens de serviço através da sua própria rede de prestadores de serviços.</h4><br/>
				<img width="100%" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/separador-topo.jpg"; ?>"/>
				</div>
			</div>
		</div>
	</div>

	<div class="secao-b">
		<div class="container">
			<div class="row">
				<ul class="col-md-6 text-left" style="margin-top:20px">
					<li style="margin-bottom:10px">Abertura e análise de orçamentos online, conectado diretamente com seu prestador, sem intermediários, reduzindo custos de manutenção e mão de obra.</li>
					<li style="margin-bottom:10px">tenha um ganho de qualificação profissional de sua rede credenciada e seus funcionários, com acompanhamento de metas estabelecidas e níveis de aprovação.</li>
					<li style="margin-bottom:10px">Integração total com o módulo de manutenção.</li>
					<li style="margin-bottom:10px">Converta comissões pagas em descontos.</li>
				</ul>
				<div class="col-md-6 text-left" style="margin-top:20px">
					<li style="margin-bottom:10px">Criação de rede credenciada para seu cliente.</li>
					<li style="margin-bottom:10px">Análise de serviços executados através de fornecedores por região.</li>
					<li style="margin-bottom:10px">Histórico de manutenções dos veículos.</li>
					<li style="margin-bottom:10px">Análise de orçamentos através de status (aprovados, não aprovados, em andamento etc).</li>
					<li style="margin-bottom:10px">Fique próximo de seu cliente com o auto atendimento</li>
				</div>
			</div>
			<div class="row">
				<a href="<?php echo esc_url( home_url( '/' ))."solicite-uma-senha/"; ?>"><img class="e-claro" style="margin-top:20px" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solicite-senha.png"; ?>"/></a>
			</div>
		</div>
	</div>
	<div class="secao-a solucoes-locadoras">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<h2>Soluções para sua locadora de veículos.</h2>
				<h4>Confira as soluções completas que a Henji oferece para sua locadora de veículos.</h4><br/>
				<img width="100%" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/separador-topo.jpg"; ?>"/><br/><br/>
				</div>
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
						<a href="<?php echo esc_url( home_url( '/' ))."sistema-de-gestao-para-locadoras-de-veiculos/"; ?>"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/saiba-mais.jpg"; ?>"/></a>	
						<div style="background-color:#9e151a; height:8px; width:100%; margin-top:20px"></div>
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
						<a href="<?php echo esc_url( home_url( '/' ))."locacao-de-maquinas-e-equipamentos/"; ?>"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/saiba-mais.jpg"; ?>"/></a>	
						<div style="background-color:#9e151a; height:8px; width:100%; margin-top:20px"></div>
					</div>					
				</div>
				<div class="col-md-3 solucoes-padding">
					<div class="solucoes-quadro">
						<div class="quadro-cima">
							<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes4.jpg"; ?>"/>
							<p>
								<strong>CRIAÇÃO DE SITES</strong><br/><br/>
								A Henji em parceria está oferecendo o serviço de criação de sites, para auxiliar o aumento das suas vendas.
							</p>
						</div>
						<div class="quadro-baixo">
							<p><strong>PERSONALIZADO</strong></p>
							<p>Você escolhe o layout</p>
							<p>Seu site integrado ao Sistema Henji</p>
							<p>Integração com o Google Maps</p>
							<p>Integrado com suas redes sociais</p>
							<p>Personalização de cores</p>						
						</div>
						<a href="<?php echo esc_url( home_url( '/' ))."criacao-de-site/"; ?>"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/saiba-mais.jpg"; ?>"/></a>
						<div style="background-color:#9e151a; height:8px; width:100%; margin-top:20px"></div>
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
