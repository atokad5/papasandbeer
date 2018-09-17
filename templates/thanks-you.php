<?php /* Template Name: Thank You Template */
$root = get_template_directory_uri();

get_header();
?>
<?php 
	if(get_field('show_breadcrumbs')){
		get_template_part('partials/breadcrumbs');
	}
	 ?>
<section class="th-header default-block">
	<div class="inner">
			<div class="th-content-block">
				<div class="th-content-liner">
					<h1>THANK YOU!</h1>
					<p>Your order has been confirmed!</p>
					<p>a confirmation email has been sent to your email</p>
					<!-- <p><strong>Order #[ORDER NUMBER GOES HERE]</strong></p> -->
					<!-- <figure class="conf-img">
						<img src="<?php echo "$root/assets/img/LaborDay.png" ?>" alt="">
					</figure>  -->
						<div class="social-share">
				      share this event<a class='btn-social' href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
	           <a class='btn-social' href="http://twitter.com/share?url=http:<?php the_permalink(); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				    </div>

				    <a href="<?php site_url(''); ?>" class="btn"><span class="current-a">VISIT HOME PAGE</span></a>
				</div>
			</div>
	</div>
	<div class="th-bg" style="background-image: url(<?php echo "$root/assets/img/home/endlessbg.jpg"; ?>);"></div>
</section>



<section class="the-howto">
	<div class="inner">
		<h1>HOW TO PICK UP YOUR PARTY PACKAGE</h1>
		<ol>
			<li>Visit Papas&Beer Will Call, right across the street from the Papas&Beer venue.</li>
			<li>You will see pick-up sections by last name A-H, I-Q, R-Z. You must pick up your party package from 10am - 11pm.</li>
			<li>You must have a valid ID to pick up your packages.</li>
		</ol>
	</div>
</section>


<section class="the-mapping">
	<div class="inner">
		<img class="the-map-ic" src="<?php echo "$root/assets/img/Directions/map.png"; ?>" alt="">
		<div class="the-map-el">
				<figure class="the-map">
					<img src='<?php echo "$root/assets/img/Directions/directions-v3-header-image.png" ?>' alt="">
				</figure>
				<div class="map-card">
					<div class="map-card-inner">
							<h3 class="map-card-header">DIRECTIONS TO PAPAS&BEER</h3>
							<p class="map-card-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, enim.</p>
							<a class="g-btn" href="<?php the_field('card_cta_dest') ?>">GET DIRECTIONS</a>
					</div>
				</div>
			</div>
		<div class="clear-block"></div>
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