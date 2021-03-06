<?php get_header(); ?>

<!-- begin skeleton grid container here -->
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
		</div>
		<div class="four columns">
			<?php get_sidebar(); ?>
		</div>
	</section>
</div>
<!-- end skeleton grid container here -->

<?php get_footer(); ?>