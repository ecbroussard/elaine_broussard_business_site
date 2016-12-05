<?php get_header(); ?>

<!-- Begin Section Container -->
<div class="container">
	<section class="row">
		<div class="eight columns page-content">
			<!-- Begin Loop -->
			<?php
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post(); ?>
						<h2 class="pagetitle"><?php the_title(); ?></h2>
						<?php the_content(); ?>				
					<?php	
					} //end while
				} //end if
			?>
			<!-- End Loop -->
			<div id="contactpageform">
				<h3>Get A Free Quote</h3>
				<form method="post" action="http://www.elainebroussard.com/slicksautobody/wp-content/themes/elaine_broussard_business_site/contact-form.php">
						<label for="Name">Name:</label>
						<input type="text" name="Name" id="Name" />
						<label for="Car">Car Make/Model:</label>
						<input type="text" name="Car" id="Car" />
						<label for="Email">Email:</label>
						<input type="text" name="Email" id="Email" />
						<label for="Year">Car Year:</label>
						<input type="text" name="Year" id="Year" />
						<label for="Message">Summary of Repairs Needed:</label><br />
						<textarea name="Message" rows="4" cols="70" id="Message"></textarea>
						<input type="submit" name="submit" value="Submit" class="submit-button" />
				</form>
			</div>
		</div>
		<div class="four columns">
			<?php get_sidebar(); ?>
		</div>
	</section>
</div>
<!-- End Section Container-->

<?php get_footer(); ?>