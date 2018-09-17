<?php 
$root = get_template_directory_uri();

$footerImg = $root.'/assets/img/footer';
$facebook = get_field('facebook', 'options');
$instagram =get_field('instagram', 'options');
$twitter =get_field('twitter', 'options');
$snapchat =get_field('snapchat' , 'options');
$youtube =get_field('youtube' , 'options');
?>


	<div class="go-back-up">
		<a href="#top" class="target-linkers"><i class="fa fa-arrow-up" aria-hidden="true"></i>
		<span class="top">TOP</span>
		</a>
	</div>



</div> <!-- end of site container --> 










	<div class="email-confirm_prompt">
		<i class="fa fa-close"></i>
		<div class="email-confirm_prompt-inner">
			<div class="the-email-txt">
				<h1>Thank you for signing up for our community newsletter!</h1>
				<p>Talk to you soon.</p>
			</div>

			<div class="the-email-loader">

				<h1 class="is-loading-prompt">Loading...</h1>
			</div>
		</div>
	</div>

<div class="rosa-video-ply-home">
	<div class="inner">
		<div class="video-container">
			<div class="the-video"><iframe class="the-iframe" src="https://www.youtube.com/embed/hEqPFI1C_f8?feature=oembed" frameborder="0"></iframe></div>
		</div>
		<i class="fa fa-close close-modal"></i>
	</div>
</div>






<?php get_template_part('partials/mobile-footer'); ?>

	<section class="desktop-footer">
		<div class="inner">
			<div class="footer-parent-el">
				<div class="footer-sectioner">
					<div class="has-socials">
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
					</div>
				<div class="footer-sectioner">
					<figure class="the-desktop-footer_logo">
						<img src="<?php echo "$footerImg/papaslogo.png"  ?>" alt="">
					</figure>	
					<p class="des-fo-co">
						&copy; <?php echo date('Y'); ?> Papas&Beer
					</p>
				</div>
				<div class="footer-sectioner is-the-joiner">
					<p>
						Join the community to receive emails about our latest events, giveaways, artist announcements, and more!
					</p>
			
				<form action="//papasandbeer.us14.list-manage.com/subscribe/post?u=b7e526e257b09bedd8cee5e12&id=c6c853d2b8" class="form-link-desktop the-Email_form">
					<div class="input-field">
						<input type="email" name="EMAIL" class="input emailer" required autocomplete="off" placeholder="Email Address">
					</div>
						<input type="submit" value="JOIN"> 
				</form>
		
				</div>




			</div>

		
						<?php 

					wp_nav_menu(array(
						'theme_location' => 'Footer_menu',
						'Footer_menu' => 'Footer',
						'container' => false,
						'menu_class' => 'desktop-footer-linkers',
						'id' => false

					));

				 ?>
			

		</div>
	</section>
	
	
	
	

<script src='<?php echo "$root/assets/js/flickity.js?";?>'></script>
<script src='<?php echo "$root/assets/js/masonry.js?";?>'></script>
<script src='<?php echo "$root/dist/js/app.js";?>'></script>

	<script>
		
 			if($('body').hasClass('page-template-home')) {
				var om24339_33717,om24339_33717_poll=function(){var r=0;return function(n,l){clearInterval(r),r=setInterval(n,l)}}();!function(e,t,n){if(e.getElementById(n)){om24339_33717_poll(function(){if(window['om_loaded']){if(!om24339_33717){om24339_33717=new OptinMonsterApp();return om24339_33717.init({"a":33717,"staging":0,"dev":0,"beta":0});}}},25);return;}var d=false,o=e.createElement(t);o.id=n,o.src="https://a.optmstr.com/app/js/api.min.js",o.async=true,o.onload=o.onreadystatechange=function(){if(!d){if(!this.readyState||this.readyState==="loaded"||this.readyState==="complete"){try{d=om_loaded=true;om24339_33717=new OptinMonsterApp();om24339_33717.init({"a":33717,"staging":0,"dev":0,"beta":0});o.onload=o.onreadystatechange=null;}catch(t){}}}};(document.getElementsByTagName("head")[0]||document.documentElement).appendChild(o)}(document,"script","omapi-script");
				
				
 			} 
	</script>
	<style type="text/css" media="screen">	
		.houston-powered-by {
			display: none !important;
		}
		#houston-optin {
		    top: 50% !important;
		    transform: translateY(-50%) !important;
		}
	</style>
<?php wp_footer(); ?>
</body>
</html>