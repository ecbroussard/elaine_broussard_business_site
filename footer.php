
		<footer class="row">
			<div class="four columns">
				<?php dynamic_sidebar('footer-one'); ?>
			</div>
			<div class="four columns">
				<?php dynamic_sidebar('footer-two'); ?>
			</div>
			<div class="four columns">
				<?php dynamic_sidebar('footer-three'); ?>
			</div>
		</footer>
	</div> <!-- End Container Div -->
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