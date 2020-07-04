<main id="main" class="grid-main">
    <div id="grid-featured-post-area">
<?php while ( have_posts() ) : ?>
			  <?php the_post(); ?>
          <?php
			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>
    </div>
</main><!-- #main -->
