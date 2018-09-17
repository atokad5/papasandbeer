<?php // Template Name:  Home Page 
$root = get_template_directory_uri();
$heroImage = get_field('background_image'); 
$thehimg = get_field('small_hero_images');
?>


<?php get_header(); ?>
<header class="is-heigh-hero">
	<div class="shimmer"></div> 
	<div class="inner">
		<div class="hero-content">
			<h1 class="hero-tagline"><?php the_field('hero_tagline'); ?></h1>
			<span class="mini-tagline-home"><?php the_field('hero_minitagline'); ?></span>
			<div class="cta-parent-el">
				<a class="btn" href='<?php the_field('hero_btn_dest'); ?>'><span class="current-a"><?php the_field('hero_btn_text'); ?></span></a>
				<a class="learn-more" href="<?php the_field('hero_btn_small_dest'); ?>"><?php the_field('hero_btn_text_small'); ?></a>
			</div>
		</div>
				
			
			<div class="logo-parent-el">
				<?php 
					$thehimg = get_field('small_hero_images');
				if($thehimg){ 
					foreach($thehimg as $theImgr){ ?> 
						
						<div class="grid">
							<img src='<?php echo $theImgr['url']; ?>' alt="">
						</div>		
					
					<?php

					}
				}

				 ?>
			</div>
			
  </div>

	<div class="is-hero-bg"  style='background-image: url(<?php the_field('background_image'); ?>)'></div>
</header>


<section class="endless default-block">
	<div class="inner">
	
		<div class="inner-narrow">
			<div class="endless-el">
				<div class="half-el endless-item">
					<div class="half-liner">
						<h2 class="endless-miniheader"><?php the_field('endless_header'); ?></h2>
						<h1 class="endless-header"><?php the_field('endless_mini_header'); ?></h1>
						<ul class="endless-items">
							<?php the_field('endless_list_item'); ?>
						</ul>
						<a href="<?php the_field('endless_button'); ?>" class="btn"><span class="current-a"><?php the_field('endless_button_text'); ?></span></a>
				</div>
			</div>


				<div class="half-el endless-item">
					<figure class="endless-image">
						<img src='<?php the_field('endless_image');?>' alt="">
					</figure>
				</div>
			</div>
		</div>

	</div>
</section>




<section class="endless default-block video-section">
	<div class="inner">
		
		<div class="inner-narrow">


			<figure data-video='<?php the_field('video_link'); ?>' class="hotel-img is-video-ply-big">
				<img src='<?php the_field('video_image'); ?>' alt="">
					<div class="the-play-action">
					<i class="fa fa-play-circle-o" aria-hidden="true"></i>
						<p class="vid-text"><?php the_field('spring_break_video'); ?></p>
					</div>
					
			</figure>


				<div class="where-to-stay-box-1">
				<div class="half-liner">
					<h1 class="endless-header where-to-stayheader"><?php the_field('mini_header_item'); ?></h1>
					<figure class="flyers">
						<img src='<?php the_field('flyer_image'); ?>' alt="">
					</figure>
					<?php the_field('flyer_btn_text'); ?>
					<a href='<?php the_field('flyer_btn_dest'); ?>' class="btn"><span class="current-a">View Events</span></a>
				</div>
			</div>
			
			
			
	
		</div>


	</div>
</section>

<section class="endless default-block">
	<div class="inner">
		
		<div class="inner-narrow">

			<div class="is-containing is-right">
				<div class="where-to-stay-box is-lefter">
				<h1 class="endless-header where-to-stayheader"><?php the_field('where_to_stay_header'); ?></h1>
				<p><?php the_field('where_to_stay_tagline'); ?></p>
				<figure class="hotels">
					<img src=<?php the_field('where_to_stay_image'); ?> alt="">
				</figure>
				<a href='<?php the_field('where_to_stay_btn_dest'); ?>' class="btn"><span class="current-a"><?php the_field('where_to_stay_btn_txt'); ?></span></a>
			</div>
			
			<figure class="hotel-img">
				<img src='<?php the_field('where_to_stay_main_image'); ?>' alt="">
			</figure>
			</div>
			<div class="clear-block"></div>
		</div>

	</div>
</section>



 <section class="default-block">
 	<div class="inner">
 		<div class="inner-narrow is-grid">
 			<div class="grid-items is-reviews" style='background-image: url(<?php echo "$root/assets/img/home/reviewss.jpg"; ?>);'>
 				
 				<div class="review-title">
 					<h1>WORDS FROM THE COMMUNITY</h1>
	 				<p>Hear from those who have joined the fun.</p>
 				</div>
				
				<div class="reviewers">
					<?php 
					$review = get_field('reviews');
					foreach($review as $reviewer){?>
						<div class="the-reviewers">
							<blockquote>
								<?php echo $reviewer['review_message']; ?>
							</blockquote>
							<small>- <?php echo $reviewer['name']; ?></small>
						</div>
					<?php } ?>
				</div>
 			</div>
 			
 			<div class="grid-items" style='background-image: url(<?php echo "$root/assets/img/home/endlessbg.jpg"; ?>);'> 
				<div class="grid-liner">
					<h1>FOLLOW THE PARTY</h1>
				<p>See what we are up to and know what is going down at the club in real time by following us on snapchat.</p>
				<figure class="snapchat">
					<img src='<?php echo "$root/assets/img/home/snapchat-main.png"; ?>' alt="">
				</figure>
				</div>

 			</div>
 		</div>
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