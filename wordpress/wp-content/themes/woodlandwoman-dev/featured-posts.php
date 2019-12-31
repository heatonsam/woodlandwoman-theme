<main id="main" class="grid-main">
    <div id="grid-featured-post-area">
        <?php
	      global $post;
	      $args = array(
            'numberposts' => 2,
            'post_status'      => 'publish'
	      );
	      $latest_posts = get_posts( $args );
	      foreach ( $latest_posts as $post ):
	                      setup_postdata( $post );
        ?>
            <?php include('featured-single-preview.php'); ?>
        <?php
        endforeach;
	      wp_reset_postdata();
        ?>
    </div>
</main><!-- #main -->
