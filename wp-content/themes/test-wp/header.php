<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

		<header>

            <div class="header-top">
                <div class="socials container">
                    <div id="header_top" class="sidebar">
		                <?php dynamic_sidebar( 'header_top_widgets' ); ?>
                    </div>
                </div>
            </div>

            <div class="header-bottom">

                <div class="container">

                    <div class="header-bar">

                        <div id="mobile_menu_open_toggler" class="mobile_menu_open_toggler">
                            <span class="toggler-lines">
                        </div>

                        <div class="logo">
                            <img src="<?php echo get_stylesheet_directory_uri().'/assets/img/logo.png' ?>" alt="logo" width="296" height="69">
                        </div>

                        <div class="header-search">
                            <?php get_search_form(); ?>
                        </div>

                    </div>

                </div>

                <div id="mobile-menu-main" class="mobile-menu">

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

            </div><!--header-bottom-->

		</header>
	<div id="content" class="site-content">
