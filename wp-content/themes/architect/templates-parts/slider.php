

<?php
if( have_rows('slider_images') ):

    while ( have_rows('slider_images') ) : the_row();

        if( get_row_layout() == 'slider_image' ): 

        	if( have_rows('banner') ):

			    while ( have_rows('banner') ) : the_row(); ?>

					<div class="banner-background" style="background-image: url('<?php the_sub_field("image"); ?>')"></div>
					
				<?php endwhile;
			endif;
		 endif;
    endwhile;

else :
endif;
