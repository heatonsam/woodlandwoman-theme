<?php
    /**
    * Template Name: Archive
    */
?>

<?php get_header() ?>

<?php
					the_archive_title( '<h2 class="post-title">', '</h2>' );
				?>
<div class="categorylist">
<?php wp_list_categories( 'sort_column=name&title_li=' ); ?>
</div>

<?php 
    get_template_part('preview', get_post_format());
?>

<?php get_footer() ?>

<!-- <div class="pagination">
<div class="nav-previous alignleft"><?php previous_posts_link('« Previous'); ?></div>
<div class="nav-next alignright"><?php next_posts_link('Next »'); ?></div>
</div> -->