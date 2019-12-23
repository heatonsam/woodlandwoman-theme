<?php get_header(); ?>
		<?php
				// Start the Loop.
	while (have_posts()) :
	get_template_part('single', 'page');
	the_post();
	endwhile;
	?>
<?php get_footer(); ?>