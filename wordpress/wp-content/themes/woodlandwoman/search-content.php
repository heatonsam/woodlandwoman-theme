<main id="main" class="grid-main">
    <div id="grid-featured-post-area">

        <?php if ( have_posts() ) : ?>

			      <header class="page-header">
				        <h1 class="page-title">
					          <?php
					          /* translators: %s: search query. */
					          printf( esc_html__( 'Search Results for: %s', 'woodlandwoman' ), '<span>' . get_search_query() . '</span>' );
					          ?>
				        </h1>
			      </header><!-- .page-header -->

			      <?php
			      /* Start the Loop */
            the_posts_navigation( array(
                'prev_text'                  => __( '<span class="nav-arrows">«</span> Previous page' ),
                'next_text'                  => __( 'Next page <span class="nav-arrows">»</span>' ),
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
                'prev_text'                  => __( '<span class="nav-arrows">«</span> Previous page' ),
                'next_text'                  => __( 'Next page <span class="nav-arrows">»</span>' ),
                'aria_label'                   => __( 'posts' ),
                'screen_reader_text' => __( 'Continue Reading' ),
            ) );
		        else :

			      get_template_part( 'template-parts/content', 'none' );

		        endif;
		        ?>
    </div>
</main><!-- #main -->
