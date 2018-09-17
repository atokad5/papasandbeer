<?php 
$is_news = is_page_template('templates/events.php') || is_tax('events-categories') ;
 ?>

 	<?php
				$term = get_term_by( 'slug', get_query_var('term'), get_query_var('taxonomy') );
echo $term->name;
				?>


 <div class="inner">
		<div class="schedule">
		<h1>EVENT SCHEDULE</h1>
		<p>Viewing All Events in <?php



				if (is_category()) {
					echo '<span>Viewing Posts in Category:</span>';
					single_cat_title();
				} else if (is_tag()) {
					echo 'Viewing Posts Tagged: ';
					single_tag_title();
				} else if (is_author()) {
					global $post;
					echo 'Viewing Posts by: ';
					the_author_meta('display_name', $post->post_author);
				} else if($is_news){
					echo 	single_cat_title('', false);
				}



				?></p>
		<div class="the-month-dropdown">
			<div class="the-month-dropdown--inner">
				<h2 class="theDater"><?php echo ($term->name);?> <i class="fa fa-caret-down" aria-hidden="true"></i>
</h2>
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

	</div>
</div>





<section class="inner">
	<div class="event-parent-el">
<?php  if (have_posts()) : while (have_posts()) : the_post();

    ?>


	<?php  $catee = get_category_newslabel($post->ID);?>

		<div class="event-item">
			<a href="<?php the_permalink(); ?>">
			<figure class="featured-image-event">
				<img src='<?php the_field('featured_image'); ?>' alt="">
			</figure>
			</a>
			<?php 
			if(strlen(get_field('event_name_viewed_name')) > 0){?>
				<p class="event-title_name"> <?php the_field('event_name_viewed_name');?> </p>
			<?php } else { ?>
				<p class="event-title_name"> <?php the_title();?> </p>
			<?php } ?>
			<p><strong>Dates:</strong> <?php the_field('dates'); ?></p>
			<?php the_content(); ?>
			<a class="btn" href='<?php the_permalink(); ?>'><span class="current-a">PACKAGES</span></a>
		</div>





	<?php
	endwhile; endif;
	wp_reset_postdata();?>
	</div>
</section>
<?php

get_footer();
?>
