<?php
	$root = get_template_directory_uri();
	get_header();
?>

<header class="is-heigh-hero-two">
	<div class="shimmer"></div>
	<div class="inner">
		<div class="hero-content-two" style="max-width: 1200px;">
			<h1 class="hero-tagline-two" >You May Have Not Found The Right Link</h1>
			<p class="mini-tagline-home">But The Right Party is Waiting For You</p>
			<div>
			<a class="btn" href=''><span class="current-a">View Events</span></a>
			</div>
		</div>
	</div>
	<div class="is-hero-bg"  style='background-image: url(<?php echo "$root/assets/img/social-icons/becomearep-background.png"; ?>)'></div>
</header>

<section class="the-categories default-block">
	<div class="inner is-cat-parent">
		<?php 
			$eventItem = get_field('category_grid', 'options');
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


<?php get_template_part('partials/upcomingevents') ?>











<?php 
get_footer();
?>