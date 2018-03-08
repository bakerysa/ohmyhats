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
		<div class="col-md-6 col-sm-6">
			<h1><?php the_field('about_header') ?></h1>
			<p style="max-width: 30rem; line-height: 2rem;"><?php the_field('about_description') ?></p>
		</div>
		<div class="col-md-6 col-sm-6">
			<div class="image-container">
				<div class="image-block-right"></div>
				<img src="<?php the_field('about_image') ?>" />
			</div>
		</div>
		<div class="col-md-12 col-sm-12">
			<p style="margin-top: 2rem; line-height: 2rem;"><?php the_field('about_description-2') ?></p>
		</div>
		<div class="about-stamp">
			<img src="<?php the_field('about_stamp') ?>" />
		</div>
	</div>

</div>
