<?php // Template Name:  Learn More
$root = get_template_directory_uri();
?>


<?php get_header(); ?>
<?php 
	if(get_field('show_breadcrumbs')){
		get_template_part('partials/breadcrumbs');
	}
	 ?>
<header class="is-heigh-hero-two">
	<div class="shimmer"></div>
	<div class="inner">
		<div class="hero-content-two" style="max-width: 1200px;">
			<h1 class="hero-tagline-two" ><?php the_field('header_tagline') ?></h1>
			<p class="mini-tagline-home"><?php the_field('tagline'); ?></p>
			<div>
			<a class="btn" href='<?php the_field('button_link'); ?>'><span class="current-a"><?php the_field('button_text'); ?></span></a>
			</div>
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
	<div class="inner">
		<?php 
		if(strlen(get_field('the_custom_field')) >= 1){?>
			
			<div class="the-custom-content" style="padding-top: 6em;">
				<?php the_field('the_custom_field') ?>
			</div>
		<?php }


		 ?>
	</div>
</section>

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




<section class="dope-events">
	<div class="inner">
		<figure class="dope-main-image">
			<img src='<?php echo "$root/assets/img/dope-events-bg.jpg"; ?>'>
		</figure>
		<div class="dope-card">
			<div class="dope-inner">
				<h1><?php the_field('dope_events_title') ?></h1>
				<h3><?php the_field('dope_events_sub_title') ?></h3>
				<p><?php the_field('dope_events_content') ?></p>
				<a href="<?php echo site_url('events'); ?>" class="btn"><span class="current-a">VIEW EVENTS</span></a>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</section>


<!-- <section class="faq default-block">
	<div class="inner">
		<h1 class="common-faq">Common Faqs</h1>
		<div class="common-inner">
			<p><?php // the_field('common_faq'); ?></p>
			<div class="is-centered padding">
			<a href="" class="btn">	<span class="current-a">VIEW FAQS</span></a>
			</div>
		</div>
	</div> -->
<!-- </section> -->















<section class="mini-default-block">
	<div class="inner">
		<div class="faq-venue the-cat-nest is-active" data-founder=1>
			<h1>LEARN MORE FAQ's</h1>
			<?php 

				$getCat = get_field('faq_category');
				$newA = explode(' ', $getCat);

				$faq = new WP_Query(array(
					'post_type' => 'faq',
					'tax_query' => array(
						array(
							'taxonomy' => 'faq-categories',
							'field' => 'slug',
							'terms' => $newA
						),
						'orderby' => 'date',
						'order' => 'ASC'
					),
				));

			if($faq -> have_posts()): while ($faq -> have_posts()):
				$faq->the_post(); ?>
				
					<div class="the-question-nest">
						<div class="the-question-nest-inner">
							<div class="the-question">
								<p class="faq-title"><?php the_title(); ?></p>
								<div class="clicker-q">
									<span class='cl-top'></span>
									<span class='cl-btm'></span>
								</div>
							</div>
							<div class="the-answer">
								<?php the_field('answer'); ?>
							</div>

						</div>	
					</div>	
			<?php
			endwhile;
			endif;
			wp_reset_postdata();
			?>
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


<?php get_footer(); ?>