<div class="push"></div>
</div> <!-- end .wrapper -->
			
			<!-- <div class="visible-xs">
				<a data-spy="affix" data-offset-bottom="500" class="affix-bottom btn btn-block" href="#top">back to the top</a>
			</div> -->
			<footer class="footer" role="site-info">

				<div class="container" id="contact">
					<h3>Richard Rossignol</h3>
					<ul class="phone">
						<li><a href="tel:+18054932136">Office: 805.493.2136</a></li>
						<li>|</li>
						<li><a href="tel:+18053687128">Cell: 805.368.7128</a></li>
					</ul>

					<ul class="social">
						<li><a href="https://twitter.com/RickRossignol" title="Follow me on Twitter" target="_blank">Twitter</a></li>
						<li><a href="https://www.facebook.com/RTR-Consulting-126585527053/" title="Find me on Facebook" target="_blank">Facebook</a></li>
						<li><a href="https://www.linkedin.com/in/rossignol" title="Connect with me on LinkedIn" target="_blank">LinkedIn</a></li>
						<li><a href="https://plus.google.com/u/0/+RickRossignolHRExperts/posts" title="Google+" target="_blank">google+</a></li>
					</ul>

					<a href="mailto:richard.rossignol@experthrconsulting.com">rick.rossignol@ExpertHRconsulting.com</a>

				</div> <!-- end .container -->

				<div id="inner-footer" class="wrap clearfix">
					<div class="container">
					<nav role="navigation">
							<?php bones_footer_links(); ?>
					</nav>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></p>
					</div> <!-- end .container -->

				</div> <!-- end #inner-footer -->

				

			</footer> <!-- end footer -->

		

		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>
		<!-- CUSTOM JS  -->
	<script type="text/javascript">
		jQuery(document).ready(function($){

     $('.navbar-toggle').bind( "touchstart", function(e){
          e.preventDefault();
            $('.navbar-collapse').collapse('toggle');
          });
			});

		</script>
	</body>

</html> <!-- end page. -->
