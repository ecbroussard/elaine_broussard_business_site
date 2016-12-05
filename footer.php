
		<footer class="row">
			<div class="container">
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
		</footer>
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