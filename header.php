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
	<header class="row">
		<div id="slickslogo" class="four columns">
			<img src="http://www.elainebroussard.com/slicksautobody/wp-content/uploads/2016/12/slickslogo.png" alt="Slick's Auto Body logo" title="Slick's Auto Body" width="252">
    	</div>
    	<nav class="eight columns">
				<?php 
				wp_nav_menu(array(
					'sort_column' => 'menu_order', 
					'container_class' => 'blank-menu-header'
				));
			?>
		</nav>
	</header>