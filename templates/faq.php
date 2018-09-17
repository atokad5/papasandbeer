<?php /* Template Name: Faq */
$root = get_template_directory_uri();

get_header();
?>

<?php 
	if(get_field('show_breadcrumbs')){
		get_template_part('partials/breadcrumbs');
	}
	 ?>

<div class="shimmer"></div>


<header class="is-heigh-hero-two is-centered">
	<div class="inner">
		<div class="hero-content-two is-contact-hero" style="max-width: 800px;">
			<h1 class="hero-tagline-two" ><?php the_field('header_tagline') ?></h1>
			<p class="mini-tagline-home is-contact"><?php the_field('header_subtagline'); ?></p>
		</div>
	</div>
	<div class="is-hero-bg"  style='background-image: url(<?php the_field('header_background'); ?>)'></div>
</header>

<ul class="cat-itemers">
	<li class="is-cat-clicker" data-cater=0 >EVENT QUESTIONS</li>
	<li class="is-cat-clicker is-selected" data-cater=1 >VENUE QUESTIONS</li>
	<li class="is-cat-clicker" data-cater=2 >HOTEL QUESTIONS</li>
</ul>


<section class="mini-default-block">
	<div class="inner">

		<div class="faq-events the-cat-nest" data-founder=0 >
			<h1>EVENTS FAQ's</h1>
			<?php
				$faq = new WP_Query(array(
					'post_type' => 'faq',
					'tax_query' => array(
						array(
							'taxonomy' => 'faq-categories',
							'field' => 'slug',
							'terms' => 'events'
						)
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


		<div class="faq-venue the-cat-nest is-active" data-founder=1>
			<h1>VENUE FAQ's</h1>
			<?php
				$faq = new WP_Query(array(
					'post_type' => 'faq',
					'tax_query' => array(
						array(
							'taxonomy' => 'faq-categories',
							'field' => 'slug',
							'terms' => 'venue'
						)
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



		<div class="faq-hotel the-cat-nest" data-founder=2>
			<h1>HOTEL FAQ's</h1>
			<?php
				$faq = new WP_Query(array(
					'post_type' => 'faq',
					'tax_query' => array(
						array(
							'taxonomy' => 'faq-categories',
							'field' => 'slug',
							'terms' => 'hotel'
						)
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

<section class="dope-events mini-default-block">
	<div class="inner">
		<figure class="dope-main-image partying-since">
			<img src='<?php echo "$root/assets/img/faq.jpg"; ?>'>
		</figure>
		<div class="dope-card faq-card">
			<div class="dope-inner">
				<?php the_field('the_about_content'); ?>
				<a href="<?php the_field('about_cta');?>" class="btn"><span class="current-a">ABOUT PAPAS</span></a>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="has-section-bg" style="background-image: url(<?php echo "$root/assets/img/home/endlessbg.jpg"; ?>);"></div>
</section>

<?php get_template_part('partials/upcomingevents'); ?>
	


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
