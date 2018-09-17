<?php /* Template Name: Directions */
$root = get_template_directory_uri();

get_header();
?>

<?php 
	if(get_field('show_breadcrumbs')){
		get_template_part('partials/breadcrumbs');
	}
	 ?>

	 
<div class="shimmer"></div>
<div class="shimmer remove-me"></div>

<section class="default-block directions-hero">
	<div class="inner">
	<?php 
	// if(get_field('show_breadcrumbs')){
	// 	get_template_part('partials/breadcrumbs');
	// }
	 ?>
			<figure class="the-marker">
				<img src='<?php echo "$root/assets/img/Directions/map.png" ?>' alt="">
			</figure>
			<h1 class="directions-title"><?php the_field('header_title'); ?></h1>
			<img class="the-pin" src='<?php echo "$root/assets/img/Directions/maps-and-flags2.png" ?>' alt=""><span class="directions-tagline"><a target="_blank" href="https://goo.gl/maps/ZP6sGeN9xC42"><?php the_field('header_location'); ?></a></span>

			<div class="the-map-el">
				<figure class="the-map">
					<img src='<?php echo "$root/assets/img/Directions/directions-v3-header-image.png" ?>' alt="">
				</figure>
				<div class="map-card">
					<div class="map-card-inner">
							<h3 class="map-card-header"><?php the_field('card_title'); ?></h3>
							<p class="map-card-content"><?php the_field('card_summary'); ?></p>

							

							<a target='_blank' class="g-btn hotel-val" href="<?php the_field('card_cta_dest') ?>"><?php the_field('card_cta_text'); ?>
							<img class="exped" src='<?php echo "$root/assets/img/goog.png"; ?>' alt="">
							</a>



					</div>
				</div>
			</div>
	</div>
</section>

<div id="parking"></div>

<section class="parking-section default-block">
	<div class="inner">


		<div class="parking-card">
			<div class="parking-card--liner">
				<h3 class="parking-card--header">
				<img class="parking-card--car" src="<?php echo "$root/assets/img/Directions/car.png"; ?>" alt=""><span>Parking</span></h3>
				<ul class="parking-card--list">
					
						<?php
						$item = get_field('parking_list');

						foreach($item as $itemval){ ?>
						<li><?php echo $itemval['parking_list_item'];?></li>	

						<?php } ?>
					
				</ul>
			</div>
		</div>
			
	</div>
	<div class="parking-section--background" style="background-image: url(<?php echo "$root/assets/img/Directions/cfest-31.jpg"; ?>);"></div>
</section>
<div id="bords"></div>

<section class="borders">
	<div class="inner">
		<?php the_field('borders_title'); ?>

		<div class="the-border-cards">

			<?php 
			$bords = get_field('border_cards');
			foreach($bords as $border){  ?>
			<div class="border-cards">
				<div class="border-cards--liner">
					<figure class="border-cards--icon">
						<img src='<?php echo "$root/assets/img/Directions/passport.png" ?>' alt="">
					</figure>
					<h1 class="border-cards--title"><?php echo $border['card_title']; ?></h1>
					<p class="border-cards--address"><?php echo $border['card_address']; ?></p>
					<p><strong><?php echo $border['card_avail']; ?></strong></p>
					<a target="_BLANK" href="<?php echo $border['card_dest']; ?>"><?php echo $border['card_link_text']; ?></a>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</section>


<section class="borders">
	<div class="inner has-options">
		
		<?php the_field('walking_across'); ?>
		
	</div>
</section>
<div id="airports"></div>

<section class="the-airports" style="position: relative;">
	<div class="inner">
	<h1 class="nearby-ports-title">NEARBY AIRPORTS</h1>
		<div class="the-border-cards for-airports">

			<?php 
			$air = get_field('airport_cards');

			foreach($air as $aircards){  ?>
			<div class="border-cards">
				<div class="border-cards--liner">
					<figure class="border-cards--icon">
						<img src='<?php echo "$root/assets/img/Directions/airplane.png" ?>' alt="">
					</figure>
					<h1 class="border-cards--title"><?php echo $aircards['card_title']; ?></h1>
					<p class="border-cards--address"><?php echo $aircards['card_address']; ?></p>
					<p><strong><?php echo $aircards['card_avail']; ?></strong></p>
					<a target="_BLANK" href="<?php echo $aircards['card_dest']; ?>"><?php echo $aircards['card_link_text']; ?></a>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
	<div class="parking-section--background airport-bg" style="background-image: url(<?php echo "$root/assets/img/Directions/airport_image_papasandbeer.jpg"; ?>);"></div>
</section>





<section class="mini-default-block">
	<div class="inner">
		<div class="faq-venue the-cat-nest is-active" data-founder=1>
			<h1><?php the_field('faq_title_section') ?></h1>
			<?php 

				$getCat = get_field('faq_category');
				$newA = explode(' ', $getCat);

				$faq = new WP_Query(array(
					'post_type' => 'faq',
					'tax_query' => array(
						array(
							'taxonomy' => 'faq-categories',
							'field' => 'slug',
							'terms' => $newA
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
	</div>
</section>





<?php get_template_part('partials/upcomingevents'); ?>

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



<?php 

get_footer();

?>