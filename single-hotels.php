<?php 
$root = get_template_directory_uri();

?>


<?php get_header(); ?>

<section class="default-block directions-hero hotels-loger is-hotel-push">

	<div class="inner">
		<figure class="mini-featured">
			<img src="<?php the_field('featured_mini_image'); ?>" alt="">
		</figure>

		<div class="the-main-image-hotel">

				<figure class="main-image-hotel">
					<img src='<?php the_field('main_image'); ?>' alt="">
				</figure>

				<div class="the-main-hotel-card">
					<div class="the-main-hotel-card-inner">
						<h1><?php the_field('card_title'); ?></h1>
						<figure class="hotel-pin">
							<img src='<?php echo "$root/assets/img/Directions/maps-and-flags2.png" ?>' alt="">
						</figure>
						<a  class="link-color" href="<?php the_field('card_link'); ?>"><?php the_field('card_link_text'); ?></a>
						<h2><?php the_field('card_walk_duration'); ?></h2>
						<div class="check-in-box">
							<p><strong>Check In:</strong> <?php the_field('check_in_'); ?></p>
							<p><strong>Check Out:</strong> <?php the_field('check_out'); ?></p>
						</div>
						<div class="btn-block">
							<a target='_blank' class="g-btn hotel-val" href="<?php the_field('expedia_link'); ?>">Book With Expedia
							<img class="exped" src='<?php echo "$root/assets/img/exped.png"; ?>' alt="">
							</a>
						</div>
					</div>
				</div>

		</div>


	</div>


</section>



<section class="hotel-media">
	<div class="inner">
		<h1>HOTEL MEDIA</h1>
	</div>
	<div class="the-image-slider-hotels">
	<?php 
	$hotelImg = get_field('hotel_gallery');

	foreach($hotelImg as $hotel) {?>
		

			<div class="the-food-item">
					<a class="food-image" href="<?php echo $hotel['url']; ?>" rel="lightbox">
						<figure >
							<img src='<?php echo $hotel['url']; ?>' alt="">
						</figure>
					</a>
				<p class='caption-food'><?php echo $hotel['caption']; ?></p>
			</div>

	<?php } ?>
	</div>
</section>

<section class="hotel-features">
	<div class="inner is-grey">
		<div class="the-features-content">

			<?php the_field('headline_for_features'); ?>
				<div class="btn-block">
					<a target='_blank' class="g-btn" href="<?php the_field('expedia_link'); ?>">Book With Expedia
					<img class="exped" src='<?php echo "$root/assets/img/exped.png"; ?>' alt=""></a>
				</div>
		</div>
		<h1 class="hotel-features-header">HOTEL FEATURES</h1>
		<div class="the-list-of-features">

			<?php 
				$fItem = get_field('features_item');

				foreach($fItem as $itemF){ ?>
			 	<div class="f-item-parent">
			 		<span class="the-item-features"><?php echo $itemF['hotel_features']; ?></span>
			 	</div>

			 <?php } ?>
		</div>
	</div>
</section>



<section class="mini-default-block is-hotel-questions">
	<div class="inner">
		<div class="faq-venue the-cat-nest is-active" data-founder=1>
			<h1>HOTEL FAQ's</h1>
			<?php 
				$faq = new WP_Query(array(
					'post_type' => 'faq',
					'tax_query' => array(
						array(
							'taxonomy' => 'faq-categories',
							'field' => 'slug',
							'terms' => 'traveling'
						),
						'orderby' => 'date',
						'order' => 'ASC'
					),
				));
			if($faq -> have_posts()): while ($faq -> have_posts()):
				$faq->the_post(); ?>
				
					<div class="the-question-nest">
						<div class="the-question-nest-inner">
							<div class="the-question">
								<p class="faq-title"><?php the_title(); ?></p>
								<div class="clicker-q">
									<span class='cl-top'></span>
									<span class='cl-btm'></span>
								</div>
							</div>
							<div class="the-answer">
								<?php the_field('answer'); ?>
							</div>

						</div>	
					</div>	
			<?php
			endwhile;
			endif;
			wp_reset_postdata();
			?>
		</div>

		<div class="btn-block">
			<a target='_blank' class="g-btn" href="<?php the_field('expedia_link'); ?>">Book With Expedia
			<img class="exped" src='<?php echo "$root/assets/img/exped.png"; ?>' alt=""></a>
		</div>
	</div>
</section>


<section class="borders the-hotel-single-carder">
	<div class="inner">
	
		<div class="the-border-cards hotels-carders">
	
			<div class="border-cards">
				<div class="border-cards--liner">
					<figure class="border-cards--icon">
						<img src='<?php 
						$passPortiCon = get_field('passport_icon');

						if($passPortiCon){
							echo $passPortiCon;
						}
						else{
							echo "$root/assets/img/Directions/passport.png"; 
						}
						?>' alt="">
					</figure>
					<h1 class="border-cards--title"><?php the_field('passport_title'); ?> </h1>
					<p class="border-cards--address"><?php the_field('passport_content'); ?></p>

					<a href="<?php the_field('passport_dest_link'); ?>" class="btn" style="color: white; text-decoration: none;"><span class="current-a">
						<?php
					 	$btnText = get_field('passport_button_text'); 
					 	if($btnText){
					 		echo $btnText;
					 	}
					 	else{
					 		echo "Learn More";
					 	}

					 	?></span></a>
				</div>
			</div>

		</div>
	</div>

		<div class="parking-section--background" style="background-image: url(
			<?php 
				$comingUpImg = get_field('passport_background_section');

				if($comingUpImg){
					echo $comingUpImg; 
				}
				else{
					echo "$root/assets/img/blurredhotel.jpg"; 
				}
				?>
			);">
		</div>

</section>



<section class="the-categories cat-hotel-singles">
	<div class="inner is-cat-parent">
		<?php 
			$eventItem = get_field('category_grid' , 'options');
			foreach($eventItem as $thegriditem){?>
				<div class="the-cat-grid">
					<a href="<?php echo $thegriditem['category_link']; ?>">
						<div class="the-cat-inner">
							<h1 class="category-title"><?php echo $thegriditem['category_name']; ?></h1>
						</div>
					</a>

					<div class="grid-bg" style="background-image: url(<?php echo $thegriditem['category_image']; ?>);"></div>
				</div>
		<?php } ?>
	</div>
</section>






	<footer class="footer-section default-b" style='background-image: url(<?php the_field('background_image', 'options'); ?>);'>
	<div class="inner">
		<div class="footer-liner">
			<?php the_field('have_questions_content', 'options'); ?>
		<a class="btn" href="<?php the_field('footer_link', 'options'); ?>"><span class="current-a"><?php the_field('footer_link_text', 'options'); ?></span></a>
		
		</div>
	</div>
</footer>




<?php get_footer(); ?>