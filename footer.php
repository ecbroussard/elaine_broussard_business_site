<!-- 	begin footer outside of grid -->
		<footer>

<!-- 		begin skeleton grid container -->
			<div class="container">
				<div class="row">
					<div id="footerone" class="three columns">
						<?php dynamic_sidebar('footer-one'); ?>
					</div>
					<div id="footertwo" class="three columns">
						<?php dynamic_sidebar('footer-two'); ?>
					</div>
					<div id="footerthree" class="three columns">
						<?php dynamic_sidebar('footer-three'); ?>
					</div>
					<div id="footerfour" class="three columns">
						<?php dynamic_sidebar('footer-four'); ?>
					</div>
				</div>	
			</div>
<!-- 		end skeleton grid container -->

		</footer>
<!-- 	end footer -->

	<?php wp_footer(); ?>
	<!-- Begin Unslider Initiator -->    
	<script>
	    $(function() { $('.my-slider').unslider({
	        autoplay: true,
	        arrows: false
	        });
	    });
	</script>
	<!-- End Unslider Initiator -->
</body>
</html>