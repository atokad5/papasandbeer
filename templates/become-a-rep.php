<?php /* Template Name: Become A Rep */

	$root = get_template_directory_uri();



	$theHeroIcons = get_field('icon_section');
	get_header();
 ?>

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
		<div class="hero-content-two is-contact-hero" style="max-width: 900px;">
			<h1 class="hero-tagline-two" ><?php the_field('header'); ?></h1>
			<p class="mini-tagline-home is-contact" style="font-size: 1.2em;"><?php the_field('hero_content'); ?></p>
			
			<?php if($theHeroIcons) { ?>
			
			<div class="icon-packages">

				<?php 
				

					foreach($theHeroIcons as $theIcons) {?>

						<div class="iconer-pack">
							<figure class="iconer_img">
								<img src="<?php echo $theIcons['url'];?>" alt="">
							</figure>
							<h3><?php echo $theIcons['caption'];?></h3>
						</div>

					<?php 	
					}

				 ?>

			</div>




			<?php	} ?>
			<!-- <a href="" class="btn"><span class="current-a">APPLY BELOW</span></a> -->
		</div>
	</div>
	<div class="is-hero-bg"  style='background-image: url(<?php echo "$root/assets/img/becomerep/become-a-rep-header-without-black.png";?>)'></div>
</header>






	
<section>
	<div class="inner has-btn-padding">
		<div class="contact-form-page-form">
			<div class="form-liner-contact is-become-rep">

					<?php the_field('form_area'); ?>
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




<?php
get_footer();
?>








<?php 
	get_footer();
?>