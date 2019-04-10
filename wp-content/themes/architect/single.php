<?php
/**
 * The template for displaying all single posts
 *
 */

get_header(); ?>

<div class="content-container">

    <?php while ( have_posts() ) : the_post(); ?>
    <div class="single-blog">
        <div class="single-img">
        <?php
            if ( has_post_thumbnail() ) {  
                the_post_thumbnail(get_the_ID(), 'full');
            }
        ?>
        </div>
        <div class="single-content">
            <div class="single-date"> 
                <i class="fa fa-clock-o"></i>
                <?php the_time('j F Y') ?>
            </div>
            <h2>
                <?php the_title(); ?>
            </h2>
            <?php the_content(); ?>
        </div>
    </div>
    <?php endwhile; ?>
<?php get_footer(); ?>
