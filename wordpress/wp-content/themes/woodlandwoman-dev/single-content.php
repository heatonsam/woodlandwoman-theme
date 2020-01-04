<article class="grid-single">
<?php while ( have_posts() ) : ?>
    <div class="single-content">
			  <?php the_post(); ?>
    </div>
    <?php
		get_template_part( 'template-parts/content', get_post_type() );

the_post_navigation( array(
            'prev_text'                  => __( '<span class="nav-arrows">«</span> %title' ),
            'next_text'                  => __( '%title <span class="nav-arrows">»</span>' ),
            'taxonomy'                   => __( 'post_tag' ),
            'screen_reader_text' => __( 'Continue Reading' ),
        ) );
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
		comments_template();
		endif;

		endwhile; // End of the loop.
		?>
</article>
