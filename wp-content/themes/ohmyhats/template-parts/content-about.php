<?php
/**
 * Template part for the social feed.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ohmyhats
 */

?>

<div class="section">
	<div class="subtext-l">
		<?php the_field('about_subtext') ?>
	</div>

	<div class="container">
		<div class="col-md-6">
			<h1><?php the_field('about_header') ?></h1>
			<p><?php the_field('about_description') ?></p>
		</div>
		<div class="col-md-6">
			<div class="pink-block-left"></div><img src="<?php the_field('about_image') ?>" />
		</div>
		<div class="about-stamp">
			<img src="<?php the_field('about_stamp') ?>" />
		</div>
	</div>

</div>
