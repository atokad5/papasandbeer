<?php /* Template Name: The Venue */
	
	$root = get_template_directory_uri();

	get_header();
?>

<?php 
	if(get_field('show_breadcrumbs')){
		get_template_part('partials/breadcrumbs');
	}
	 ?>
<section class="the-venue-header">
	<div class="inner">
	

	
			<div class="venue-hero-content">

				<div class="the-content-item-v">
					<div class="the-content-item-v-inner">

						<div class="the-header-v">
							<h1><?php the_field('hero_text') ?></h1>
							<figure class="under-line">
								<img src="<?php echo "$root/assets/img/Venue/brushstroke.png"; ?>" alt="">
							</figure>
						</div>
						<p class="the-tagline-v"><?php the_field('hero_sub_text'); ?></p>
					</div>
				</div>

				<div class="the-content-item-v">
					<div class="the-content-item-v-inner">
						<figure class="the-layout">
							<img src="<?php 
							$venueImg = get_field('main_venue_image');

							if($venueImg){
								echo $venueImg;
							}
							else{
								echo "$root/assets/img/Venue/venuelayout.png";
							}

							?>" alt="">
						</figure>
					</div>
				</div>

				<div class="clear-block"></div>

				<p class="thelocation-v">
					<a target="_BLANK" href="<?php the_field('hero_link'); ?>"><img class="the-pin" src='<?php echo "$root/assets/img/Directions/maps-and-flags2.png" ?>' alt=""> <?php the_field('hero_link_text'); ?></a>
				</p>

			</div>




	</div>
	<div class="venue-bg" style="background-image: url(
		<?php 
			$venueBbg = get_field('venue_background');

			if($venueBbg){
				echo $venueBbg;
			}
			else{
				echo "$root/assets/img/Venue/venue-header.jpg"; 
			}

		?>);"></div>
</section>

<ul class="cat-itemers is-venue_clicker">
	
	<p class="wat_expect">WHAT TO EXPECT</p>

		<li class="is-cat-clicker" data-cater=2 >
			<figure class="clicker-icons">
				<img src="<?php echo "$root/assets/img/Venue/thevenue_7.png"; ?>" alt="">
			</figure>
			VENUE LAYOUT
		</li>

		<li class="is-cat-clicker is-selected" data-cater=1 >
		<figure class="clicker-icons">
				<img src="<?php echo "$root/assets/img/Venue/calendar.png"; ?>" alt="">
			</figure>EVENT DAYS
		</li>

		<li class="is-cat-clicker" data-cater=0 >
		<figure class="clicker-icons">
				<img src="<?php echo "$root/assets/img/Venue/palmtrees.png"; ?>" alt="">
			</figure>NON-EVENT DAYS
		</li>	

</ul>


	

	<div class="menu-options the-cat-nest" data-founder=2>
		<?php get_template_part('partials/venuelayout'); ?>
	</div>

	<div class="menu-options the-cat-nest is-active" data-founder=1>
		<?php get_template_part('partials/eventdays'); ?>
	</div >

	<div class="menu-options the-cat-nest" data-founder=0>
		<?php get_template_part('partials/noneventdays'); ?>
	</div>



<section class="the-header_er">
	<div class="inner">
		<h1 class="opendays-header optitle"><?php the_field('section_title'); ?></h1>
	 		<p class="opendays-texts"><?php the_field('section_content'); ?></p>
	</div>
</section>



<section class="the-categories cat-hotel-singles is-venue-catr">
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
