<?php /* Template Name: Contact */
$root = get_template_directory_uri();

get_header();
?>
<div class="shimmer"></div>

<?php 
	if(get_field('show_breadcrumbs')){
		get_template_part('partials/breadcrumbs');
	}
	 ?>

	 
<header class="is-heigh-hero-two is-centered">
	<div class="inner">
		<div class="hero-content-two is-contact-hero" style="max-width: 800px;">
			<h1 class="hero-tagline-two" ><?php the_field('header_tagline') ?></h1>
			<p class="mini-tagline-home is-contact"><?php the_field('tagline'); ?></p>
		</div>
	</div>
	<div class="is-hero-bg"  style='background-image: url(<?php the_field('header_background'); ?>)'></div>
</header>
	<?php 
	if(get_field('show_breadcrumbs')){
		get_template_part('partials/breadcrumbs');
	}
	 ?>
<section>
	<div class="inner has-btn-padding">
		<div class="contact-form-page-form">
			<div class="form-liner-contact">
					<?php the_field('form_area'); ?>
			</div>
		</div>
	</div>
</section>

<section class="letsconnect">
	<div class="inner is-centered has-btn-padding">
		<h1>Let's Connect</h1>
		<hr>
		<div class="social-nester">
			<a href="https://www.facebook.com/papasandbeer.rosarito"><i class="fa fa-facebook"></i></a>
			<a href="https://twitter.com/papasandbeer"><i class="fa fa-twitter"></i></a>
			<a href="https://www.instagram.com/papasandbeer/"><i class="fa fa-instagram"></i></a>
			<a href="http://www.snapchat.com/add/papasandbeer83"><i class="fa fa-snapchat"></i></a>
		</div>
	</div>
</section> 


<section class="two-card-block">
	<div class="inner has-btm-padding">
		<div class="the-two-section">
				

				<?php 

				$theTwoItems = get_field('two_card_section');

				if($theTwoItems){
				foreach($theTwoItems as $theItemer){?>
					<div class="two-card-it">
		 				<a href="<?php echo $theItemer['destination']; ?>">
							<h2><?php echo $theItemer['image_text']; ?></h2>
							<div class="two-card-it-bg"  style='background-image: url(<?php echo $theItemer['item_background']; ?>)'></div>
						</a>
					</div>
				<?php } 
					}
				?>




			<!-- <div class="two-card-it">
			<a href="">
				<h2>Directions</h2>
				<div class="two-card-it-bg"  style='background-image: url(<?php the_field('header_background'); ?>)'></div>
			</a>
			</div> -->
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



<?php
get_footer();
?>
