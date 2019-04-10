<?php
/*
 * Template Name: Home
 * 
 */

 get_header(); ?>
<?php
if (have_posts()):
    while (have_posts()):
	the_post();
?>

<?php //get_template_part('templates-parts/panels/panel'); ?>
<div class="one-time">
	<div classs="first">
		<img src="<?php the_field('img1'); ?>">
		<div class="imgCard">
			<h1>Rishab</h1>
		</div>
	</div>
	<div classs="second">
		<img src="<?php the_field('image2'); ?>">
	</div>
</div>

<!-- <button class="pp">back</button>
<button class="nn">forward</button> -->

<div class="aboutOurCompany">
	<div class="container">
		<div class="section_one">
			<div class="row">
				<div class="col-sm-6">
					<img src="<?php the_field('left_image'); ?>">
				</div>
				<div class="col-sm-6">
					<div class="about_our_company">
						<?php the_field('about_our_company'); ?>
					</div>
					<div class="about_heading">
						<?php the_field('weve_been_creating__awesome_since'); ?>
					</div>
					<div class="about_discription">
						<?php the_field('about_content'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="rating_block">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="rating_block_one">
						<i class=" fa fa-gift"></i>
						<div class="contained">
							<h3><?php the_field('project_counter'); ?></h3>
							Project Done
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="rating_block_one">
						<i class=" fa fa-gift"></i>
						<div class="contained">
							<h3><?php the_field('clients'); ?></h3>
							Happy Clients
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="rating_block_one">
						<i class=" fa fa-gift"></i>
						<div class="contained">
							<h3><?php the_field('real_professional');?></h3>
							Happy Clients
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="rating_block_one">
						<i class=" fa fa-gift"></i>
						<div class="contained">
							<h3><?php the_field('cups_of_coffee'); ?></h3>
							Cups of Coffee
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php 
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

<?php if ( $wpb_all_query->have_posts() ) : ?>
<ul>
	<!-- the loop -->
	<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
	<li><?php the_post_thumbnail(); ?></li>
	<?php endwhile; ?>
	<!-- end of the loop -->
</ul>
<?php wp_reset_postdata(); ?>
<?php else : ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<div class="row">
	<div class="col-sm-8">
		<?php the_field('get_to_know_project_estimate'); ?>
		<?php the_field('estimate_content'); ?>
	</div>
	<div class="col-sm-4">
		<?php the_field('estimate_content'); ?>
	</div>
</div>


<?php 
$wpb_all_query = new WP_Query(array('post_type'=>'testimonials', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

<?php if ( $wpb_all_query->have_posts() ) : ?>
<ul>
	<!-- the loop -->
	<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
	<li><?php the_post_thumbnail(); ?></li>
	<?php endwhile; ?>
	<!-- end of the loop -->
</ul>
<?php wp_reset_postdata(); ?>
<?php else : ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<div class="row">
	<div class="col-sm-8">
		<?php the_field('get_to_know_project_estimate'); ?>
		<?php the_field('estimate_content'); ?>
	</div>
	<div class="col-sm-4">
		<?php the_field('estimate_content'); ?>
	</div>
</div>
<h1 class="right">DFERFVVVV</h1>
<?php
    endwhile;
endif;
?>
<?php get_footer(); ?>