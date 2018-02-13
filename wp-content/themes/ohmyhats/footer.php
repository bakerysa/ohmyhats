<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ohmyhats
 */

?>

	</div><!-- #content -->
	<div class="newsletter">
		<!-- Begin MailChimp Signup Form -->
		<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
		<style type="text/css">
			#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
			/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
			   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
		</style>
		<div id="mc_embed_signup">
		<form action="https://bakery.us15.list-manage.com/subscribe/post?u=d193402af9e984cd092673007&amp;id=0ff20725da" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
		    <div id="mc_embed_signup_scroll">
			<label for="mce-EMAIL">Subscribe to our mailing list</label>
			<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
		    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
		    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_d193402af9e984cd092673007_0ff20725da" tabindex="-1" value=""></div>
		    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
		    </div>
		</form>
		</div>
		<!--End mc_embed_signup-->
	</div>

	<div class="end m-margin">
		<div class="container">
			<div class="copyright">
				<p>Copyright &copy; <?php echo date('Y'); ?> <span> Oh My Hats!</span> Designed by <a href="https://bakery.co.za">Bakery</a></p>
			</div>
			<div class="legal">
				<p>
					<a href="">Privacy Policy</a> / <a href="">Business</a> / <a href="">Contact Us</a>
				</p>
			</div>
			<div class="social">
				<a href="https://facebook.com"><i class="fa fa-facebook border-square" aria-hidden="true"></i></a>
				<a href="https://twitter.com"><i class="fa fa-twitter border-square" aria-hidden="true"></i></a>
				<a href="https://linkedin.com"><i class="fa fa-linkedin border-square" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
