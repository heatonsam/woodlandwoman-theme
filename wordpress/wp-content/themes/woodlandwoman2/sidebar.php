</div>
<?php if (is_active_sidebar('sidebar')) : ?>
<div class="col-lg-3 col-md-3 offset-sm-0 blog-sidebar">
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<h4>Recent Posts</h4>
		<ul>
<?php
$sidebarposts = array(
	'numberposts' => '5',
	'post_status' => 'publish'
);
$recent_posts = wp_get_recent_posts($sidebarposts);
foreach ($recent_posts as $recent) {
	echo '<li><a href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"] . '</a> </li> ';
}
wp_reset_query();
?>
</ul>
	<?php 
if (!is_page() && !is_category()) {?>
	<h4>Instagram</h4>
	<?php echo do_shortcode('[instagram-feed]');
} ?>
		<?php dynamic_sidebar('sidebar'); ?>
		</div>
</div>



<?php endif; ?>

