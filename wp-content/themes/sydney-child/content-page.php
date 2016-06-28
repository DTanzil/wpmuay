<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Sydney
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="title-post">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	
	<!-- About Us Page  -->
	<?php $pageid = get_the_ID(); ?>
	<?php if($pageid == 83): ?>
		<div class="mty-about" style="background-image:url('http://localhost/muaysukhothai/wp-content/uploads/2016/06/about-header-1.jpg');">
	<?php endif; ?>

	</div>
	
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'sydney' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'sydney' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
