
<section class="upcoming-eventers">
	<div class="inner">
		<h1>UPCOMING EVENTS</h1>

		<div class="the-upcomer-el">
				<?php 
	$eventse = new WP_Query(array(
		'post_type' => 'Events',
		'posts_per_page' => 2
		));


	if($eventse -> have_posts()): while ($eventse -> have_posts()):
		$eventse->the_post(); ?>
		
		<div class="the-event-card">
			<a href="<?php the_permalink(); ?>">
				<figure class="showcase-img">
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
			<a class="btn" href='<?php the_permalink(); ?>'><span class="current-a">PACKAGES</span></a>

		</div>
		

	<?php
	endwhile;
	endif;
	wp_reset_postdata();
	?>
		</div>
	</div>
</section>
