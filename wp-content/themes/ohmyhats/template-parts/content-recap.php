<?php
/**
 * Template part for displaying page content in page-home.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ohmyhats
 */

?>

	<div class="section">
		<div class="subtext-tl">
			<?php the_field('latest_subtext') ?>
		</div>
		<div class="container-fluid">
		<?php
			$args = array( 'numberposts' => '3' );
			$recent_posts = wp_get_recent_posts( $args );
			foreach( $recent_posts as $recent ){
				echo '<div class="col-md-4 col-sm-12"><div class="latest-post" style="background-image: url(' . get_the_post_thumbnail_url($recent["ID"]) . ');
				background-position: center;
    		background-repeat: no-repeat;
    		background-size: cover;
    		height: 50rem;"><div class="post-preview"><div class="post-meta"><span>'
				. get_term($recent["ID"])
				.'</span> | '
				. get_the_date()
				. '</div>'
				. '<h1><a href="'
				. get_permalink($recent["ID"])
				. '">'
				.  $recent["post_title"]
				.'</a> </h1>'
				. '<p>'
				. get_the_excerpt($recent["ID"])
				.'</p> <a class="post-button" href="'
				. get_permalink($recent["ID"])
				.'">Read More</a> </div> </div> </div>';
			}
			wp_reset_query();
		?>
	</div>
	</div>
