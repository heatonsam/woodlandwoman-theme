<?php while (have_posts()) : the_post(); ?>
<?php if (!is_page()) { ?>
		<h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		<p class="post-meta"><?php the_date(); ?></p>
			<?php 
	} ?>
			<div class="post-content">
			<?php echo ww_first_paragraph() ?>
			</div>
<?php
endwhile;
?>
