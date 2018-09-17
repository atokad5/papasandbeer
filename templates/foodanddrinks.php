<?php // Template Name: Menu Page 
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
			<?php 
	if(get_field('show_breadcrumbs')){
		//get_template_part('partials/breadcrumbs');
	}
	 ?>
		</div>
	</section>


<ul class="cat-itemers is-menu-picker">
<p class="wat_expect">SELECT A MENU</p>
	<li class="is-cat-clicker" data-cater=0 ><span class="click-item">BREAKFAST</span></li>
	<li class="is-cat-clicker" data-cater=1 >LUNCH & DINNER</li>
	<li class="is-cat-clicker is-selected" data-cater=2 >DRINKS</li>		
</ul>
	<div class="crumbs-in-hero">
		<?php 
	// if(get_field('show_breadcrumbs')){
	// 	get_template_part('partials/breadcrumbs');
	// }
	 ?>
	</div>

	<section class="min-pad select-menu">
		<div class="inner">
			<div class="menu-inner">
			<!-- 	<ul class="menu-tabs has-active">
					<li class="menu-item-trigger" data-target='0'>BREAKFAST</li>
					<li class="menu-item-trigger" data-target='1'>LUNCH & DINNER</li>
					<li class="menu-item-trigger" data-target='2'>DRINKS</li>
				</ul> -->

				<div class="menu-options the-cat-nest" data-founder=0>
					<div class="places-to--eat-top-section is-menu-titler">
			      <h1>BREAKFAST</h1>
			    </div>


					<div class="menu-item ">
					

						<?php 
							$breakfastimage = get_field('breakfast_menu');
							foreach($breakfastimage as $thebreakfast){ ?>
								<a class="theimage-menu" href="<?php echo $thebreakfast['image']; ?>" rel="lightbox">
									<figure>
										<img class="lightbox" src='<?php echo $thebreakfast['image']; ?>' alt="" rel='lightbox'>
									</figure>
								</a>
		
						 <?php } ?>
					</div>
				</div>

				<div class="menu-options the-cat-nest" data-founder=1>
					<div class="places-to--eat-top-section is-menu-titler">
			      <h1>LUNCH</h1>
			    </div>
					<div class="menu-item">
						<?php 
							$lunchimage = get_field('lunch_menu');
							foreach($lunchimage as $thelunch){ ?>
							<a class="theimage-menu" href="<?php echo $thelunch['image']; ?>" rel="lightbox">
								<figure>
									<img class="lightbox" src='<?php echo $thelunch['image']; ?>' alt="" rel='lightbox'>
								</figure>
							</a>
						 <?php } ?>
					</div>
				</div>

				<div class="menu-options is-active the-cat-nest" data-founder=2>
					<div class="places-to--eat-top-section is-menu-titler">
			      <h1>DRINKS</h1>
			    </div>
					<div class="menu-item">
						<?php 
							$drinkimage = get_field('drink_menu');
							foreach($drinkimage as $thedrink){ ?>
							<a class="theimage-menu" href="<?php echo $thedrink['image']; ?>" rel="lightbox">
								<figure>
									<img class="lightbox" src='<?php echo $thedrink['image']; ?>' alt="" rel='lightbox'>
								</figure>
							</a>
		
						 <?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>

<div class="inner">
		<hr class="the-spacer-bar">
</div>


<section class="food-main" style="position: relative;">

	<div class="inner">
		<h1>FOOD</h1>
	</div>
		<div class="food-parent">
			<div class="the-foodbar"></div>
				<div class="food-slider">
				<?php 
					$foodimage = get_field('food_slider');
					foreach($foodimage as $thefood){ ?>
						<div class="the-food-item">
						<a class="food-image" href="<?php echo $thefood['url']; ?>" rel="lightbox">
							<figure >
								<img src='<?php echo $thefood['url']; ?>' alt="">
							</figure>
						</a>
							<p class='caption-food'><?php echo $thefood['caption']; ?></p>
							
						</div>

				 <?php } ?>

				</div>
				
			</div>
			<div class="inner food-content">
			
		</div>

	</section>
	
	<div class="inner">
	<hr class="food-drink-sep">
	</div>


	<section class="food-main" style="position: relative;">

	<div class="inner">
		<h1>DRINKS</h1>
	</div>
		<div class="food-parent">
			<div class="the-foodbar"></div>
				<div class="food-slider">
				<?php 
					$drinksimage = get_field('drink_slider');
					foreach($drinksimage as $thedrink){ ?>
						<div class="the-food-item">
							<figure class="food-image">
							<img src='<?php echo $thedrink['url']; ?>' alt="">
						</figure>
						<p class='caption-food'><?php echo $thedrink['caption']; ?></p>
						</div>

				 <?php } ?>
				</div>
			</div>

			<div class="inner food-content">
			<?php the_field('drink_content'); ?>
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