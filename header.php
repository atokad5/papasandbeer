<?php 
$root = get_template_directory_uri();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>.async-hide { opacity: 0 !important;} </style>
<script>(function(a,s,y,n,c,h,i,d,e){s.className+=' ‘+y;h.start=1*new Date;
h.end=i=function(){s.className=s.className.replace(RegExp(’ ?‘+y),‘’)};
(a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
})(window,document.documentElement,‘async-hide’,‘dataLayer’,4000,
{‘GTM-TRBQ9XV’:true});
</script>




	
<!-- OLD Google Tag Manager -->

<script>
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MG3WLPW');
</script>


<!-- End Google Tag Manager -->

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1420344584726516');
  fbq('track', 'PageView');
  fbq('track', 'ViewContent');
</script>
<!-- End Facebook Pixel Code -->

		<link rel="icon" 
      type="image/png" 
      href="<?php echo "$root/assets/favicon.png";?>">

	<meta charset="UTF-8">
	<meta name="viewport" content="Width=device-width, initial-scale=1, user-scalable=no">
	<title><?php wp_title(''); ?></title>
	<link rel="stylesheet" href='<?php echo "$root/assets/css/style.css?=";?>'>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://use.fontawesome.com/a9ce52f234.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
	

<noscript><iframe src=“https://www.googletagmanager.com/ns.html?id=GTM-MG3WLPW”
height=“0" width=“0” style=“display:none;visibility:hidden”></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	<noscript><img height=“1” width=“1" style=“display:none”
  src=“https://www.facebook.com/tr?id=1420344584726516&ev=PageView&noscript=1"
/></noscript>

<div id="top"></div>
<div id="fb-root" data-adapt-container-width="true"></div>






<div class="nav-hider"></div>
	<nav class="navigation-bar is-visible" data-nav-status="toggle">

	
	



		<div class="inner">
			
			<a href='<?php echo site_url(''); ?>'><figure class="nav-logo">
				<img src='<?php echo "$root/assets/img/logoonwhite.jpg"; ?>' alt="">

			</figure></a>
			

			<button class="mt-trigger" style="z-index: 999;"">
				<span class="mt-trigger-top"></span>
				<span class="mt-trigger-mid"></span>
				<span class="mt-trigger-btm"></span>
			</button>


			<!-- <ul class="the-menu"> -->
				<?php 

					wp_nav_menu(array(
						'theme_location' => 'Primary_menu',
						// 'Primary_menu' => 'Primary Navigation Menu',
						'container' => false,
						'menu_class' => 'the-menu',
						'id' => false

					));

				 ?>
	

				<!-- <li class="main-li"><a href='<?php echo site_url(''); ?>'>Home</a></li>
				<li class="main-li dropdown-exe"
				><a href="">The Experience 
					<i style="margin-left: 5px;" class="fa fa-caret-right isdropdown-carrot" aria-hidden="true"></i>
					</a>
				<ul class="the-dropdown">
					<li><a href='<?php echo site_url('the-venue'); ?>'>The Venue</a></li>
					<li><a href='<?php echo site_url('directions'); ?>'>Directions</a></li>
					<li><a href='<?php echo site_url('hotels'); ?>'>Partnered Hotels</a></li>
					<li><a href='<?php echo site_url('food-and-drinks'); ?>'>Food & Drinks</a></li>
					<li><a href='<?php echo site_url('rosarito'); ?>'>Rosarito Activities</a></li>

				</ul>

				</li>
				<li class="main-li"><a href='<?php echo site_url('about'); ?>'>About Papas</a></li>
				<li class="main-li is-red"><a href='<?php echo site_url('events'); ?>'>View Events</a></li> -->
			<!-- </ul> -->
		</div>
	<?php   
	if(is_page('directions')){ ?>
	<section class="the-directions">
		<div class="inner">
			<div class="directions-nav">
					<a target='_blank' class="g-btn hotel-val" href="<?php the_field('card_cta_dest') ?>">GET DIRECTIONS
					<img class="exped" src='<?php echo "$root/assets/img/goog.png"; ?>' alt="">
					</a>


				<ul class="the-directions-nav">
					<li><a  class="target-linkers" href="#parking">Parking</a></li>
					<li><a  class="target-linkers" href="#bords">US/MX Borders</a></li>
					<li><a  class="target-linkers" href="#airports">Nearby Airports</a></li>
				</ul>
				<div style="clear: both;"></div>
			</div>
		</div>
	</section>




	<?php } ?>
	<?php if(is_singular('hotels')) { ?>
			<section class="the-directions">
		<div class="inner">
			<div class="directions-nav">
				<a  target='_blank' class="g-btn hotel-btn" href="">Book With Expedia
				<img class="exped" src='<?php echo "$root/assets/img/exped.png"; ?>' alt="">
				</a>

				<ul class="the-directions-nav">
					<li><a href="">1 (858) 555 - 9995</a></li>
				</ul>
				<div style="clear: both;"></div>
			</div>
		</div>
	</section>

	<?php } ?>
	</nav>
	
	<div class="loading-page">
			
			<figure class="loader-img">
			
				<div class="loader">
				  <div class="loader__bar"></div>
				  <div class="loader__bar"></div>
				  <div class="loader__bar"></div>
				  <div class="loader__bar"></div>
				  <div class="loader__bar"></div>
				  <div class="loader__ball"></div>
				</div>
				<img src='<?php echo "$root/assets/img/loaderlogo.jpg" ?>' alt="">
			</figure>


	</div>
<div class="site-container">