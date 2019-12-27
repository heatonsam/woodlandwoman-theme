<div class="grid-posts flex-container">

    <?php
	  global $post;
	  $args = array(
    'numberposts' => 8,
    'offset' => 2,
    'post_status' => 'publish'
	  ); ?>
	  <?php $latest_posts = get_posts( $args ); ?>
	  <?php foreach ( $latest_posts as $post ): ?>
        <div class="grid-post">
            <?php setup_postdata( $post ); ?>
            <?php the_post_thumbnail(); ?>
            <?php the_date(); ?>
            <a href='<?php echo the_permalink(); ?>'>
	              <h4><?php the_title(); ?></h4>
            </a>
            <?php the_excerpt(); ?>
            <?php ?>
        </div>
	  <?php endforeach; ?>
	  <?php wp_reset_postdata(); ?>
</div>
