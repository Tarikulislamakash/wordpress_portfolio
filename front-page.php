<?php

	get_header();

	if ( have_posts() ) :
		while ( have_posts() ) : the_post();

		the_content();

		endwhile;

		else:
			echo '<p>Content not found</p>';

	endif;


	// Opinion Post Loop

	$opinionPosts = new WP_Query( 'cat=7&posts_per_page=2' );

	if ( $opinionPosts->have_posts() ) :
		while ( $opinionPosts->have_posts() ) : $opinionPosts->the_post();

?>

	<h2><?php the_title(); ?></h2>

<?php

		endwhile;

		else:

	endif;



	get_footer();

?>