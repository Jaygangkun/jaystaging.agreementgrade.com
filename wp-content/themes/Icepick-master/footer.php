			<footer class="footer" role="contentinfo">
			
				<div class="container">
					<div class="footer-top">
						<div class="footer-logo-wrap">
							<img class="footer-logo__img" src="<?php echo get_template_directory_uri()?>/library/images/logo-black.svg">
						</div>
						<div class="footer-menu-wrap">
							<?php
							primer_footer_links();
							?>
						</div>
					</div>
					<div class="footer-bottom">
						<div class="footer-submit-wrap">
							<p class="footer-submit-label">Sign up for our newsletter:</p>
							<div class="form-group">
								<input type="email" placeholder="Enter email address">
								<span class="custom-btn custom-btn-blue">submit</span>
							</div>
						</div>
						<div class="footer-socials-wrap">
							<a class="footer-social-link-wrap">
								<i class="fa fa-linkedin"></i>
							</a>
							<a class="footer-social-link-wrap">
								<i class="fa fa-twitter"></i>
							</a>
						</div>
					</div>
				</div>
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<!-- all js scripts are loaded in library/primer.php -->
		<?php wp_footer(); ?>
		
		<!-- Bootstrap JS -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

	</body>

</html> <!-- end page. what a ride! -->
