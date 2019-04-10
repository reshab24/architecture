<?php
if( have_rows('panels') ):
    while ( have_rows('panels') ) : the_row(); 
        switch( get_row_layout() ) {
            case 'slider_images' :                   
                get_template_part('templates-parts/panels/panel','banner');
                break;

            case 'about_us' :            		
                get_template_part('templates-parts/panels/panel','about_us');
                break;
            case 'sunshine_timber_frame_panel':
                get_template_part('templates-parts/panels/panel','sunshine_timber_frame_panel');
                break;
            case 'quote_panel' :
                get_template_part('templates-parts/panels/panel','quote_panel');
                break;  
            case 'content_panel' :
                get_template_part('templates-parts/panels/panel','content_panel');
                break;  
            case 'contact_page_panel' :
                get_template_part('templates-parts/panels/panel','contact_page_panel');
                break; 
            case 'instagram_shortcode' :
                get_template_part('templates-parts/panels/panel','instagram_shortcode');
                break;    
            case 'post_type' :
                get_template_part('templates-parts/panels/panel','post_type_block');
                break;  
           

            default :
                break;
        }
    endwhile;
else :
endif;