<?php
get_header('blog'); ?>
</header><!--#header-->

<div id="content">
	<div class="container">
		<div class="row banner-blog">
			<?php putRevSlider( "banner-blog" ) ?>
		</div>
		<div class="row banner-menu">
			<div class="col-md-4 blog-categoria-a"><h4><a href="">Empreendedorismo</a></h4></div>
			<div class="col-md-4 blog-categoria-b"><h4><a href="">Notícias sobre automóveis</a></h4></div>
			<div class="col-md-4 blog-categoria-c"><h4><a href="">Gestões de Locadoras</a></h4></div>
		</div>
		<div class="row blog-articles">
			<div class="col-md-8">
				<?php 
				$args = array(
				    'orderby' => 'post_date',
				    'order' => 'DESC');
				$query = new WP_Query( $args ); 
				?>	

				<?php if ( $query->have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>

						<?php

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_format() );
						?>

					<?php endwhile; ?>


				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
			</div>
			<div class="col-md-4">
				<?php get_sidebar(); ?>	
			</div>
		</div>
	</div>

<?php get_footer(); ?>
