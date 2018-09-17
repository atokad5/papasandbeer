<?php $root = get_template_directory_uri(); 
$SocialImg = "$root/assets/img/social-icons/";


?>

<section class="the-ros-hotels">
  <div class="inner">

    <div class="places-to--eat-top-section">
      <?php the_field('top_section_content'); ?>
    </div>

    <div class="three-col-ros">

      <?php 
        $iconLoop = get_field('mini_icon_section');

        foreach($iconLoop as $theIcon) {?>
        <div class="three-ros-item">
          <figure class="the-ros_icon">
            <img src="<?php echo $theIcon['icon'] ;?>" alt="">
          </figure>
          <?php echo $theIcon['icon_content'] ;?>
        </div>
       <?php } ?> 

     <!--  <div class="three-ros-item">
        <figure class="the-ros_icon">
          <img src="<?php echo "$root/assets/img/rosa-new/quad.png" ;?>" alt="">
        </figure>
        <h2>ATV RIDING</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi, doloribus!</p>
      </div>

      <div class="three-ros-item">
        <figure class="the-ros_icon">
          <img src="<?php echo "$root/assets/img/rosa-new/saddle.png" ;?>" alt="">
        </figure>
        <h2>HORSEBACK RIDING</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi, doloribus!</p>
      </div> -->

    </div>

    <hr>


    <div class="places-to--eat-top-section has-ros-padding">
      <?php the_field('top_places_to_eat_content'); ?>
    </div>

    <div class="the-video-section_grid">
      <?php 
      $theVideoSection = get_field('video_area');


      foreach($theVideoSection as $theV){
        ?>

        <div class="video_grid">
          <div class="grid_img is-video-ply-big" data-video='<?php echo $theV['video_src']; ?>'>
            <img src="<?php echo $theV['video_image'] ;?>" alt="">
            <i class="fa fa-play-circle-o" aria-hidden="true"></i>
          </div>
          <div class="vid_content">
            <?php echo $theV['video_content']; ?>
          </div>
        </div>
      <?php  } ?>
      <!-- 
        <div class="video_grid">
          <div class="grid_img">
            <img src="<?php// echo "$root/assets/img/rosa-new/breweries.jpg" ;?>" alt="">
          </div>
          <div class="vid_content">
            <h2>LA BUFADORA</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed magnam, odio nobis accusantium qui quibusdam cum ea suscipit corporis voluptatibus.</p>
          </div>
        </div> -->
    </div>


    <hr>
  </div>
</section>

