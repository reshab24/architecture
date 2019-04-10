<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 */

get_header(); ?>

	
<div class="content-container error-page">
  	<div class="container">
  		<div class="row">	
  			<div class="col-xs-12">			
			    <h2 class="page-title"><?php _e( 'Oops! 404 - Page Not Found', 'kw-starter' ); ?></h2>
			       
			    <p><?php _e( 'It looks like nothing was found at this location.', 'kw-starter' ); ?></p>
  			</div>
  		</div>
  	</div>
</div>

<?php get_footer(); ?>