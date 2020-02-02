<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Woodland_Woman
 */
?>

<div id="sidebar" class="widget-area grid-sidebar <?php echo (is_archive() ? 'archive-sidebar' : ""); ?>">
    <div class="grid-sidebar-content">
        <div id="search-box"><?php  get_search_form();  ?></div>

        <div class="grid-sidebar-box">
            <div id="about-me">
                <h3>Writer & Researcher</h3>
                <img id="jen-image" src='<?php echo wp_make_link_relative("http://localhost/wp-content/uploads/2019/12/jen.png"); ?>'>
                <h4>Hello & Welcome!</h4>
                <p>I'm Jen. I'm a writer, sociologist, and photographer based in Ottawa, Ontario. My current research interests are how societies and environments interact.</p>
                <p>On this blog, you'll find my ruminations on camping, hiking, and wilderness. I hope this blog inspires you to get outside and adventure. </p>
            </div>
        </div>
        <div class="grid-sidebar-box">
            <div id="newsletter">
                <h4>Sign Up For My Newsletter</h4>
                <input id="newsletter-input" placeholder="email" type="text">
                <p>Enter your email to subscribe to this blog. I'll email you about 1-2 times a month to let you know about new posts and adventures!</p>
            </div>
        </div>
    </div>
</div><!-- #secondary -->
