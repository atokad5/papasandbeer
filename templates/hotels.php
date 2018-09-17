<?php // Template Name:  HOTELS Page 
$root = get_template_directory_uri();

?>


<?php get_header(); ?>
<?php 
	if(get_field('show_breadcrumbs')){
		get_template_part('partials/breadcrumbs');
	}
	 ?>



	<section class="default-block the-second-header" style="background-image: url(<?php the_field('header_background'); ?>);">
		<div class="inner">
		
			<h1><?php the_field('header_tagline'); ?></h1>
		</div>
	</section>




	<section class="the-hotels">
		<div class="inner">
			<?php 
			$theHotels =  new wp_query(array(
				'post_type' => 'hotels'
			));

			if($theHotels -> have_posts()): while($theHotels -> have_posts()):
				$theHotels -> the_post();
			 ?>
			<div class="the-hotel-parent-el">
				<div class="hotel-section">
					<figure class="featured-image">
							<img src="<?php the_field('main_image'); ?>" alt="">
					</figure>
				</div>


				<div class="hotel-section">
					<div class="inner-hotel-section">
						<figure class="mini-featured">
							<img src="<?php the_field('featured_mini_image'); ?>" alt="">
						</figure>
						<span class='hotel-address'>
							<span><strong>Address:</strong></span> <?php the_field('hotel_address'); ?>
						</span>
						<span class='hotel-summary'>
							<?php the_field('hotel_summary'); ?>
						</span>
						<div class="btn-el">
							<a class="btn" href='<?php the_permalink(); ?>'><span class="current-a">ROOM INFO</span></a>
						</div>
					</div>
				</div>
					
			</div>

			<hr>

		


			


			<?php 
				endwhile;
				endif;
				wp_reset_postdata();
			?>
			
		</div>
	</section>


	<?php 

	if(get_field('show_footer_image')){ ?>
	<footer class="footer-section default-b" style='background-image: url(<?php the_field('background_image', 'options'); ?>);'>
	<div class="inner">
		<div class="footer-liner">
			<?php the_field('have_questions_content', 'options'); ?>
		<a class="btn" href="<?php the_field('footer_link', 'options'); ?>"><span class="current-a"><?php the_field('footer_link_text', 'options'); ?></span></a>
		
		</div>
	</div>
</footer>
<?php } ?>


<?php get_footer(); ?>