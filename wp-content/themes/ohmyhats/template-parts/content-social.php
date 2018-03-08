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

	<div class="container">

		<div class="col-md-8 col-sm-12">

			<div class="max-width">

			<?php if( have_rows('social_gallery') ): ?>

				<?php while( have_rows('social_gallery') ): the_row();

					$image = get_sub_field('grid_image');
					?>

					<div class="col-md-4 col-xs-6 social-image">

						<?php if( $image ): ?>
							<img src="<?php echo $image; ?>" />
						<?php endif; ?>

					</div>

				<?php endwhile; ?>

			<?php endif; ?>
			</div>
			</div>
		<div class="col-md-4 social-cta">
			<img class="social-stamp" src="<?php the_field('social_stamp') ?>" />
			<h1><?php the_field('social_header') ?></h1>
			<div class="social">
				<a href="<?php the_field('facebook_link') ?>"><i class="fa fa-facebook border-square" aria-hidden="true"></i></a>
				<a href="<?php the_field('twitter_link') ?>"><i class="fa fa-twitter border-square" aria-hidden="true"></i></a>
				<a href="<?php the_field('instagram_link') ?>"><i class="fa fa-instagram border-square" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</div>
</div>
