</div>

<?php if( get_field('instagram_feed_bar') ):?>
	<div class="section-instagram">
		<div class="container">	 
			<div class="row">
				<div class="instagram-block">	
					<p class="instagram-text">
						<?php if(get_theme_mod('instagram-text')){ ?>
					    <?php echo get_theme_mod('instagram-text'); ?>		              
						<?php } ?>
						<?php if(get_theme_mod('instagram')){ ?>
					<a href="<?php echo get_theme_mod('instagram'); ?>" target="_blank">
					<?php } ?>
					    <img class="insta-icon" src="<?php echo get_template_directory_uri() ?>/images/insta.png" alt="insta">
					</a></p>
					 			    
				</div>
			</div>	
		</div>
	</div>
<?php endif; ?>


<div class="footer">
	<div class="container-fluid">	 
		<div class="row">
			<div class="footer-wrapper">			
			    <div class="footer-wrap col-sm-3">
			    	<div class="footer-logo footer-spacer">
			    	<a href="<?php echo bloginfo('url'); ?>">
						<img class="img-responsive normal-logo" src="<?php echo get_theme_mod('footer_logo'); ?>" alt="<?php echo get_bloginfo('name'); ?>">
					</a>
					<?php if(get_theme_mod('site_text')){ ?>
					    <p class="footer-site-text"><?php echo get_theme_mod('site_text'); ?>		              
					<?php } ?></p>
				     </div>
			    </div>
			    <div class="footer-wrap col-sm-3">
			    	<div class="footer-contactdetails footer-spacer">
						<?php if(get_theme_mod('phone')){ ?>
					        <div class="footer-phone">
					            <a href="tel:<?php echo get_theme_mod('phone'); ?>" >
					             	<img class="phone-icon" src="<?php echo get_template_directory_uri() ?>/images/phone.png" alt="phone">
					              <span><?php echo get_theme_mod('phone'); ?></span>
					            </a>
					        </div>
					 <?php } ?>
					 	<?php if(get_theme_mod('footer-email')){ ?>
					        <div class="footer-mail">
					            <a href="mailto:<?php echo get_theme_mod('footer-email'); ?>" >
					                <img class="message-icon" src="<?php echo get_template_directory_uri() ?>/images/msg.png" alt="message">
					                <span><?php echo get_theme_mod('footer-email'); ?></span>
					            </a>
					        </div>
					    <?php } ?> 
					</div>
			    </div>
			    <div class="footer-wrap col-sm-3">
			    	<div class="footer-nav">
			    		<div class="footer-menu">
			    			<div class="collapse navbar-collapse" id="main-navbar-collapse_footer">
								<?php
									$args = array(
										'menu'				=> 'Main Menu',
										'theme_location'    => 'header_menu',
										'container'     	=> 'div',
										'container_id'      => 'top-navigation_footer',
										'container_class'   => 'top-navigation',
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
			    <div class="footer-wrap col-sm-3">
			    	<div class="footer-text footer-spacer">
			    	<?php if(get_theme_mod('footertext')){ ?>
					    <?php echo get_theme_mod('footertext'); ?>		              
					<?php } ?>
				   </div>
			    </div>
			</div>
	  	</div>
 	</div>
</div>
<div class="copyright">
	<div class="container">
	  	<div class="row">
	    	<div class="footercopyright">
	    		<?php if(get_theme_mod('privacytext')){ ?>
			    	<?php echo get_theme_mod('privacytext'); ?>		              
				<?php } ?>
	    	</div>
	 	</div>
	</div>
</div>
<!-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js'></script>
<script type='text/javascript'>
  WebFont.load({
    google: {
      families: [
         
         'Mr Dafoe: cursive',
         'Montserrat: sans-serif'
      ]
    }
  });
</script>
<?php wp_footer(); ?>
</body>
</html>