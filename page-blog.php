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
				    'paged' => $paged);
				$query = new WP_Query( $args ); 
				?>	

				<?php if ( $query->have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<header class="entry-header">
								<?php if ( has_post_thumbnail() && !is_search() ) { ?>
									<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'quark' ), the_title_attribute( 'echo=0' ) ) ); ?>">
										<?php the_post_thumbnail('home-thumb', array(
											'class' => "e-cinza img-responsive",
										)); ?>
									</a>
								<?php } ?>

								<?php if ( is_single() ) { ?>
									<h2 class="entry-title"><?php the_title(); ?></h2>
								<?php }
								else { ?>
									<h2 class="entry-title">
										<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'quark' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
									</h2>
								<?php } // is_single() ?>
							</header> <!-- /.entry-header -->
							
							<div class="entry-summary">
								<?php the_excerpt(); ?>
								<a href="<?php the_permalink(); ?>"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/btn-post.jpg"; ?>"/></a>
							</div> <!-- /.entry-summary -->

						</article> <!-- /#post -->

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
