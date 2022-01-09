<?php get_header(); ?>

<div class="content-area">
	<main id="main" class="site-main">

    <div id="mobile-menu-main" class="mobile-menu active">

        <div class="mobile-menu-wrapper">

            <div id="mobile_menu_close_toggler" class="mobile-menu-toggler">
                <span class="toggler-line one"></span>
                <span class="toggler-line two"></span>
            </div>

            <div class="mobile-menu-header">
                <div class="logo">
                    <img src="<?php echo get_stylesheet_directory_uri().'/assets/img/logo.png' ?>" alt="logo" width="296" height="69">
                </div>
            </div>

            <div class="mobile-menu-content">
                <nav class="mobile-nav-menu">
                    <ul>
                        <li>Homepage</li>
                        <li>Our team</li>
                        <li>Top sites</li>
                        <li class="menu-item-has-children">
                            <a href="#">Programs</a>
                            <ul class="sub-menu">
                                <li id="menu-item-8" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8"><a href="#">first child</a></li>
                                <li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><a href="#">second child</a></li>
                            </ul>
                        </li>
                        <li>Contact us</li>
                        <li>Blog</li>
                    </ul>
                </nav>
            </div>

            <div class="mobile-menu-footer">
                <div class="mobile-menu-copyright">
                    © 2021 <span class="color-accent">bBluePrintGaming</span><br>
                    All rights reserved.
                </div>
            </div>

        </div>
    </div>
</div>

		<?php
	if ( have_posts() ) {

		// Load posts loop.
		while ( have_posts() ) {
			the_post();
			the_content();
		}

	} else {

		// If no content, include the "No posts found" template.
		get_template_part( 'template-parts/content/content', 'none' );

	}
		?>

	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer();
