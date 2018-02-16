<?php
/**
 * Page Template: Home
 *
 *
 * @package ohmyhats
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div id="fullpage">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'home' );

				get_template_part( 'template-parts/content', 'social' );

				get_template_part( 'template-parts/content', 'about' );

				get_template_part( 'template-parts/content', 'newsletter' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</div><!-- #fullpage -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
