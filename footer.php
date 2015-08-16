<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package site
 */

?>
	</div><!-- #content -->

	<footer id="footer" class="site-footer" role="contentinfo">
		<div class="footer-cima">
			<div class="container">
				<div class="row">
					<div class="col-xs-4">
						<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo.png"; ?>"/>
						<p><strong>Liderança não se conquista por acaso.</strong></p>
						<p>
							A Henji é uma empressa que desenvolve sistemas para a gestão de locadoras de veículos.<br/>
							Nossos sistemas foram desenvolvidos exclusivamente para atender as necessidades da sua locadora.
						</p>
					</div>
					<div class="col-xs-2 col-xs-offset-2">
						<p><strong>Produtos</strong></p>
						<ul>
							<li><a href="">Sistema Henji</a></li>
							<li><a href="">GMD</a></li>
							<li><a href="">Locação de Máquinas</a></li>
							<li><a href="">Criação de Site</a></li>
							<li><a href="">Solicite uma senha</a></li>
						</ul>
					</div>
					<div class="col-xs-2">
						<p><strong>Institucional</strong></p>
						<ul>
							<li><a href="">Sobre a Henji</a></li>
							<li><a href="">Parceiros</a></li>
							<li><a href="">Localização</a></li>
						</ul>
					</div>
					<div class="col-xs-2">
						<p><strong>Atendimento</strong></p>
						<ul>
							<li><a href="">Suporte</a></li>
							<li><a href="">Contato</a></li>
							<li><a href="">Blog da Henji</a></li>
							<li>11 4332-8787</li>
						</ul>
					</div>
				</div>
			</div>			
		
		<div class="footer-baixo">
			<div class="container">
				&copy; Copyright- Henji <a href=#>Site desenvolvido pela Agência Rino.</a>
				<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/redes-sociais.png"; ?>"/>
			</div>
		</div>
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
