<?php get_header() ?>
<?php while (have_posts()) : the_post(); ?>
    <?php if (!is_page()) { ?>
        <h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        <p class="post-meta"><?php the_date(); ?></p>
    <?php
    } ?>
    <div class="post-content">
        <?php the_content() ?>
    </div>
    <?php wp_link_pages('before=<div class="page-link">' . __('Pages:', 'your-theme') . '&amp;after=</div>') ?>
    <div class="pagination">
        <?php if (is_singular() && !is_page()) {
        ?>
            <div class="row">
                <div class="col">
                    <div class="nav-previous alignleft"><?php previous_post_link('%link', '« %title'); ?></div>
                </div>
                <div class="col">
                    <div class="nav-next alignright"><?php next_post_link('%link', '%title »'); ?></div>
                </div>
            </div>
            <?php if (is_singular()) {
                echo '<div class="linebelowpaginationpost"></div>';
            } ?>
        <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
        }
        ?>
    </div>
<?php
endwhile;
?>

<?php if (!is_front_page()) {
    get_footer();
} ?>
