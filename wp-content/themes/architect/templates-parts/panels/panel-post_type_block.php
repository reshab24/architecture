 <?php 
 $code= get_sub_field('select_post_type'); ?>
<div class="content-container">	
	<?php 
	$args = array(
    'post_type'=> $code,
    'post_status' => 'publish'
   
    );              

	$the_query = new WP_Query( $args );
	if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	
			<div class="post_wrapper">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h2 class="post-title"><?php the_title(); ?></h2>
					   	</div>
						<div class="col-sm-6">
						 	<?php the_post_thumbnail(); ?>
						 	<ul class="footer-widget-area-1 sidebar">
								<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widget-area-1')) : else : ?>
								<?php endif; ?>
							</ul>
					    </div>
					    <div class="col-sm-6">
							<div class="post-content">
								<div class="content"><?php the_excerpt(); ?></div>
								<?php if(get_the_excerpt()): ?>
									<div class="link-wrap">
									<a class="more-link" href="<?php the_permalink();?>">Read More</a>
				    				</div>
		    					<?php endif; ?>
		    				</div>
						</div>
				    </div>
			    </div>
			</div>
		<?php   endwhile;?>
	<?php endif; wp_reset_query();?>
</div>

         
