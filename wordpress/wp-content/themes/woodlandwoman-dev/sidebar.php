<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Woodland_Woman
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area grid-sidebar">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
