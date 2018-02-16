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
		<?php the_field('social_subtext') ?>
	</div>

	<div class="social-cta">
		<div class="col-md-8">
			<div class="col-md-4">
				<img class="img-responsive" src="<?php the_field('social-image-1') ?>" />
			</div>
			<div class="col-md-4">
				<img class="img-responsive" src="<?php the_field('social-image-1') ?>" />
			</div>
			<div class="col-md-4">
				<img class="img-responsive" src="<?php the_field('social-image-1') ?>" />
			</div>
			<div class="col-md-4">
				<img class="img-responsive" src="<?php the_field('social-image-1') ?>" />
			</div>
			<div class="col-md-4">
				<img class="img-responsive" src="<?php the_field('social-image-1') ?>" />
			</div>
			<div class="col-md-4">
				<img class="img-responsive" src="<?php the_field('social-image-1') ?>" />
			</div>
		</div>
		<div class="col-md-4">
			<h1><?php the_field('social_header') ?></h1>
			<div class="social">
				<a href="<?php the_field('facebook_link') ?>"><i class="fa fa-facebook border-square" aria-hidden="true"></i></a>
				<a href="<?php the_field('twitter_link') ?>"><i class="fa fa-twitter border-square" aria-hidden="true"></i></a>
				<a href="<?php the_field('instagram_link') ?>"><i class="fa fa-instagram border-square" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>

</div>
