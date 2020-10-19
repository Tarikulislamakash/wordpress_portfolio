<?php
	get_header();
?>

<div class="site-content clearfix">

	<!-- main column -->
	<div class="main-column">

		<?php

			if ( have_posts() ) :
				while ( have_posts() ) : the_post();

			get_template_part('content', get_post_format());

			endwhile;

			else:
				echo '<p>Content not found</p>';

			endif;
		?>

	</div><!-- end main column -->

	<?php get_sidebar(); ?>

</div>

<?php
	get_footer();

?>