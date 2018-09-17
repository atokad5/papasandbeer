<?php 
		$root = get_template_directory_uri();

 ?>

 <section class="opendays">
 	<div class="inner">
 		<div class="opendays-content">
 			<h1 class="opendays-header"><?php the_field('non_event_header'); ?></h1>
	 		<p class="opendays-tagline"><?php the_field('non_event_tagline'); ?></p>
	 		<p class="opendays-texts"><?php the_field('non_event_summary'); ?></p>
	 		<a href="<?php the_field('non_event_btn'); ?>" class="btn"><span class="current-a"><?php the_field('non_event_btn_text'); ?></span></a>
 		</div>
 	</div>
 	<div class="is-section-bg-eightteen" style="background-image: url(<?php echo "$root/assets/img/Venue/open.jpeg"; ?>);"></div>
 </section>