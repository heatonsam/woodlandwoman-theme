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
                <img id="jen-image" src='<?php echo wp_make_link_relative("http://localhost/wp-content/uploads/2020/02/jen_new.jpg"); ?>'>
                <h4>Hello & Welcome!</h4>
                <p>My name is Jenna. I’m a writer, researcher, and photographer based in Ottawa, Ontario.</p>
                <p>I started this blog to write about my outdoor adventures, about wildlife, and issues in conservation. My hope is that it inspires you to get outside and create your own adventures.</p>
                <p>
                    Instagram: <a href="https://www.instagram.com/woodland.woman/">woodland.woman</a><br>
                    Twitter: <a href="https://twitter.com/JennaAmirault">@jennaamirault</a><br>
                    Email: jen at woodlandwoman.ca
                </p>
            </div>
        </div>
        <div class="grid-sidebar-box">
            <div id="newsletter">
                <h4>Sign Up For My Newsletter</h4>
                <!-- Begin Mailchimp Signup Form -->
                <form action="https://woodlandwoman.us4.list-manage.com/subscribe/post?u=8751052120e0dff8ba48d0152&amp;id=68ff879a30" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll">
	                      <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_8751052120e0dff8ba48d0152_68ff879a30" tabindex="-1" value=""></div>
                        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                    </div>
                </form>
                <!--End mc_embed_signup-->
                <p>Enter your email to subscribe to this blog. I'll email you about 1-2 times a month to let you know about new posts and adventures!</p>
            </div>
        </div>
    </div>
</div><!-- #secondary -->
