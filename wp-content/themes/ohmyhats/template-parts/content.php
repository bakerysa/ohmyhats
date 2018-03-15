<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ohmyhats
 */

?>

<?php
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header style="background-image: url(<?php echo $url; ?>);background-position: center; background-repeat: no-repeat; background-size: cover; height: 18rem;"  class="entry-header single-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title single-heading">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title single-heading"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>
	</header><!-- .entry-header -->

<div class="entry-content">
	<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ohmyhats' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );
		wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ohmyhats' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php ohmyhats_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
