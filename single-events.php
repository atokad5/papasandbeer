<?php get_header(); 

$root = get_template_directory_uri();
$bgColor = get_field('background_color');
$txtColor = get_field('color_text');
?>





<section class="event-header_new">
  <div class="inner">
    <div class="event-container">
      <div class="event-container--inner">
        <div class="artist_logo">
          <img src="<?php the_field('featured_image');?>" alt="">
        </div>
        <div class="content-padding_event">
          <h1><?php the_field('event_name_viewed_name') ;?></h1>
          <h5><?php the_field('dates') ;?></h5>
          <div class="countdown">
            <div class="countdown_single" data-countdown="<?php the_field('date'); ?>">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="event-bg" style="background-image: url(<?php the_field('event_single_background_image');?>);"></div>
</section>
<?php $black = '#000'; $white = '#fff';?>
<?php
  $checker = get_field('vip_event');
  $hide = 'vip-event-package';
  $decide = $checker ? $hide : '';
?>
<section class="main-package <?php echo $decide;?> " style="display: block;">
  <div class="inner">

    <div class="package_section right-package">
        <div class="package-right-parent">
          <div class="package-title-parent">
          <div id="buynow"></div>
            <h3 class="package-title" style="background-color: <?php echo $bgColor; ?> ; color: <?php echo $txtColor; ?>;">
            <?php the_title();?></h3>
            <span class="stripe"></span>
            
          </div>

         <div class="the-form-border">
           
         <?php the_field('form');?>
         </div>
        </div>
    </div>

    <div class="package_section left-package">
      <div class="left-inner">
        <div class="section-element">
          <h4 class="small_title"><?php the_field('about_mini_header'); ?></h4>
          <h1 class="main_title has-the-btm-padd-sm"><?php the_field('about_main_header'); ?></h1>
          <p><?php the_field('about_summary'); ?></p>
        </div>
        
        <hr class="section-split">
        <div class="section-element">
          <h4 class="small_title"><?php the_field('schedule_mini_header'); ?></h4>
          <h1 class="main_title has-the-btm-padd"><?php the_field('schedule_main_header'); ?></h1>
          <div class="schedule-img">
          <?php
            $scheduleImgs = get_field('schedule_images');
            foreach($scheduleImgs as $theImgy){ ?>
              <figure class="schedy">
                <img src="<?php echo $theImgy['url']; ?>" alt="">
              </figure>
          <?php }  ?>
          </div>
        </div>
        <?php if(get_field('packages_mini_header')){ ?>
	       
        <hr class="section-split flky-line">
        
        <div class="section-element">
          <h4 class="small_title"><?php the_field('packages_mini_header');?></h4>
          <h1 class="main_title has-the-btm-padd"><?php the_field('packages_main_header');?></h1>
          
          
          <div class="package-detals">
          <?php 
          $packageOffer = get_field('package_options');
          $sectionINfo = get_field('section_info');
          foreach($packageOffer as $theOffer) { 
          if($theOffer['header_banner']){ ?>
            <div class="pkg-container">
              <figure class="the-header-pkg">
                <img src="<?php echo $theOffer['header_banner'];?>" alt="">
              </figure>
              <div class="the-pkg-container" style="background-color:<?php echo $bgColor ;?>; color: <?php echo $txtColor ;?>;">
                <div class="the-pkg-container-inner">
                  <?php if($theOffer['section_title_one']){?>
                    <div class="info-nest">
                    <h2><?php echo $theOffer['section_title_one'];?></h2>
                    <small><?php echo $theOffer['sub_section_title_one'];?></small>
                  </div>
                  <?php } ?>
                    
                  <?php if($theOffer['section_title_two']){?>
                    <div class="info-nest">
                    <h2><?php echo $theOffer['section_title_two'];?></h2>
                    <small><?php echo $theOffer['sub_section_title_two'];?></small>
                  </div>
                  <?php } ?>

                  <?php if($theOffer['section_title_three']){?>
                    <div class="info-nest">
                      <h2><?php echo $theOffer['section_title_three'];?></h2>
                      <?php if($theOffer['sub_section_title_three']){?>
                      <small>
                        
                        <?php echo $theOffer['sub_section_title_three'];?></small>
                        <?php   } ?>
                    </div>
                  <?php } ?>

                  <?php if($theOffer['section_title_four']){?>
                    <div class="info-nest">
                      <h2><?php echo $theOffer['section_title_four'];?></h2>
                      <?php if($theOffer['sub_section_title_four']){?>
                      <small>
                        
                        <?php echo $theOffer['sub_section_title_four'];?></small>
                        <?php   } ?>
                    </div>
                  <?php } ?>

                  <?php if($theOffer['section_title_five']){?>
                    <div class="info-nest">
                      <h2><?php echo $theOffer['section_title_five'];?></h2>
                      <?php if($theOffer['sub_section_title_five']){?>
                      <small>
                        
                        <?php echo $theOffer['sub_section_title_five'];?></small>
                        <?php   } ?>
                    </div>
                  <?php } ?>
                
                      
        
                  <div class="info-nest">
                    <h1 class="pricer"><?php  echo $theOffer['price'];?></h1>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
            <?php } ?>
          </div>
          <a href="#buynow" class="target-linkers purchase-btn">PURCHASE YOUR PACKAGE</a>
        </div>
        <?php   }?>



     

      
        <?php 
              $re = get_field('the_review');

              if($re){?>
         <hr class="section-split">
         <section class="package_reviews">
        <div class="section-element">
          <h4 class="small_title">REVIEWS</h4>
          <h1 class="main_title has-the-btm-padd">WHAT TO EXPECT</h1>
          <figure class="fb-bage">
            <img src="<?php echo "$root/assets/img/package/facebook-reviews.png"; ?>" alt="">
          </figure>

          

          <div class="the-revi--content">
            <div class="the-review__nest">
              
            <?php  foreach($re as $theRe) {?>
              <div class="the_review">
                  <div class="t_r">
                  <p><?php echo $theRe['review_content'];?></p>
                </div>
              
                <div class="stars">
                  <?php if($theRe['review_rating'] == 4) {?>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                  <?php } ?>
                   <?php if($theRe['review_rating'] == 5) {?>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  <?php } ?>  
                </div>

                <div class="reviewer-name">
                  <p><span class="r_name"><?php echo $theRe['reviewer_name']; ?></span></p>
                </div>        

              </div>
              <?php } } ?>
             

            </div>
            <img class="the-quotes" src="<?php echo "$root/assets/img/package/quotes.png"; ?>" alt="">
          </div>
        </div>
      </section>
    </div>
  </div>

    <div class="clear-block"></div>
  </div>
</section>

<div class="clear-block"></div>

<section class="the-package-faq">
  <div class="inner">
    <div class="faq-venue the-cat-nest is-active" data-founder=1>
       <?php 
        $getCat = get_field('faq_category');
        $getTitle = get_field('faq_title_section');
        $newA = explode(' ', $getCat);
        $cater = $newA[0];
        $result = strlen($cater) >= 1 ? $cater : 'package';

      ?>

      <h1>
      <?php 
        if($getTitle) {
          echo $getTitle;
        } else {
          echo "PACKAGES";
        }
      ?> FAQ's</h1>
      <?php 
        $faq = new WP_Query(array(
          'post_type' => 'faq',
          'tax_query' => array(
            array(
              'taxonomy' => 'faq-categories',
              'field' => 'slug',
              'terms' => $result
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



<section>
  <div class="inner">


        <div class="section-element gallery_slide">
          <section class="theday-slider" style="background: <?php echo $bgColor;?>; color: <?php echo $txtColor;?>">
            <div class="inner">
              <div class="day-slider--content">
                <?php the_field('gallery_content'); ?>
              </div>
            </div>
                <div class="the-image-slider-hotels">
                <?php $theImger = get_field('section_image_gallery');

                foreach($theImger as $theImg){
                ?>

                  <div class="the-food-item">
                      <a class="food-image" href="" rel="lightbox">
                        <figure >
                          <img src='<?php echo $theImg['url'] ;?>' alt="">
                        </figure>
                      </a>
                    <p class='caption-food'></p>
                  </div>

              <?php } ?>
              </div>

          </section>

        </div>
  </div>
</section>




<section class="package-video">
  <div class="inner">
    <div class="package-video--inner">
      <div class="video-modal">
      <div class="grid_img is-video-ply-big" data-video="<?php the_field('video_source');?>">
        <img src="<?php the_field('video_image');?>" alt="">
        <p class="vv-content" style="position: absolute;"><?php the_field('video_title');?></p>
        <i class="fa fa-play-circle-o" aria-hidden="true"></i>
      </div>
    </div>
    </div>
  </div>
</section>







<?php

get_footer();
?>


<script>
  var $headerTop = $(".event-header_new");
  var $countdownEl = $('.countdown_single');
  var $countDownDate = $countdownEl.attr('data-countdown');

  function setOffset() {
    $headerTop.css({
      "padding-top": $("nav").outerHeight()
    })
  }

  setOffset()
  $(window).on('resize', setOffset);

  $countdownEl.countdown($countDownDate, function(event) {
    // $(this).text(
    //   event.strftime('Countdown %H:%M:%S')
    // );
    $(this).html(
      '<span class="cd_time">' +
        '<span class="chya">' + event.strftime('%D') + '<br>Days</span>' +
        '<span class="chya">' + event.strftime('%H ') + '<br>HRS</span>' +
        '<span class="chya">' + event.strftime('%M') + '<br>Mins</span>' +
      '</span>'
    )
  });
</script>