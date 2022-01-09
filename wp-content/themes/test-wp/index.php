<?php get_header();?>

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
                    <?php wp_nav_menu([
                        'theme_location' => 'main',
                    ]); ?>
                </div>

                <div class="mobile-menu-footer">
                    <div class="mobile-menu-copyright">
                        © 2021 <span class="color-accent">bBluePrintGaming</span><br>
                        All rights reserved.
                    </div>
                </div>

            </div><!--.mobile-menu-wrapper-->

        </div><!-- #mobile-menu-main-->

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
