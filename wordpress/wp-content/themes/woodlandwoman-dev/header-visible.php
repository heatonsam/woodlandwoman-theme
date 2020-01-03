<header id="masthead" class="site-header grid-header">
		<div class="site-branding">
                  <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			  $woodlandwoman_description = get_bloginfo( 'description', 'display' );
			  if ( $woodlandwoman_description || is_customize_preview() ) :
				?>
				    <p class="site-description">
                <?php echo $woodlandwoman_description; /* WPCS: xss ok. */ ?>
            </p>
			  <?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="flex-container main-navigation">
        <?php wp_nav_menu(); ?>
		</nav><!-- #site-navigation -->
    <?php
		if ( is_front_page() && is_home() ) :
		?>
        <div id="frontpage-banner">
            <img src='http://localhost/wp-content/uploads/2019/12/banner-scaled.jpg'>
        </div>
    <?php
    endif;
    ?>
</header><!-- #masthead -->
