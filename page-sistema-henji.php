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

get_header('sistema-henji'); ?>
	<div class="banner-formulario">
		<div class="container">
			<div class="col-md-6">
				<h2>SISTEMA HENJI</h2>
				<h3>Sistema de Gestão para Locadoras de Veículos</h3><br>
				<p>
					O Sistema de Gestão de Locadoras de Veículos Henji, coloca sua empresa em suas mãos quando e aonde você estiver. <br><br>
					É um sistema de gestão completo que vai atender todas as necessidades da sua empresa, seja ela de pequeno, médio ou grande porte. <br><br>
					O sistema Henji tem diferentes níveis de controle e acesso, além de poder ser acessado de qualquer lugar, basta ter uma conexão com internet.
				</p>				
			</div>	
	
		</div>
	</div>	
</header><!--#header-->
<div id="content">
	<div class="secao-a">
		<div class="container">
			<div class="row">
				<h2>Sistema Henji</h2>
				<h4>Sistema de Gestão para Locadoras de Veículos</h4><br/>
				<img width="100%" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/separador-topo.jpg"; ?>"/>
			</div>
		</div>
	</div>

	<div class="secao-b">
		<div class="container sistema-henji">
			<div class="row">
				<h4><strong>Descrição dos módulos que compõe o sistema</strong></h4>
			</div>
			<div class="row">
				<div class="col-md-2 text-right">
					<img class="botaoa closed e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/plus.png"; ?>"/>
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sistema-henji1.png"; ?>"/>
				</div>
				<div class="col-md-10">
					<h5><strong>Central de Reservas</strong></h5>
					<p>Tenha seu próprio site com sua central de Reservas online.</p>
				</div>
			</div>
			<div class="row tabelaa" style="display:none">
				<div class="col-md-5 col-md-offset-1">
					<ul>
						<li>Reservas de veículos através da internet.</li>
						<li>Disponibilidade de locais diferentes de entrega e retorno.</li>
						<li>Integrado com o sistema operacional da locadora.</li>
						<li>Confirmação de reservas via e-mail.</li>
					</ul>					
				</div>
				<div class="col-md-5">
					<ul>
						<li>Cadastro de pontos de atendimentos.</li>
						<li>Imagens de veículos por categoria.</li>
						<li>Tarifas, taxas e adicionais.</li>
						<li>Atualização em tempo real com a locadora.</li>
					</ul>					
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 text-right">
					<img class="botaob closed e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/plus.png"; ?>"/>
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sistema-henji2.png"; ?>"/>
				</div>
				<div class="col-md-10">
					<h5><strong>Módulo Frota</strong></h5>
					<p>Controle de toda a Frota de Veículos, documentação, multas e SAC.</p>
				</div>
			</div>
			<div class="row tabelab" style="display:none">
				<div class="col-md-5 col-md-offset-1">
					<ul>
						<li>Loja, filiais, franquias e redes,</li>
						<li>SAC - sitemas de atendimento ao cliente da locadora,</li>
						<li>Cadastro de veículos,</li>
						<li>Assistência 24 horas,</li>
						<li>Imagens,</li>
						<li>IPVA,</li>
						<li>Consultas de lacalização de veículos,</li>
						<li>Licenciamento e documentação,</li>
						<li>Fabricantes,</li>	
						<li>Seguro obrigatório,</li>
						<li>Formas de aquisição,</li>	
						<li>Inspeção veicular para SP,</li>
						<li>Grupos e categorias de veículos,</li> 		
						<li>Termos de declaração,</li>
						<li>Modelos,</li>	
					</ul>				
				</div>
				<div class="col-md-5">
					<ul>
						<li>Controle de vistoria de veículos,</li>
						<li>Valor de mercado,</li>	 		
						<li>Posição de frota em tempo real,</li>
						<li>Valor atualizado de frota,</li>	 		
						<li>Sumário de utilização da frota,</li>
						<li>Ajuste de hodômetro,</li>	 		
						<li>Idade média,</li>
						<li>Multas e notificações,</li>	 		
						<li>Controle de kilometragem,</li>
						<li>Pontuações,</li>	 		
						<li>Momento de venda para renovação da frota,</li>
						<li>Controle de veículos sublocados e empresas proprietárias,</li>
						<li>Utilização mensal da frota,</li>
						<li>Compra de veículos sublocados.</li>
					</ul>				
				</div>
			</div>

			<div class="row">
				<div class="col-md-2 text-right">
					<img class="botaoc closed e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/plus.png"; ?>"/>
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sistema-henji3.png"; ?>"/>
				</div>
				<div class="col-md-10">
					<h5><strong>Módulo Operacional</strong></h5>
					<p>Gestão completa da Locadora, com controle total das funcionalidade</p>
				</div>
			</div>
			<div class="row tabelac" style="display:none">
				<div class="col-md-5 col-md-offset-1">
					<ul>
						<li>Controle total de clientes</li>
						<li>Totalmente integrado automaticamente com o sitema financeiro </li>	 	 	 
						<li>Imagens de documentação do cliente</li>	 		
						<li>Tarifas por grupos / categorias de veículos</li>
						<li>Ficha financeira do cliente no ato da abertura do contrato para análise de crédito</li>	 		
						<li>Comissões para promotores e colaboradores externos</li>
						<li>Lista de alerta (lista negra) integrada</li>	 
						<li>Controle de motoristas locadora com dias trabalhados e horas extras</li>
						<li>Programa fidelidade do cliente para futuras promoções</li>
						<li>Motorista adicional do cliente</li>
						<li>Ranking de clientes	 </li>		
						<li>Metas de faturamento</li>
						<li>Contratos mensais</li>	 		
						<li>Substituições de veículos em contrato</li>
						<li>Contratos diários - Rent a Car	 </li>		
						<li>Controle de veículos provisórios em contrato - Alerta de troca</li>
						<li>Terceirização de frota 'pacotes'	</li> 		
						<li>Tráfego - uso interno e km improdutiva</li>
						<li>Contratos exclusivos para seguradoras ou convênios</li>	 	
						<li>Controle de pequenas manutenções de veículos em contrato sem efetuar substituição</li>
						<li>Contratos para transfers (vans e ônibus) com agendamento de tarefas (intinerários)</li>	 		
						<li>Controle de reservas efetivas e sob previsão</li>
						<li>Personalização de contratos</li>
						<li>Gerador de relatórios com definições de campos e parâmetros de emissão</li>
						<li>Check list dos veículos, acessórios e opcionais	</li> 		
						<li>Relatórios gerenciais da frota</li>
						<li>Cláusulas contratuais	 </li>		
						<li>Faturamento x terceirizações</li>
						<li>Adendo contratual	 </li>	
						<li>Termos de responsabilidades para reembolso de multas e avarias</li>
						<li>Pro-rata	</li>
					</ul>				
				</div>
				<div class="col-md-5">
					<ul>
						<li>Controle de compensação de franquia de km para clientes com vários veículos locados</li>
						<li>Renovação automática de contratos	 	</li>	
						<li>Controle de numeração de contratos</li>
						<li>Reajuste de contratos através de índices pré estabelecidos	Gráficos</li>
						<li>Taxas de serviços, entrega e devolução	 </li>		
						<li>Demonstrativos financeiros de contratos para faturamento</li>
						<li>Formas de recebimentos - cash, cartão de crédito, faturados, etc	</li> 		
						<li>Projeção de recebimentos</li>
						<li>Controle de pré autorizações de cartões de crédito	 </li>	
						<li>Daliy Report</li>
						<li>Cadastro de proteções em contratos	 </li>		
						<li>Movimento diário da locadora para acompanhamento operacional x financeiro</li>
						<li>Lavagem	 		</li>
						<li>Over due</li>
						<li>GPS	 		</li>
						<li>Relatório diário de operações</li>
						<li>Despesas adicionais de contrato	 	</li>	
						<li>Clientes x contratos</li>
						<li>Reembolso de avarias em contrato	</li> 		
						<li>Clientes em potencial a serem trabalhados pelo comercial</li>
						<li>Contratos para terceirização com centros de custos e controle de usuários	</li> 		
						<li>Proposta comercial - acompanhamento por etapas pré definidas</li>
						<li>Controle de combustíveis em contrato	</li> 		
						<li>Previsões de locações pelo comercial</li>
						<li>Controle de abastecimentos	 </li>		
						<li>Relação e envio de e-mail para aniversariantes</li>
						<li>Autorização de abastecimentos e serviços em postos	</li> 	
						<li>Comercial - análise de origem do cliente na locadora</li>
						<li>Cadastramento de postos e serviços	 	</li>	
						<li>Análise comercial do ramo de atividade dos clientes para futuras ações</li>
						<li>Clientes inativos para ação comercial	 </li>	 
					</ul>			
				</div>
			</div>

			<div class="row">
				<div class="col-md-2 text-right">
					<img class="botaod closed e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/plus.png"; ?>"/>
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sistema-henji4.png"; ?>"/>
				</div>
				<div class="col-md-10">
					<h5><strong>Módulo Manutenção</strong></h5>
					<p>Gerenciamento das manutenções preventivas e corretivas.</p>
				</div>
			</div>
			<div class="row tabelad" style="display:none">
				<div class="col-md-5 col-md-offset-1">
					<ul>
						<li>Controle de manutenções corretivas e preventivas</li>
						<li>Ultimas compras, análise de fornecedores e veículos</li>
						<li>Plano de revisões</li>	 		
						<li>Abertura, fechamento e emissão de ordens de serviços</li>
						<li>Serviços executados nas revisões</li>	 		
						<li>Consulta automática a serviços preventivos</li>
						<li>Grupo de serviços</li>	 		
						<li>Controle de os x notas emitidas</li>
						<li>Subgrupo de serviços</li>	 		
						<li>Faturamento x manutenções</li>
						<li>Itens e serviços</li>	 		
						<li>Análise por cliente de faturamento x despesas</li>
						<li>Definições de serviços a serem executados nas revisões	</li> 	
						<li>Evolução dos custos do km rodado</li>
					</ul>				
				</div>
				<div class="col-md-5">
					<ul>
						<li>Digitação de km para medições</li>	 		
						<li>Histórico detalhado de manutenção dos veículos</li>
						<li>Fornecedores</li>	 		
						<li>Resumos de manutenção por modelo e grupos de serviços</li>
						<li>Cadastro, análise e aprovação de cotações</li>	 		
						<li>Manutenção reembolsável</li>
						<li>Cadastro de compras	</li> 		
						<li>Cronograma de revisões futuras</li>
						<li>Ordens de compra integrado com a cotação</li>	 		
						<li>Snistros</li>
						<li>Controle de estoque - movimentação de itens	</li> 		
						<li>Imagens de avarias e sinistros</li>
						<li>Apropriação de itens de estoque para cada veículo</li>
					</ul>				
				</div>
			</div>

			<div class="row">
				<div class="col-md-2 text-right">
					<img class="botaoe closed e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/plus.png"; ?>"/>
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sistema-henji5.png"; ?>"/>
				</div>
				<div class="col-md-10">
					<h5><strong>Módulo Financeiro</strong></h5>
					<p>Controle da movimentação financeira, contas a pagar e faturamento.</p>
				</div>
			</div>
			<div class="row tabelae" style="display:none">
				<div class="col-md-5 col-md-offset-1">
					<ul>
						<li>Faturamento integrado com contratos emitidos, cobrança bancaria e notas eletronicas</li>	 		
						<li>Renegociação de saldos de financiamentos</li>
						<li>Controle de títulos bancarios a pagar e a receber</li>	 	
						<li>Faturamento X Contratos de locação</li>
						<li>Variasopções de baixas</li>	 		
						<li>Ficha financeira</li>
						<li>Aprovação de pagamentos parametrizado por permissão de usuário</li>	 		
						<li>Controle de bancos - saldos e extratos</li>
						<li>Calculos para atualizações de multas e juros bancarios</li>	 	
						<li>Cobrança bancária integrada com faturamento - remessa e baixa automática</li>
						<li>Depósito, saques e transferenciais</li>	 		
						<li>Classificação de receitas e despesas através de códigos financeiros</li>
						<li>Conciliação bancaria</li>	 		
						<li>Plano de contas para classificação contábil para exportar dados para qualquer sistema contabil</li>
						<li>Controle de depósitos não identificados</li>	 		
						<li>Centros de custos</li>
						<li>Movimentação bancaria</li>	 		
						<li>Balancete gerencial</li>
						<li>Históricos de movimentação de títulos a pagar e a receber	</li>
						<li>Mala direita - Via etiquetas e e-mail</li>
						<li>Cópia de cheques emitidos</li>	 		
						<li>Controle de recebimentos através de cartões de créditos</li>
						<li>Gráficos</li>
					</ul>				
				</div>
				<div class="col-md-5">
					<ul>
						<li>Emissão de notas ficais personalizadas	 		
						<li>Tipos de formas de recebimentos e pagamentos flexíveis - A própria locadora cria da forma mais conveniente</li>
						<li>Customização da nota fiscal eletrônica conforme prefeitura	</li>
						<li>Controle de venda de veículos da locadora</li>
						<li>Nota de débito normal e digital - possibilidade de envio via e-mail	 </li>		
						<li>Emissão de contratos de consignação de vendas de veículos</li>
						<li>Controle diferenciado entre notas fiscais e notas de débito	 </li>		
						<li>Emissão de nota fiscal ou recibo para venda do veículo</li>
						<li>Cotrole de cancelamento de notas</li>	 		
						<li>Despesas administrativas</li>
						<li>Notas para emissão de reembolso de multas e avarias</li>	 	
						<li>Fluxo de caixa analítico e sintético</li>
						<li>Nota promissoria e recebimentos personalizados</li>	 		
						<li>Gestão empresarial - Cash Flow</li>
						<li>Parcelamento de títulos	 </li>		
						<li>Apuração de lucro não operacional</li>
						<li>Controle financeiro da aquisição de veículos - CDC e Leasing	 	</li>	
						<li>Relatórios financeiros</li>
						<li>Substituição de garantia</li>	 		
						<li>Movimento operacional e financeiro anual</li>
						<li>Reajuste de parcelas de aquisição de veículos</li>	 		
						<li>Resumo anual</li>
						<li>Verificação de quitação de veículos	</li> 
					</ul>				
				</div>
			</div>

			<div class="row text-center">
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
				<div class="col-md-3 solucoes-padding col-md-offset-2 ">
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
