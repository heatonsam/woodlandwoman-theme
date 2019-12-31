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
        <?php setup_postdata( $post ); ?>
        <div class="grid-post">
            <div class="grid-photo">
                <a href='<?php echo the_permalink(); ?>'>
                    <?php the_post_thumbnail(); ?>
                </a>
            </div>
            <div class="grid-preview">
                <p class="grid-post-date"><?php the_date(); ?></p>
                <a href='<?php echo the_permalink(); ?>'>
	                  <h4><?php the_title(); ?></h4>
                </a>
                <div class="grid-excerpt">
                    <?php $excerpt = get_the_excerpt(); ?>
                    <?php $excerpt = substr($excerpt, 0, grid_excerpt_length($excerpt)); ?>
                    <p class="grid-post-excerpt"><?php echo $excerpt; ?></p>
                </div>
            </div>
            <a class="grid-read-more" href='<?php echo the_permalink(); ?>'>
                <h5>Read More</h5>
            </a>
        </div>
	  <?php endforeach; ?>
	  <?php wp_reset_postdata(); ?>
</div>
