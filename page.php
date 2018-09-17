<?php

// page.php - default view for single pages

// Align Stylesheet for this page is in _home.scss

get_header(); 

if (have_posts()) : while (have_posts()) : the_post();
?>

    <!-- HERO ABOUT SECTION -->
    <section class="solutions-hero">
      <div class="inner">
        <div class="inner-narrow">
		<?php 
		$titlelen = get_the_title();
		if(strlen($titlelen) > 1){?>
		<h1><?php the_title(); ?></h1>
		<hr class="divider divider--red centered-red">
		<?php } ?>
      </div>
    </div>
    </section>
    <!-- ENDING OF HERO ABOUT SECTION -->

    <section class="singlepost-content">
        <div class="inner">
            <div class="inner-narrow">
                <article class="singlepost-article" role="article">
                    <?php the_content(); ?>
                </article>
            </div>
        </div>
    </section>

<?php
endwhile;
endif; 
wp_reset_postdata();

get_footer();
