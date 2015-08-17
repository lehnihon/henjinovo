<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Quark
 * @since Quark 1.0
 */
?>

<div id="newsletter-background">
	<div class="container">
		<div class="row newsletter">
			<div class="col-md-4 col-md-offset-1 news-esquerdo" >
				<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/newsletter.png"; ?>"/>
			</div>		
			<div class="col-md-7 news-direito" >
				<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/news-seta.png"; ?>"/>
				<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 6 ); }	?>		
			</div>
		</div>
	</div>
</div>

