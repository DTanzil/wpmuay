<?php
/**
 * @package Sydney
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( has_post_thumbnail() && ( get_theme_mod( 'post_feat_image' ) != 1 ) ) : ?>
		
	<?php endif; ?>

	<header class="entry-header">
		<?php the_title( '<h1 class="title-post">', '</h1>' ); ?>

		<?php if (get_theme_mod('hide_meta_single') != 1 ) : ?>
		<div class="meta-post">
			<?php sydney_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<div class="row">
			<div class="col-lg-6 col-md-6 col-xs-12">
				<div class="entry-thumb">
					<?php the_post_thumbnail('sydney-large-thumb'); ?>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 col-xs-12">
				<?php the_content(); ?>
			</div>

		</div>
		
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'sydney' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php sydney_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
