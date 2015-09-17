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
					<div class="col-md-4">
						<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo.png"; ?>"/>
						<p><strong>Liderança não se conquista por acaso.</strong></p>
						<p>
							A Henji é uma empresa que desenvolve sistemas para a gestão de locadoras de veículos.<br/>
							Nossos sistemas foram desenvolvidos exclusivamente para atender as necessidades da sua locadora.
						</p>
					</div>
					<div class="col-md-2 col-md-offset-2">
						<p><strong>Produtos</strong></p>
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' ))."sistema-de-gestao-para-locadoras-de-veiculos/"; ?>">Sistema Henji</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ))."sistema-de-gestao-para-locadoras-de-carros/"; ?>">GMD</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ))."locacao-de-maquinas-e-equipamentos/"; ?>">Locação de Máquinas</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ))."criacao-de-site/"; ?>">Criação de Site</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ))."solicite-uma-senha/"; ?>">Solicite uma senha</a></li>
						</ul>
					</div>
					<div class="col-md-2">
						<p><strong>Institucional</strong></p>
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' ))."henji/"; ?>">Sobre a Henji</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ))."parceiros/"; ?>">Parceiros</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ))."contato/"; ?>">Localização</a></li>
						</ul>
					</div>
					<div class="col-md-2">
						<p><strong>Atendimento</strong></p>
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' ))."contato/"; ?>">Suporte</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ))."contato/"; ?>">Contato</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ))."blog/"; ?>">Blog da Henji</a></li>
							<li>11 4332-8787</li>
						</ul>
					</div>
				</div>
			</div>			
		
		<div class="footer-baixo">
			<div class="container">
				&copy; Copyright- Henji <a href="http://agenciarino.com.br/">Site desenvolvido pela Agência Rino.</a>
				<ul class="redes_sociais_header">
					<li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCNkHrw4ujO_bUW7nmrPF1TA"></a></li>
					<li class="instagram"><a target="_blank" href="https://instagram.com/henjioficial"></a></li>
					<li class="twitter"><a target="_blank" href="https://twitter.com/henjioficial"></a></li>
					<li class="facebook"><a target="_blank" href="https://www.facebook.com/henjioficial"></a></li>
				</ul>
			</div>
		</div>
	</footer><!-- #footer -->
</div><!-- #page -->
<script>
	var dirbase = "<?php echo dirname( get_bloginfo('stylesheet_url')) ?>";
</script>
<?php wp_footer(); ?>

</body>
</html>
