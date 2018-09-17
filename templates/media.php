<?php /* Template Name: Media */

$root = get_template_directory_uri();
get_header();
?>
<?php 
  if(get_field('show_breadcrumbs')){
    get_template_part('partials/breadcrumbs');
  }
   ?>
   
  <section class="default-block the-second-header" style="background-image: url(<?php the_field('header_image') ;?>);">
		<div class="inner">
			<h1><?php the_field('header_text'); ?></h1>
		</div>
	</section>

  <section>
    <div class="inner">
       <div class="kickoff-content">
        <?php the_field('beginning_text'); ?>
       </div>
    </div>
  </section> 

  <div class="inner">
    <hr>
  </div>

  <section class="has-pictures">
    <h1>Pictures</h1>


   <div class="mainer-imager-container">

      <?php 
        $imageView = get_field('images');

        foreach($imageView as $theImages) { ?>
        
            <a class="img-par" href="<?php echo $theImages['url'];?>" rel="lightbox">
              <figure>
                <img class="lightbox" src="<?php echo $theImages['url'];?>" alt="" rel='lightbox'>
              </figure>
            </a>
          
      


        

      <?php } ?>




    </div>
  
  
  </section>

  <div class="inner">
    <hr>
  </div>



  <section>
    <div class="inner">
      <h1 class="section_title">VIDEOS</h1>
        <div class="the-video-section_grid">

          <?php 
          $theVids = get_field('video_content');

          foreach($theVids as $acbv){ ?>
            <div class="video_grid">
              <div class="grid_img is-video-ply-big" data-video='<?php echo $acbv['video_src'] ;?>'>
                <img src="<?php echo $acbv['video_image'] ;?>" alt="">
                <i class="fa fa-play-circle-o" aria-hidden="true"></i>
              </div>
              <div class="vid_content">
                <h2><?php echo $acbv['video_title'] ;?></h2>
                <p><?php echo $acbv['video_content'] ;?></p>
              </div>
            </div>
          <?php  } ?>

          
        </div>
        <hr>
      </div>
  </section>


<section class="the-header_er">
	<div class="inner">
		<h1 class="opendays-header optitle"><?php the_field('catorgies_section_title') ?></h1>
	 		<p class="opendays-texts"><?php the_field('categories_section_content') ?></p>
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


  <div class="inner">
    <hr>
  </div>

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