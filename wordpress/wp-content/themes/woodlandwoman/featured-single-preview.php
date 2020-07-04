<div class="featured-post-preview">
        <h2><a href='<?php echo the_permalink(); ?>'>
<?php the_title(); ?></a>
</h2>
    <h3>
        <?php the_date(); ?>
    </h3>
    <a href='<?php echo the_permalink(); ?>'>
        <?php the_post_thumbnail(); ?>
    </a>
    <div class="featured-excerpt">
        <?php $excerpt = get_the_excerpt(); ?>
        <?php $excerpt = substr($excerpt, 0, featured_excerpt_length($excerpt)); ?>
        <p><?php echo $excerpt; ?></p>
    </div>
    <a class="featured-readmore" href='<?php echo the_permalink(); ?>'>
        <h4>Continue Reading</h4>
    </a>
</div>
