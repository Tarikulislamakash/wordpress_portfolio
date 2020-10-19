<?php

	get_header();

	if ( have_posts() ) :

?>

	<h2>Search result for : <?php the_search_query(); ?></h2>

<?php
	while ( have_posts() ) : the_post();

	get_template_part('content', get_post_format());

	endwhile;

	else:
		echo '<p>Content not found</p>';

	endif;

	get_footer();

?>