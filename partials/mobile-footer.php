<?php 
$root = get_template_directory_uri();

$footerImg = $root.'/assets/img/footer';

$facebook = get_field('facebook', 'options');
$instagram =get_field('instagram', 'options');
$twitter =get_field('twitter', 'options');
$snapchat =get_field('snapchat' , 'options');
$youtube =get_field('youtube' , 'options');
?>


<section class="prime-footer-mobile">
	<div class="inner">
				<figure class="footer-logo">
						<img src="<?php echo "$footerImg/papaslogo.png"  ?>" alt="">
				</figure>
				<p class="copy">&copy; <?php echo date('Y'); ?> Papas&Beer</p>

				<div class="footer-social-links">
					<?php 

					if($instagram){ ?>
					<figure class="is-social-linker">
						<a target="_blank" href="<?php echo $instagram; ?>">
							<img src="<?php echo "$footerImg/instagram.png"  ?>" alt="">
						</a>
					</figure>	
					<?php } ?>
					<?php 
					if($snapchat){ ?>
					<figure class="is-social-linker">
						<a target="_blank" href="<?php echo $snapchat; ?>">
							<img src="<?php echo "$footerImg/snapchat.png"  ?>" alt="">
						</a>
					</figure>	
					<?php } ?>
					<?php 
					if($facebook){ ?>
					<figure class="is-social-linker">
						<a target="_blank" href="<?php echo $facebook; ?>">
							<img src="<?php echo "$footerImg/facebook.png"  ?>" alt="">
						</a>
					</figure>	
					<?php } ?>
					<?php 
					if($youtube){ ?>
					<figure class="is-social-linker">
						<a target="_blank" href="<?php echo $youtube; ?>">
							<img src="<?php echo "$footerImg/youtube.png"  ?>" alt="">
						</a>
					</figure>	
					<?php } ?>
					<?php 
					if($twitter){ ?>
					<figure class="is-social-linker">
						<a target="_blank" href="<?php echo $twitter; ?>">
							<img src="<?php echo "$footerImg/twitter.png"  ?>" alt="">
						</a>
					</figure>	
					<?php } ?>

				</div>

				<hr>

			
						<?php 

					wp_nav_menu(array(
						'theme_location' => 'Footer_menu',
						'Footer_menu' => 'Footer',
						'container' => false,
						'menu_class' => 'footer-linkers',
						'id' => false

					));

				 ?>
			

				<hr>

				<p class="joiner">
					Join the community to receive emails about our latest events, giveaways, artist announcements, and more!
				</p>

				<div class="the-com-form">
				<form action="">
					<div class="input-field">
						<input type="email" class="input" required autocomplete="off">
							<label for="email-address-com">ENTER YOUR EMAIL</label>
					</div>
						<input type="submit" value="JOIN"> 
				</form>
			</div>

	</div>
</section>