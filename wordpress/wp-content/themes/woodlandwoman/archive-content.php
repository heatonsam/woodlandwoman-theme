<main id="main" class="grid-main">
    <div id="grid-featured-post-area">

        <?php if ( have_posts() ) : ?>

			      <header class="page-header">
				        <?php
				        the_archive_title( '<h1 class="page-title">', '</h1>' );
				        the_archive_description( '<div class="archive-description">', '</div>' );
				        ?>
			      </header><!-- .page-header -->

			      <?php
			      /* Start the Loop */
            the_posts_navigation( array(
                'prev_text'                  => __( '<span class="nav-arrows">«</span> Older posts' ),
                'next_text'                  => __( 'Newer posts <span class="nav-arrows">»</span>' ),
                'aria_label'                   => __( 'posts' ),
                'screen_reader_text' => __( 'Continue Reading' ),
            ) );
            ?><br><?php
			            while ( have_posts() ) :
				          the_post(); ?>
                <?php include('featured-single-preview.php'); ?>
            <?php

			      endwhile;
            the_posts_navigation( array(
                'prev_text'                  => __( '<span class="nav-arrows">«</span> Older posts' ),
                'next_text'                  => __( 'Newer posts <span class="nav-arrows">»</span>' ),
                'aria_label'                   => __( 'posts' ),
                'screen_reader_text' => __( 'Continue Reading' ),
            ) );
		        else :

			      get_template_part( 'template-parts/content', 'none' );

		        endif;
		        ?>
    </div>
</main><!-- #main -->
