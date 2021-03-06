<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?></title>
	<head>
	<?php wp_head(); ?>	
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>
<body>

<!-- 	begin header (header background will be outside of grid) -->
	<header>

<!-- 	begin skeleton grid container div (GRID STARTS HERE but it's INSIDE the header) -->
		<div class="container">

			<div class="row">

				<div class="twelve columns">
					<img id="slickslogo" src="http://www.elainebroussard.com/slicksautobody/wp-content/uploads/2016/12/slickslogo.png" alt="Slick's Auto Body logo" title="Slick's Auto Body" width="252">

			    	<nav id="mainmenu">
							<?php 
							wp_nav_menu(array(
								'sort_column' => 'menu_order', 
								'container_class' => 'blank-menu-header'
							));
						?>
					</nav>
				</div>

			</div>

		</div>
<!-- 	skeleton grid container div ENDS HERE -->

	</header>
<!-- 	end header -->