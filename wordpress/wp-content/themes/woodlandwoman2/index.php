<?php get_header() ?>

    <?php get_template_part('single', get_post_format()); ?>
    <!-- End of the main loop -->
 
    <!-- Add the pagination functions here. -->
<div class="pagination">
<div class="nav-previous alignleft"><?php previous_posts_link('« Previous'); ?></div>
<div class="nav-next alignright"><?php next_posts_link('Next »'); ?></div>
</div>
<?php if (!is_page()) {
    echo '<div class="linebelowpagination"></div>';
} ?>
<?php get_footer() ?>

