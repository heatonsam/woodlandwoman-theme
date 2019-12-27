<main id="main" class="grid-main">

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
        <a href='<?php echo the_permalink(); ?>'>
            <h2><?php the_title(); ?></h2>
        </a>
        <h3>
            <?php the_date(); ?>
        </h3>

        <div class="featured-post-preview">
            <a href='<?php echo the_permalink(); ?>'>
                <?php the_post_thumbnail(); ?>
            </a>
        </div>

    <?php
	  the_excerpt();
	  endforeach;
	  wp_reset_postdata();
    ?>

</main><!-- #main -->
