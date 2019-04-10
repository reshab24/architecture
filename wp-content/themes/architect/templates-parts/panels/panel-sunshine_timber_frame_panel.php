<section class="portfolio" 
style="background-image:url('<?php the_sub_field("background_image"); ?>')">
  <div class="layer">
      <div class="container">
          <div class="row">
             <h2 class="sunshine-title"><?php the_sub_field("title"); ?></h2>               
          </div>
          <div class="row">   
            <h4 class="sunshine-subtitle"><?php the_sub_field("sub_title"); ?></h4>         
          </div>
        <div class="row">
        <?php         
            if( have_rows('sunshine_timber_frame_repeater') ):
            while ( have_rows('sunshine_timber_frame_repeater') ) : the_row();?>
              <div class="col-sm-4">
               <div class="sunshine-bgimg" style="background-image: url('<?php the_sub_field("image"); ?>');"></div>
                <h4 class="sunshine-contenttitle"><?php the_sub_field("title"); ?></h4>
                <div class="sunshine-content"><?php the_sub_field("content"); ?></div>                
                </div>
            <?php endwhile;
            endif;
        
      ?>
        </div>
    </div>
</div>
</section>

