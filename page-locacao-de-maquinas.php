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

get_header('locacao-de-maquinas'); ?>
	<div class="banner-formulario">
		<div class="container">
			<div class="col-md-6">
				<h2>SISTEMA LOCMAQ</h2>
				<h3>Sistema de Gestão para locadoras de máquinas</h3><br>
				<p>
					O Sistema de Locação de Máquinas da Henji, coloca sua empresa em suas mãos quando e aonde você estiver. <br><br>
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
				<h2>Sistema LocMaq</h2>
				<h4>Sistema de Gestão para Locadoras de Máquinas.</h4><br/>
				<img width="100%" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/separador-topo.jpg"; ?>"/>
			</div>
		</div>
	</div>

	<div class="secao-b">
		<div class="container">
			<div class="row">
				<br><h4><strong>Funcionalidades do sistema LocMaq</strong></h4><br>
			</div>
			<div class="row">
				<ul class="col-md-6 text-left">
					<li style="margin-bottom:10px">Cadastramento das características das máquinas/equipamentos (retroescavadeiras, misturador de contreto, parafusadeiras),</p>
					<li style="margin-bottom:10px">Controle sobre aquisição das máquinas/equipoamentos via Contratos de Financiamento (parcelas pagas, a pagar e saldo devedor por contrato),</p>
					<li style="margin-bottom:10px">Controle da área financeira da Empresa através do Contas a Pagar (fornecedores),</p>
					<li style="margin-bottom:10px">Controle da área financeira da Empresa através do Contas a receber (clientes),</p>
					<li style="margin-bottom:10px">Controle da Emissão de Notas de Faturamento com layout próprio ou definido pelo cliente,</p>
					<li style="margin-bottom:10px">Emissão de Boletos Bancários pelo próprio sistema,</p>
					<li style="margin-bottom:10px">Cadastros para Clientes e Fornecedores,</p>
					<li style="margin-bottom:10px">Controles sobre a Locação das máquinas/equipamentos a curto ou longo prazo (contratos origem, diários ou mensais),</p>
					<li style="margin-bottom:10px">Controle sobre as manutenções realizadas (histórico),</p>
				</ul>
				<ul class="col-md-6 text-left">
					<li style="margin-bottom:10px">Controle sobre toda movimentação das máquinas/equipamentos (interna ou externa),</p>			
					<li style="margin-bottom:10px">Controle sobre toda movimentação financeira da empresa (entradas e saídas de receita),</p>
					<li style="margin-bottom:10px">Controle sobre a manutenção das máquinas/equipamentos (via ordem de serviço),</p>
					<li style="margin-bottom:10px">Controle sobre o desempenho das máquinas/equipamentos e clientes (comparativo entre receita e as despesas de ambos individualmente ou geral),</p>
					<li style="margin-bottom:10px">Possibilidade de efetuar reservas de máquinas/equipamentos,</p>
					<li style="margin-bottom:10px">Controle da utilização das máquinas/equipamentos pela própria locadora,</p>
					<li style="margin-bottom:10px">Controle sobre as máquinas/equipamentos de terceiros,</p>
					<li style="margin-bottom:10px">Relatórios específicos por categoria diários ou acumulativos (Frota, Manutenção, Operacional e financeiros).</p>
				</ul>
			</div><br>
			<div class="row">
				<a href="<?php echo esc_url( home_url( '/' ))."/solicite-uma-senha/"; ?>"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solicite-senha.png"; ?>"/></a>
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
						<div style="background-color:#9e151a; height:8px; width:100%; margin-top:20px"></div>
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
						<a href="<?php echo esc_url( home_url( '/' ))."/criacao-de-site/"; ?>"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/saiba-mais.jpg"; ?>"/></a>
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
