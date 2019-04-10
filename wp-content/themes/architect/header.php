<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">		
		<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
		<!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> -->
		<title><?php wp_title(); ?></title> 
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>
<div class="site-container">	
		<nav id="main-nav" class="">
		<div class="menu-wrapper">
		 <div class="container">
		        <div class ="row">
		        <div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class=" navbar-collapse collapse " id="main-navbar-collapse">
					<?php
						$args = array(
							'menu'				=> 'Main Menu',
							'theme_location'    => 'header_menu',
							'container'     	=> 'div',
							'container_id'      => 'top-navigation_header',
							'container_class'   => 'top-navigation',
							'before'    		=> '<div class="arrow"><span>',
							'after'    			=> '</span></div>',
							'menu_class'        => 'main-menu nav navbar-nav', 
							'echo'          	=> true,
							'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'         	=> 10,
							'walker'        	=> ''
						);
						wp_nav_menu( $args );
					?>
				</div>
			  </div>
		</div>
	 </div>

			
		</nav>


