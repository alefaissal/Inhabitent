<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info footer-box">
					<div class="footer-container">
						<div class="contact-box">
							<p><span class="footer-title">Contact Info</span></p>
							<p><i class="far fa-envelope"></i> info@inhabitent.com</p>
							<p><i class="fas fa-phone-square"></i> 778-456-7891</p>
							<p><i class="fab fa-facebook-square"></i>  <i class="fab fa-instagram"></i>         <i class="fab fa-twitter-square"></i></p>
						</div>
						<div class="hours-box">
							<p><span class="footer-title">Business Hours</span></p>
							<p><span class="days-week">Monday-Friday:</span> 9am to 5pm</p>
							<p><span class="days-week">Saturday:</span> 10am to 2pm</p>
							<p><span class="days-week">Sunday:</span> Closed</p>
						</div>
						<div class="logo-box">
							<img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg" alt="inhabitent logo text">
						</div>
				</div>
						<div class="copyright-box">
							<p>Copyright <span>©2019</span> Inhabitent</p>
						</div>



				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer();?>

	</body>
</html>
