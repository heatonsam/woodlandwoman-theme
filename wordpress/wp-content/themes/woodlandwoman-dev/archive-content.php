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
			      while ( have_posts() ) :
				    the_post(); ?>
            <?php include('featured-single-preview.php'); ?>
            <?php

			      endwhile;

			      the_posts_navigation();

		        else :

			      get_template_part( 'template-parts/content', 'none' );

		        endif;
		        ?>
    </div>
</main><!-- #main -->
