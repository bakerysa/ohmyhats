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

		<div class="home-image">
			<img src="<?php the_field('home_image') ?>" />
		</div>

		<div class="container">

		<div class="col-md-7 col-sm-12">
			<!-- Carousel -->
			<div id="promo-carousel" class="carousel slide" data-ride="carousel">

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">

			    <?php
			    // Item size (set here the number of posts for each group)
			    $i =1;

			    // Set the arguments for the query
			    global $post;
			    $args = array(
			      'numberposts'   => 3, // -1 is for all
			      'orderby'       => 'date', // or 'date', 'rand'
			      'order' 	      => 'ASC', // or 'DESC'
			    );

			    // Get the posts
			    $myposts = get_posts($args);

			    // If there are posts
			    if($myposts):

			      // Groups the posts in groups of $i
			      $chunks = array_chunk($myposts, $i);
			      $html = "";

			      /*
			       * Item
			       * For each group (chunk) it generates an item
			       */
			      foreach($chunks as $chunk):
			        // Sets as 'active' the first item
			        ($chunk === reset($chunks)) ? $active = "active" : $active = "";
			        $html .= '<div class="item '.$active.'">';

			        /*
			         * Posts inside the current Item
			         * For each item it generates the posts HTML
			         */
			        foreach($chunk as $post):
			          $html .= '<div class="latest-post" style="background-image: url('
								. get_the_post_thumbnail_url($post->ID)
								. ');
								background-position: center;
				    		background-repeat: no-repeat;
				    		background-size: cover;
				    		height: 40rem;"><div class="post-preview"><div class="post-meta"><span>'
								. get_the_category($post->ID)
								.'</span> | '
								. get_the_date()
								. '</div>'
								. '<h1><a href="'
								. get_permalink($recent["ID"])
								. '">'
								. get_the_title($post->ID)
								.'</a> </h1>'
								. '<p>'
								. get_the_excerpt($recent["ID"])
								.'</p> <a class="post-button" href="'
								. get_permalink($recent["ID"])
								.'">Read More</a>';
			          $html .= '</div></div>';
			        endforeach;

			        $html .= '</div>';

			      endforeach;

			      // Prints the HTML
			      echo $html;

			    endif;
			    ?>
				</div> <!-- /carousel-inner -->
			</div> <!-- /carousel -->
		</div> <!-- /col-md-7 -->

		</div> <!-- /container -->
	</div><!-- /section -->
