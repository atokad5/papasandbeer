<?php /* TEMPLATE NAME: EVENTS PAGE */
$root = get_template_directory_uri();
get_header();
$is_news = is_page_template('templates/events.php') || is_tax('events-categories') ;

 ?>

 <?php 
	if(get_field('show_breadcrumbs')){
		get_template_part('partials/breadcrumbs');
	}
	 ?>


<div class="inner">
	<div class="schedule">
		<h1>EVENT SCHEDULE</h1>
		<p>Check out our event line-up below.</p>
		
		<div class="the-month-dropdown">
			<div class="the-month-dropdown--inner">
				<h2>SELECT A MONTH <i class="fa fa-caret-down" aria-hidden="true"></i></h2>
				<ul class='the-dates-dd'>
					<li><a href="<?php echo site_url('events'); ?>">VIEW ALL</a></li>
					<?php
					$blog_cats = get_terms('events-categories');
					$current_cat = single_cat_title('', false);
					foreach($blog_cats as $cat) {
						$current_class = '';
						if ($current_cat === $cat->name) {
							$current_class = 'blog-filters_current';
						}
						echo '<li class="'.$current_class.'"><a href="'.get_term_link($cat->name, 'events-categories').'">'.$cat->name.'</a></li>';
					} 
				?>
				</ul>
			</div>
		</div>	






		<!-- <ul>
			<?php
					$blog_cats = get_terms('events-categories');
					$current_cat = single_cat_title('', false);
					foreach($blog_cats as $cat) {
						$current_class = '';
						if ($current_cat === $cat->name) {
							$current_class = 'blog-filters_current';
						}
						echo '<li class="'.$current_class.'"><a href="'.get_term_link($cat->name, 'events-categories').'">'.$cat->name.'</a></li>';
					} 
				?>
		</ul> -->
	</div>
</div>
	<?php 
	if(get_field('show_breadcrumbs')){
		get_template_part('partials/breadcrumbs');
	}
	 ?>

<section class="inner">
	<div class="event-parent-el">
	


	

		<?php 

		

	$events = new WP_Query(array(
		'post_type' => 'Events'

		));

	


	if($events -> have_posts()): while ($events -> have_posts()):
		$events->the_post(); 
		$checker = get_field('vip_event');
		$hide = 'vip-event-package';
		$decide = $checker ? $hide : '';
		$hash = $checker ? '#p&bcommunity' : '';
		
		?>


 	<?php  $catee = get_category_newslabel($post->ID);?>
		
		<div class="event-item <?php 	echo $decide; ?>">
			<a href="<?php the_permalink(); echo $hash; ?>">
				<figure class="featured-image-event">
					<img src='<?php the_field('featured_image'); ?>' alt="">
				</figure>
			</a>
			<?php 
			if(strlen(get_field('event_name_viewed_name')) > 0){?>
				<p class="event-title_name"> <?php the_field('event_name_viewed_name');?> </p>
			<?php } else { ?>
				<p class="event-title_name"> <?php the_title();?> </p>
			<?php }
		
			?>
			<p><strong>Dates:</strong> <?php the_field('dates'); ?></p>
			<?php the_content(); ?>
			<a class="btn" href='<?php the_permalink(); echo $hash; ?>'><span class="current-a">PACKAGES</span></a>
		</div>


	<?php
	endwhile;
	endif;
	wp_reset_postdata();
	?>
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