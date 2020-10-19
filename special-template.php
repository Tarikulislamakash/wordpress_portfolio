<?php

/*
Template Name: Special Layout
*/

	get_header();

	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
?>

	<article class="post page">

		<h2><?php the_title(); ?></h2>

		<div class="info-box">
			<h4>Disclaimer Title</h4>
			<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
		</div>

		<p><?php the_content(); ?></p>

	</article>

<?php
		endwhile;

		else:
			echo '<p>Content not found</p>';

	endif;

	get_footer();

?>