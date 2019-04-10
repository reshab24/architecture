<div class="about-section">
    <div class="container">
        <div class="row">
          <div class="col-xs-12 header-title">  
             <?php  if(get_sub_field('text_below_title')){?>
            <h1 class="background-title"><?php the_sub_field('text_below_title');?></h1>
            <h2 class="header"><?php the_sub_field('title');?></h2>
               <?php } ?>
           </div>
        </div>
         <div class="row">
            <div class="col-sm-6">
                 <?php  if(get_sub_field('content')) { ?>
                    <div class="sub-tilte"><?php the_sub_field('content')?></div>        
                 <?php } ?>     
            </div>
            <div class="col-sm-6">
                <img src="<?php the_sub_field("about_us_image"); ?>" alt="about"/>
            </div>    
        </div>
    </div>
</div>


