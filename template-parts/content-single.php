<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() && !is_search() ) { ?>
			<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'quark' ), the_title_attribute( 'echo=0' ) ) ); ?>">
				<?php the_post_thumbnail( 'home-thumb'); ?>
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

	<?php if ( is_search() ) { // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div> <!-- /.entry-summary -->
	<?php }
	else { ?>
		<div class="entry-content">
			<?php the_content( wp_kses( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'quark' ), array( 'span' => array( 
				'class' => array() ) ) )
				); ?>
			<?php wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'quark' ),
				'after' => '</div>',
				'link_before' => '<span class="page-numbers">',
				'link_after' => '</span>'
			) ); ?>
		</div> <!-- /.entry-content -->
	<?php } ?><br>
	<p>
		<a href="<?php echo esc_url( home_url( '/' ))."/blog/"; ?>">Voltar</a>
	</p>
</article> <!-- /#post -->

