<div class="inthenews-section">
    <div class="container ">
        <div class="width-container ">
            <div class="row">
                <div class="header-title">
                     <?php if(get_sub_field('text_below_title')){ ?>                     
                      <h1 class="background-title"><?php the_sub_field('text_below_title');?></h1>
                     <?php } ?>
                      <h2 class="header"><?php the_title(); ?></h2>
                  </div>
            </div>

            <div class="page-content"><?php the_sub_field('content'); ?>
            </div>
        </div>
    </div>
</div>
