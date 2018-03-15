<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ohmyhats
 */

?>

<article class="col-lg-6 col-sm-12" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' );
	?>

	<div class="archive-post" style="background-image: url('<?php echo $url ?>?>'); background-position: center; background-repeat: no-repeat; background-size: cover; height: 50rem;">
	<div class="post-preview">
		<div class="post-meta">
			<span><?php $cats = get_the_category($recent["ID"]);
			echo $cats[0]->name; ?></span> | <?php echo get_the_date(); ?>
		</div>
		<h1><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h1>
		<p><?php echo get_the_excerpt(); ?></p>
		<a class="post-button" href="<?php echo get_permalink(); ?>">Read More</a>
		</div>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
