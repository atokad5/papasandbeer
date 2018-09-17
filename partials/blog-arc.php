<?php 

	$root = get_template_directory_uri();





 ?>
	<?php 
	if(get_field('show_breadcrumbs')){
		get_template_part('partials/breadcrumbs');
	}
	 ?>

	<section class="default-block the-second-header" style="background-image: url(<?php the_field('header_background'); ?>);">
		<div class="inner">
		
			<h1><?php the_field('header_tagline'); ?></h1>
		</div>
	</section>


	<section class="blog">
		<div class="inner">
				<div class="is-blog-element the-blog-container">
					<?php 
				$blog = NEW wp_query(array(
					'posts_per_page' => 6

					));

				if($blog -> have_posts()) : while($blog ->have_posts()):
					$blog->the_post();?>
					<div class="the-blog-parent-el">
						<hr class="blog-divider">
						
						<div class="blog-item">
							<?php echo do_shortcode('[mashshare]'); ?>
							<img class="featured-blog-image" src="<?php the_field('featured_image') ?>" alt="">
							<hr class="title-line">
							<h1 class="blog-title"><a href="<?php the_permalink(); ?>" style="color: #c30545;"><?php the_title(); ?></a></h1>
							<p class="blog-date">Published on <?php the_date('m/d/Y'); ?></p>
							<article class="blog-content"><?php the_excerpt(); ?></article>
						</div>
						<a href="<?php the_permalink(); ?>" class="g-btn">Read More</a>

					</div>
		
				<?php 
				endwhile;
				endif;
				wp_reset_postdata();
				 ?>
				</div>

				<div class="is-blog-element sidebar-widget">

						<div class="sidebar-inner">
							<?php get_template_part('partials/sidebar'); ?>

						</div>


				</div>



			<div class="clear-block"></div>
			 
		</div>
	</section>


	 <section class="the-categories cat-hotel-singles is-venue-catr">
	<div class="inner is-cat-parent">
  
		<?php 
			$eventItem = get_field('category_grid' , 'options');
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

