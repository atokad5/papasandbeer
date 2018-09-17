<?php // Template Name:  rosarito Page 
$root = get_template_directory_uri();

$imgRoot = $root.'assets/img/rosarito/';
$imgRootNew = $root.'assets/img/rosa-new/';
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

		
	<section class="the-subheader">
		<div class="inner">

			<div class="the-beachtown-card">
				<div class="beachtown-inner">
				 	<?php the_field('beach_town_card'); ?>
					<ul class="icon-flex">
							<a href="#hotels" class="target-linkers" style="text-decoration: none; color: black;">
								<li class="img-pe is-cat-clicker" data-cater=2>
									<img src='<?php echo "$root/assets/img/rosarito/hotel.png"; ?>' alt="">
									<span>HOTELS</span>
								</li>
							</a>
							<a href="#activities" class="target-linkers" style="text-decoration: none; color: black;">
							<li class="img-pe is-cat-clicker" data-cater=1 >
								<img src='<?php echo "$root/assets/img/rosarito/activities.png"; ?>' alt="">
								<span>Activities</span>
							</li>
							</a>
							<a href="#placestoeat" class="target-linkers" style="text-decoration: none; color: black;">
							<li class="img-pe is-cat-clicker" data-cater=0>
								<img src='<?php echo "$root/assets/img/rosarito/eat.png"; ?>' alt="">
								<span>Places To eat</span>
							</li>
							</a>
							<div class="clear-block"></div>
					</ul>
				</div>
			</div>


			<div class="the-beach-mapper">
				<figure class="beach-mapper">
					<img src='<?php the_field('section_one_main_image'); ?>' alt="">	
				</figure>
			</div>

			<div class="clear-block"></div>
		</div>		
	</section>



	<section class="hasboxshadow">
		<ul class="cat-itemers is-venue_clicker">
		<p class="wat_expect">Learn Rosarito</p>
		<li class="is-cat-clicker" data-cater=2 >
			<figure class="clicker-icons">
			<img src='<?php echo "$root/assets/img/rosarito/hotel.png"; ?>' alt="">
			</figure>
		HOTELS</li>
		<li class="is-cat-clicker is-selected is-car" data-cater=1 >
		<figure class="clicker-icons">
			<img src='<?php echo "$root/assets/img/rosarito/activities.png"; ?>' alt="">
			</figure>
			ACTIVITIES</li>
		<li class="is-cat-clicker" data-cater=0 >
		<figure class="clicker-icons">
		<img src='<?php echo "$root/assets/img/rosarito/eat.png"; ?>' alt="">
			</figure>
			PLACES TO EAT</li>		
	</ul>
	
	
	</section>


<div class="menu-options the-cat-nest" data-founder=0>
	<div id="placestoeat"></div>
<?php get_template_part('partials/placestoeat'); ?>
</div>

<div class="menu-options the-cat-nest is-active" data-founder=1>
	<div id="activities"></div>
<?php get_template_part('partials/activities') ?>
</div >

<div class="menu-options the-cat-nest" data-founder=2>
	<div id="hotels"></div>
<?php get_template_part('partials/hotels') ?>
</div>




<section class="the-mapping">
	<div class="inner">
		<div class="the-map-el">
				<figure class="the-map">
					<img src='<?php echo "$root/assets/img/Directions/directions-v3-header-image.png" ?>' alt="">
				</figure>
				<div class="map-card is-higher">
					<div class="map-card-inner">
							<h3 class="map-card-header"><?php the_field('scenic_title'); ?></h3>
							<p class="map-card-content"><?php the_field('scenic_content'); ?></p>
							<a target="_BLANK" class="g-btn" href="<?php the_field('directions_dest_link') ?>">GET DIRECTIONS</a>
					</div>
				</div>
			</div>
		<div class="clear-block"></div>
	</div>
</section>


<section class="welcome-rosa">
	<div class="inner">
		
		<div class="the-welcome-content">
			<figure class="welcome-icon">
				<img src="<?php echo "$root/assets/img/rosa-new/welcomelogo.png" ; ?>" alt="">
			</figure>
			<h1><?php the_field('official_title'); ?></h1>
			<p><?php the_field('official_content'); ?></p>
			<a target="_BLANK" href="<?php the_field('official_dest'); ?>" class="g-btn">VISIT WEBSITE</a>

		</div>
		
		<div class="is-section-bg"  style='background-image: url(<?php echo "$root/assets/img/rosa-new/rosaritowithblur.png";?>)'></div>
	</div>
</section>






<section class="the-header_er">
	<div class="inner">
		<h1 class="opendays-header optitle"><?php the_field('categories_section_header'); ?></h1>
	 		<p class="opendays-texts"><?php the_field('categories_section_content'); ?></p>
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



<?php get_footer(); ?>