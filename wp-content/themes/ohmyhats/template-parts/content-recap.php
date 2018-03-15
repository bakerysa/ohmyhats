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
		<div class="container-fluid">
			<?php
				$args = array( 'numberposts' => '3' );
				$recent_posts = wp_get_recent_posts( $args );
				$excerpt = get_the_excerpt($post->ID);
				foreach( $recent_posts as $recent ){
					echo '<div class="col-md-4"><div class="latest-post" style="background-image: url(' . get_the_post_thumbnail_url($recent["ID"]) . ');
					background-position: center;
					background-repeat: no-repeat;
					background-size: cover;
					height: 50rem;"><div class="post-preview"><div class="post-meta"><span>';
					$cats = get_the_category($recent["ID"]);
					echo $cats[0]->name;
					echo '</span> | '
					. get_the_date()
					. '</div>'
					. '<h1><a href="'
					. get_permalink($recent["ID"])
					. '">'
					. $recent["post_title"]
					.'</a> </h1>'
					. '<p>'
					. $excerpt
					. '</p> <a class="post-button" href="'
					. get_permalink($recent["ID"])
					.'">Read More</a> </div> </div> </div>';
				}
				wp_reset_query();
			?>
			</div>
			</div>
