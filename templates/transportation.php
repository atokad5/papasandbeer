<?php // Template Name:  Transportation Page 
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
			<h1 class="hero-tagline" >Two Countries, One night</h1>
			<p>We've partnered up with WKNDRS Travel to offer you a shuttle to and from Papas&Beer on ALL major events.</p>
			<a class="btn" href='<?php the_field('cta_link'); ?>'><span class="current-a"><?php the_field('cta_text'); ?></span></a>
		</div>
	</div>
	<div class="is-hero-bg"  style='background-image: url(<?php the_field('hero_background'); ?>)'></div>
</header>

	
<section class="default-block wkdrs-section">
	<div class="inner">

			<figure class="wkdrs">
				<img src="<?php the_field('section_image'); ?>" alt="">
			</figure>
			<div class="inner-wkdrs">
			<?php the_field('section_content'); ?>
			<a href="" class="btn"><span class="current-a"><?php the_field('book_cta_txt'); ?></a></span><br>
			<small style="margin-top: 1em; display: inline-block;">* All passengers are required to have a Passport</small>
			</div>
	</div>
</section>


<!-- <section class="section-details">
	<div class="inner">
		<?php the_field('section_details'); ?>
	</div>
</section> -->


<section class="mini-default-block">
	<div class="inner">
		<div class="faq-venue the-cat-nest is-active" data-founder=1>
			<h1><?php the_field('faq_title_section') ?></h1>
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