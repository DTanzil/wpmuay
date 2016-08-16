<?php

/*

Template Name: Students Full Width template

*/
	get_header();
?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php

					if ( comments_open() || '0' != get_comments_number() ) :

						comments_template();

					endif;
				?>

			<?php endwhile; // end of the loop. ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>


<script type="text/javascript">
	$(document).ready(function() {
	     $('#example').DataTable( {
			// select:true,
	        // responsive: true,
	        "pagingType": "full_numbers",
	        "lengthMenu": [ [-1, 50], ["All", 50] ]
    } );


} );



</script>