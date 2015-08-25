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
	<div class="banner-formulario">
		<div class="container">
			<?php putRevSlider( "banner-index" ) ?>
		</div>
	</div>	
</header><!--#header-->
<div id="content">
	<div class="secao-a">
		<div class="container">
			<div class="row">
				<h2>Por que escolher o sistema da Henji?</h2>
				<h4>É um completo sistema de gestão de locadoras de veículos.</h4><br/>
				<img width="100%" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/separador-topo.jpg"; ?>"/>
			</div>
		</div>
	</div>

	<div class="secao-b">
		<div class="container">
			<div class="row row-spacing">
				<div class="col-md-4">
					<a href="<?php echo esc_url( home_url( '/' ))."/sistema-henji/"; ?>">
						<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vantagens1.png"; ?>"/>
						<h3>Perfeito para a sua empresa</h3>
						<p>Atende todos os nichos de locação de veículos, seja terceirização de frota, rent a car, pacotes, semanal etc.</p>
					</a>
				</div>
				<div class="col-md-4">
					<a href="<?php echo esc_url( home_url( '/' ))."/sistema-henji/"; ?>">
						<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vantagens2.png"; ?>"/>
						<h3>Possibilidade de customizações</h3>
						<p>O sistema pode ser configurado de acordo com o perfil da sua locadora, diferente do "pacote fechado" da concorrência.</p>				
					</a>
				</div>
				<div class="col-md-4">
					<a href="<?php echo esc_url( home_url( '/' ))."/sistema-henji/"; ?>">
						<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vantagens3.png"; ?>"/>
						<h3>Treinamento</h3>
						<p>Treinamento online, presencial com visitas de nossos consultores ou em nosso próprio Centro de Treinamento.</p>	
					</a>			
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<a href="<?php echo esc_url( home_url( '/' ))."/sistema-henji/"; ?>">
						<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vantagens4.png"; ?>"/>
						<h3>Segurança</h3>
						<p>Segurança é uma das principais características do sistema, é possível definir a permissão de cada um dos colaboradores.</p>	
					</a>			
				</div>
				<div class="col-md-4">
					<a href="<?php echo esc_url( home_url( '/' ))."/sistema-henji/"; ?>">
						<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vantagens5.png"; ?>"/>
						<h3>Integração Total</h3>
						<p>É possível integrar com qualquer sistema de terceiros, seja ele contábil, fiscal, agências, análise de crédito etc.</p>
					</a>
				</div>
				<div class="col-md-4">
					<a href="<?php echo esc_url( home_url( '/' ))."/sistema-henji/"; ?>">
						<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vantagens6.png"; ?>"/>
						<h3>Multi Versões</h3>
						<p>Nosso sistema é o único no mercado com Multi Versões, de acordo com a real necessidade da sua locadora.</p>	
					</a>			
				</div>
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
				<div class="col-md-3 solucoes-padding">
					<div class="solucoes-quadro">
						<div class="quadro-cima">
							<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes1.jpg"; ?>"/>
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
						<div style="background-color:#9e151a; height:8px; width:100%; margin-top:20px"></div>
					</div>					
				</div>
				<div class="col-md-3 solucoes-padding">
					<div class="solucoes-quadro">
						<div class="quadro-cima">
							<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes4.jpg"; ?>"/>
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
	<div class="secao-c">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p class="senha-temp-box">
						<strong>Solicite uma senha temporária e confira o que a Henji pode fazer pela sua locadora</strong><a class="e-cinza" href="<?php echo esc_url( home_url( '/' ))."/solicite-uma-senha/"; ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solicitar-agora.jpg"; ?>"/></a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="secao-a">
		<div class="container">
		</div>
	</div>
	<div class="secao-b sistema-locacao">
		<div class="container">
			<div class="row">
				<h2>Sistema Henji</h2>
				<h4>Conheça os módulos do sistema Henji para a gestão da sua locadora de veículos.</h4><br/>
				<img width="100%" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/separador-cinza.jpg"; ?>"/><br/><br/>				
			</div>
			<div class="row">
				<div class="col-md-2 col-md-offset-1">
					<a href="<?php echo esc_url( home_url( '/' ))."/sistema-henji/"; ?>">
						<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sistema-henji1.png"; ?>"/>
						<h3>Central de Reservas</h3>
						<p>Tenha seu próprio site com sua Central de Reservas online.</p>
					</a>		
				</div>	
				<div class="col-md-2">
					<a href="<?php echo esc_url( home_url( '/' ))."/sistema-henji/"; ?>">
						<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sistema-henji2.png"; ?>"/>
						<h3>Módulo <span class="br-responsivo"><br></span> Frota</h3>
						<p>Controle de toda Frota de Veículos, documentação multas e SAC.</p>
					</a>		
				</div>	
				<div class="col-md-2">
					<a href="<?php echo esc_url( home_url( '/' ))."/sistema-henji/"; ?>">
						<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sistema-henji3.png"; ?>"/>
						<h3>Módulo Operacional</h3>
						<p>Gestão completa de Locadora, com controle total das funcionalidades.</p>
					</a>		
				</div>	
				<div class="col-md-2">
					<a href="<?php echo esc_url( home_url( '/' ))."/sistema-henji/"; ?>">
						<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sistema-henji4.png"; ?>"/>
						<h3>Módulo Manutenção</h3>
						<p>Gerenciamento das manutenções preventivas e corretivas.</p>
					</a>		
				</div>	
				<div class="col-md-2">
					<a href="<?php echo esc_url( home_url( '/' ))."/sistema-henji/"; ?>">
						<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sistema-henji5.png"; ?>"/>
						<h3>Módulo Financeiro</h3>
						<p>Controle da movimentação financeira, contas a pagar e faturamento.</p>	
					</a>	
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
	<div class="secao-b sistema-locacao">
		<div class="container">
			<div class="row">
				<h2>Locação de Máquinas</h2>
				<h4>Conheça algumas das funcionalidades do Sistema LocMaq</h4><br/>
				<img width="100%" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/separador-cinza.jpg"; ?>"/><br/><br/>				
			</div>
			<div class="row">
				<div class="col-md-2 col-md-offset-1">
					<a href="<?php echo esc_url( home_url( '/' ))."/locacao-de-maquinas/"; ?>">
						<img class="e-cinza"  src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/locacao1.png"; ?>"/>
						<h3>Emissão de Notas</h3>
						<p>Controle de Emissão de Notas de Faturamento com layout próprio.</p>	
					</a>	
				</div>	
				<div class="col-md-2">
					<a href="<?php echo esc_url( home_url( '/' ))."/locacao-de-maquinas/"; ?>">
						<img class="e-cinza"  src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/locacao2.png"; ?>"/>
						<h3>Controle por período</h3>
						<p>Controle sobre a locação de máquinas a curtou ou longo prazo</p>	
					</a>	
				</div>	
				<div class="col-md-2">
					<a href="<?php echo esc_url( home_url( '/' ))."/locacao-de-maquinas/"; ?>">
						<img class="e-cinza"  src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/locacao3.png"; ?>"/>
						<h3>Contas <span class="br-responsivo"><br></span> a pagar</h3>
						<p>Controle da área financeira através do Contas a Pagar.</p>	
					</a>	
				</div>	
				<div class="col-md-2">
					<a href="<?php echo esc_url( home_url( '/' ))."/locacao-de-maquinas/"; ?>">
						<img class="e-cinza"  src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/locacao4.png"; ?>"/>
						<h3>Relatórios <span class="br-responsivo"><br></span> Específicos</h3>
						<p>Relatórios específicos por categoria diários ou acumulativos.</p>
					</a>		
				</div>	
				<div class="col-md-2">
					<a href="<?php echo esc_url( home_url( '/' ))."/locacao-de-maquinas/"; ?>">
						<img class="e-cinza"  src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/locacao5.png"; ?>"/>
						<h3>Controle de Máquinas</h3>
						<p>Controle sobre as máquinas e equip. de terceiros.</p>
					</a>		
				</div>	
			</div>
		</div>
	</div>
	<div class="secao-a">
		<div class="container">
			<div class="row">
				<h2>Parceiros</h2>
				<h4>Construímos ao longo de mais de 20 anos uma sólida rede de parcerias, que fortalece ainda mais nossos produtos.</h4><br/>
				<img width="100%" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/separador-topo.jpg"; ?>"/><br/><br/>				
			</div>
			<div class="row">
				<div class="col-md-2 col-md-offset-1">
					<a target="_blank" href="http://www.abla.com.br"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/parceiro1.png"; ?>"/></a>		
				</div>	
				<div class="col-md-2">
					<a target="_blank" href="http://www.clickseminovos.com.br"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/parceiro2.png"; ?>"/></a>		
				</div>	
				<div class="col-md-2">
					<a target="_blank" href="http://www.yacp.com.br"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/parceiro3.png"; ?>"/></a>	
				</div>	
				<div class="col-md-2">
					<a target="_blank" href="http://www.weblocadoras.com.br/portal/view/index.php"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/parceiro4.png"; ?>"/></a>		
				</div>	
				<div class="col-md-2">
					<a target="_blank" href="http://www.segurototal.com.br/view/index.php"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/parceiro5.png"; ?>"/></a>	
				</div>	
			</div><br><br>
		</div>
	</div>
<?php get_footer(); ?>
