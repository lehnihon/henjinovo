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

get_header('sobre'); ?>
</header><!--#header-->
<div id="content">
	<div class="secao-a">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<h2>Sobre</h2>
				
				<img width="100%" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/separador-topo.jpg"; ?>"/>
				</div>
			</div>
		</div>
	</div>

	<div class="secao-b">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<p class="text-left">
						A Henji Informática Ltda. é uma empresa brasileira fundada em 1994 . Desenvolve sistemas para a administração de empresas que atuam no segmento de Locação de Veículos e de Máquinas e Equipamentos.					
					</p>
					<p class="text-left">
						A empresa tem como filosofia, proporcionar aos usuários de seus sistemas, um completo e personalizado treinamento para que o objetivo da implantação, seja alcançado com segurança e confiabilidade.
					</p>
					<p class="text-left">
						Prestando serviços de consultoria, assessoria com treinamento interno e externo, efetuando customizações de acordo com as necessidades do cliente, mantém seus sistemas sempre atualizados com o que há de mais moderno em tecnologia.
					</p>
					<p class="text-left">
						Conta hoje com mais de 500 cópias dos sistemas instalados em todo o país e com aproximadamente 3.000 usuários ativos, com uma equipe altamente qualificada e estrutura adequada para um atendimento de ótima qualidade.
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
