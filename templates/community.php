<?php /* Template Name: Community */

	$root = get_template_directory_uri();

	$SocialImg = "$root/assets/img/social-icons/";

	get_header();
 ?>

<?php 
	if(get_field('show_breadcrumbs')){
		get_template_part('partials/breadcrumbs');
	}
	 ?>
	 
<section class="the-com-header default-block">
	<div class="inner">
		<div class="inner-com-content">

			<div class="social-media-row">
				<figure class="the-social-media-icons">
					<a target="_BLANK" href="http://www.snapchat.com/add/papasandbeer83"><img src="<?php echo $SocialImg.'snapchat.png' ?>" alt=""></a>
				</figure>
				<figure class="the-social-media-icons">
					<a href="https://www.instagram.com/papasandbeer/" target="_blank"><img src="<?php echo $SocialImg.'instagram.png' ?>" alt=""></a>
				</figure>
				<figure class="the-social-media-icons">
					<a href="https://www.facebook.com/papasandbeer.rosarito" target="_blank"><img src="<?php echo $SocialImg.'facebook.png' ?>" alt=""></a>
				</figure>
				<figure class="the-social-media-icons">
					<a  target="_BLANK" href="https://twitter.com/papasandbeer" target="_blank">	<img src="<?php echo $SocialImg.'twitter.png' ?>" alt=""></a>
				</figure>
			</div>

			<div class="com-header-h">
				<h1><?php the_field('header') ?></h1>
				<p><?php the_field('sub_header'); ?></p>
			</div>

			<div class="the-com-form">
				<form action="<?php the_field('form_destination');?>" class="the-Email_form">
					<div class="input-field">
						<input type="email" name="EMAIL" class="input emailer" required autocomplete="off">
							<label for="email-address-com">ENTER YOUR EMAIL</label>
					</div>
						<input type="submit" value="JOIN">
				</form>
			</div>

		</div>



		<div class="clear-block"></div>

			<a href="#snapchat" class="target-linkers">
			<div class="follow-us-com">
				FOLLOW US
				<figure class="down-arrow">
					<img src="<?php echo $SocialImg.'down-arrow.png'; ?>" alt="">
				</figure>
			</div>
			</a>
	</div>



	<div class="is-hero-bg"  style='background-image: url(<?php the_field('header_background_image');?>)'></div>
	<div class="the-fader-bar"></div>
</section>





<section>
	<div class="inner">
		<div id="snapchat"></div>
		<p class="social-section-title snapper" style="padding-top: 2em;">SNAPCHAT</p>
		<div class="social-tagger">
			<p>We love roaming around your city, giving away <strong>FREE tickets & Papas&Beer Care Packages</strong></p>
			<p>Follow the journey by adding us on Snapchat.</p>
		</div>

		<figure class="the-snapper-img">
			<img src="<?php echo $SocialImg.'snapchat-main.png' ?>" alt="">
		</figure>


		<div class="the-phone-parent-c">
			<figure class="the-phone">
				<img src="<?php echo $SocialImg.'phone.png' ;?>" alt="">
			</figure>
		</div>
	</div>
</section>





<section class="instagram-section" style="display: none;">
	<div class="inner">
		<p class="social-section-title instagramer">INSTAGRAM</p>

		<div class="mini-inner-feed">
			<div id="instafeed"></div>
			<a href="" class="btn">OPEN INSTAGRAM</a>
		</div>


		<div class="social-iconic">
			<figure class="the-snapper-img">
				<img src="<?php echo $SocialImg.'insta-with-shadow-and-name.png' ?>" alt="">
			</figure>
		</div>
	</div>
</section>




<section class="facebook-section" style="display: none;">
	<div class="inner">
		<div class="the-hig-liner">
			<p class="social-section-title facebooker">FACEBOOK</p>
			<div class="the-facebook-feed">
					<figure class="fb-rating">
					<img src="<?php echo $SocialImg.'facebook-reviews.png' ?>" alt="">
					</figure>
				<div class="fb-page" data-href="https://www.facebook.com/papasandbeer.rosarito/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-width="480" ><blockquote cite="https://www.facebook.com/papasandbeer.rosarito/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/papasandbeer.rosarito/">Hal app</a></blockquote>
				</div>
				<a href="" class="btn">GO TO FACEBOOK</a>
			</div>

		</div>


			<div class="social-iconic-facebook">
				<figure class="the-snapper-img">
					<img src="<?php echo $SocialImg.'facebook-with-shadow-and-name.png' ?>" alt="">
				</figure>
			</div>
		</div>


	<div class="is-section-bg"  style='background-image: url(<?php echo $SocialImg.'endlessbg.jpg';?>)'></div>
</section>



<section class="facebook-section is-off-color">
	<div class="inner">
		<div class="the-hig-liner">
		<p class="social-section-title twitterer">TWITTER</p>
			<div class="the-twitter-feed">
				<a class="twitter-timeline" data-height="650" href="https://twitter.com/papasandbeer">Tweets by papasandbeer</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
				<a target="_BLANK" href="https://twitter.com/papasandbeer" class="btn">OPEN TWITTER</a>
			</div>
		</div>

			<div class="social-iconic">
				<figure class="the-snapper-img">
					<img src="<?php echo $SocialImg.'twitter-with-shadow-and-name.png' ?>" alt="">
				</figure>
			</div>
	</div>
</section>




<section class="become-a-rep">
	<div class="inner">

			<div class="c-content">
				<div class="the-becoming-inner">
					<div class="the-becoming-liner">
						<figure class="small-logo">
							<img src="<?php echo $SocialImg.'logopapas-w_black.png'; ?>" alt="">
						</figure>
						<h1>Become A Rep</h1>
						<p>Now that you've seen what we are all about.</p>
						<p>Ready to join the team?</p>
						<ul>
							<li>Earn money</li>
							<li>Receive exclusive care packages</li>
							<li>Earn FREE hotel rooms & packages</li>
						</ul>
						<a href="<?php echo site_url('become-a-rep'); ?>" class="btn"><span class="current-a">BECOME A REP</span></a>
					</div>
				</div>
			</div>

	</div>


	<div class="is-hero-bg"  style='background-image: url(<?php the_field('header_background_image');?>)'></div>
</section>




<section class="ending-rep is-off-color">
	<div class="inner">
	<div class="inner-com-content ending-com">
			<div class="com-header-h">
				<h1>Join The Papas&Beer Community!</h1>
				<p>Receive emails about our latest events, giveaways, artist announcements, and more!</p>
			</div>

			<div class="the-com-form">
				<form action="<?php the_field('form_destination');?>" class="the-Email_form">
					<div class="input-field">
						<input type="email" name="EMAIL" class="input emailer" required autocomplete="off">
							<label for="email-address-com">ENTER YOUR EMAIL</label>
					</div>
						<input type="submit" value="JOIN">
				</form>
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
