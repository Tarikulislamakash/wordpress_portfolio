<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php bloginfo('name'); ?></title>

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<header class="site-header">

			<div class="hd-search">
				<?php get_search_form(); ?>
			</div>

			<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			<h4>
			
				<?php bloginfo('description'); ?>

				<?php if( is_page('portfolio') ) { ?>
					- Thank you for viewing our page
				<?php }?>
				
			</h4>



			<nav class="site-nav">

				<?php

					$args = array(
						'theme_location'   => 'primary'
					);

				?>

				<?php wp_nav_menu( $args ); ?>

			</nav>

		</header>