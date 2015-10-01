<?php
get_header('blog'); ?>
</header><!--#header-->

<div id="content">
	<div class="container">
		<div class="row banner-blog">
			<?php putRevSlider( "banner-blog" ) ?>
		</div>
		<div class="row banner-menu">
			<div class="col-md-4 blog-categoria-a"><h4><a href="<?php echo esc_url( home_url( '/' ))."categoria/noticias-locacao-maquinas-equipamentos/"; ?>">Locação de Màquinas e Equipamentos </a></h4></div>
			<div class="col-md-4 blog-categoria-b"><h4><a href="<?php echo esc_url( home_url( '/' ))."categoria/noticias/"; ?>">Notícias</a></h4></div>
			<div class="col-md-4 blog-categoria-c"><h4><a href="<?php echo esc_url( home_url( '/' ))."categoria/gestao-de-locadoras/"; ?>">Gestões de Locadoras</a></h4></div>
		</div>
		<div class="row blog-articles">
			<div class="col-md-8">
				<?php 
				$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

				$args = array(
					'posts_per_page' => 10,
				    'orderby' => 'post_date',
				    'order' => 'DESC',
				    'category_name' => 'noticias',
				    'paged' => $paged
					);
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
					<?php
					$big = 999999999; // need an unlikely integer
					echo paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'current' => max( 1, get_query_var('paged') ),
						'total' => $query->max_num_pages
					) );
					?>

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
