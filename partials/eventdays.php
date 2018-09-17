<?php 
		$root = get_template_directory_uri();
		$i = 0;
 ?>

<section class="is-eightteen">
	<div class="inner">
		<div class="eightteener-content">
			<div class="age">18+</div>
			<p class="ei-content"><?php the_field('main_section_text'); ?></p>

			<div class="video-player-v">
				<i  data-video="<?php the_field('video_url') ?>" class="fa fa-play the-v-player is-video-ply" aria-hidden="true"></i>
			</div>
			<p class="watch-spring"><?php the_field('watch_video_call_out'); ?></p>
		</div>
	</div>
	<div class="is-section-bg-eightteen" style="background-image: url(<?php echo "$root/assets/img/Venue/18upimage.jpg"; ?>);"></div>
</section>




<section class="parties-v">


		<div class="item-box-parties night_parties-item">

			<div class="is-parties-inner">
					<?php the_field('night_parties_offer') ?>
					<ul>
						<?php 
							$getList = get_field('night_parties_items');

							foreach($getList as $theList) { ?>
							<li><i class="fa fa-check" aria-hidden="true"></i> <?php echo $theList['list_item'] ?></li>
						<?php } ?>
					</ul>
					<a href="<?php the_field('button_link'); ?>" class="btn"><span class="current-a">VIEW EVENTS</span></a>
			</div>



			<div class="clear-block"></div>
			<div class="background-box" style="background-image: url(<?php echo "$root/assets/img/Venue/nightparties.jpg"; ?>);"></div>
		</div>
		

		<div class="item-box-parties">

			<div class="is-parties-inner">
					<?php the_field('day_parties_offer') ?>
					<ul>
						<?php 
							$getDayList = get_field('day_parties_items');

							foreach($getDayList as $theDayList) { ?>
							<li><i class="fa fa-check" aria-hidden="true"></i> <?php echo $theDayList['list_item'] ?></li>
						<?php } ?>
					</ul>
					<a href="<?php the_field('button_link_day'); ?>" class="btn"><span class="current-a">VIEW EVENTS</span></a>
			</div>



			<div class="clear-block"></div>
			<div class="background-box" style="background-image: url(<?php echo "$root/assets/img/Venue/dayparties.jpg"; ?>);"></div>
		</div>



</section>












<section class='the-book-trip'>
	<div class="inner">
			<div class="the-book-content">
				<?php the_field('section_main_section') ?>
			</div>


			<div class="the-box-grid-book">
				<?php 
				$scb = get_field('the_section_content_block');

				foreach($scb as $theScb) {
					$i++;
				 ?>
				 	<div class="boxes-book">
						<div class="book-inner">
							<div class="the-numbers-book"><?php echo $i ?></div>
							<?php echo $theScb['section_content_block']; ?>
							<a href="<?php echo $theScb['section_link']; ?>">VIEW EVENTS</a>
						</div>
					</div>
				<?php } ?>
			

			<!-- 	<div class="boxes-book">
					<div class="book-inner">
						<div class="the-numbers-book">2</div>
						<h1>SELECT YOUR EVENT</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, iste, repellendus. Suscipit facilis sed autem illum excepturi dicta aperiam temporibus.</p>
						<a href="">VIEW EVENTS</a>
					</div>
				</div>

				<div class="boxes-book">
					<div class="book-inner">
						<div class="the-numbers-book">3</div>
						<h1>SELECT YOUR EVENT</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, iste, repellendus. Suscipit facilis sed autem illum excepturi dicta aperiam temporibus.</p>
						<a href="">VIEW EVENTS</a>
					</div>
				</div> -->
			</div>
	</div>
</section>





<section class="theday-slider">
	<div class="inner">
		<div class="day-slider--content">
			<?php the_field('gallery_content'); ?>
		</div>
	</div>
			<div class="the-image-slider-hotels">
			<?php $theImger = get_field('section_image_gallery');

			foreach($theImger as $theImg){
			 ?>

				<div class="the-food-item">
						<a class="food-image" href="" rel="lightbox">
							<figure >
								<img src='<?php echo $theImg['url'] ;?>' alt="">
							</figure>
						</a>
					<p class='caption-food'></p>
				</div>

		<?php } ?>
	<?php 
		//for($i = 0; $i < 15; $i++){
	?>
			<!-- <div class="the-food-item">
					<a class="food-image" href="" rel="lightbox">
						<figure >
							<img src='<?php //echo "$root/assets/img/home/reviewss.jpg";?>' alt="">
						</figure>
					</a>
				<p class='caption-food'></p>
			</div> -->



		


		</div>

</section>



