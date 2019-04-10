<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Thirteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>


<div class="content-container">
     
    <?php if ( have_posts() ) : ?>
         
        <h1>
            <?php
                if ( is_day() ) :
                    printf( __( 'Daily Archives: %s', 'kw-starter' ), get_the_date() );
                elseif ( is_month() ) :
                    printf( __( 'Monthly Archives: %s', 'kw-starter' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'kw-starter' ) ) );
                elseif ( is_year() ) :
                    printf( __( 'Yearly Archives: %s', 'kw-starter' ), get_the_date( _x( 'Y', 'yearly archives date format', 'kw-starter' ) ) );
                else :
                    _e( 'Archives', 'kw-starter' );
                endif;
            ?>
        </h1>
        
        <div class="posts">
            <?php /* The loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <h2>
                    <?php the_title(); ?>
                </h2>
                <?php the_content();?>
            <?php endwhile; ?>
        </div>

    <?php else : ?>
        <?php // no posts found code here ?>
        <?php _e( 'It looks like there are no posts in this category.', 'kw-starter' ); ?>
    <?php endif; ?>
    
</div>
<?php get_footer(); ?>