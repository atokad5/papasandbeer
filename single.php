<?php 

	$root = get_template_directory_uri();




	get_header();
 ?>
	

	<section class="default-block the-second-header" style="background-image: url(<?php the_field('featured_image') ?>);">
		<div class="inner">
		
			<h1><?php the_field('header_tagline'); ?></h1>
		</div>
	</section>


	<section class="blog">
		<div class="inner">
				<div class="is-blog-element the-blog-container">
					<?php 
		

				if(have_posts()) : while(have_posts()):
					the_post();?>
					<div class="the-blog-parent-el">
						<hr class="blog-divider">
						
						<div class="blog-item">

							<h1 class="blog-title"><?php the_title(); ?></h1>
							<p class="blog-date">Published on <?php the_date('m/d/Y'); ?></p>
							<article class="blog-content"><?php the_content(); ?></article>
						</div>
						<a href="<?php echo site_url('blog'); ?>" class="g-btn">Go Back</a>
			
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

	



	<footer class="footer-section default-b" style='background-image: url(<?php the_field('background_image', 'options'); ?>);'>
	<div class="inner">
		<div class="footer-liner">
			<?php the_field('have_questions_content', 'options'); ?>
		<a class="btn" href="<?php the_field('footer_link', 'options'); ?>"><span class="current-a"><?php the_field('footer_link_text', 'options'); ?></span></a>
		
		</div>
	</div>
</footer>


 <?php 

 get_footer();

  ?>