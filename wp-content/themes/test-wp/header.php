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
		</header><!-- #masthead -->

	<div id="content" class="site-content">
