<div class="contact-details">
    <div class="container ">
        <div class="row">
            <div class="contact-header-title">                  
                 <?php if(get_sub_field('text_below_title')){ ?>                     
                   <h1 class="background-title"><?php the_sub_field('text_below_title');?></h1>
                 <?php } ?>
                  <h2 class="contact-header"><?php the_title(); ?></h2>                     
              </div>
         </div>      
        <div class="row">
            <div class="col-md-6">
                <div class="contact-text">
                   <div class="contactus-content"><?php the_sub_field('content'); ?></div>   
                </div>
            </div>
            <div class="col-md-6">

           <?php $code= get_sub_field('form_shortcode');
    		echo do_shortcode("$code"); ?>

              
            </div>
        </div>
    </div>
</div>
