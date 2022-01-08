<?php get_header(); ?>

<div class="content-area">
	<main id="main" class="site-main">

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
