<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/meniu.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
					$('ul.sf-menu').superfish({
						delay:       450,                           
						animation:   {opacity:'show',height:'show'},  
						speed:       'fast',                         
						autoArrows:  true,                           
						dropShadows: false,                            
						disableHI:   true                         
					});
			});
		</script>
		<?php wp_head(); ?>
	</head>
	<body>
		<div class="wrapper">
			<div id="meniu">
				<?php if ( has_nav_menu( 'primary-menu' ) ) { wp_nav_menu( array( 'menu_class' => 'sf-menu', 'theme_location' => 'primary-menu' ) );}  ?>
			</div>