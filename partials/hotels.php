<?php $root = get_template_directory_uri(); 
$SocialImg = "$root/assets/img/social-icons/";


?>
<section class="the-ros-hotels">
  <div class="inner">
    <div class="places-to--eat-top-section">
      <?php the_field('the_hotel_top_content'); ?>
    </div>
    
    <?php 
    $theHotels = get_field('the_hotel_layout');

      foreach($theHotels as $hotelListing){
     ?>
    <div class="hotels-imger">
      <div class="the-hotels-img-content">
        <?php echo $hotelListing['the_hotel_contente']; ?>
        <p><img class="the-pin" src='<?php echo "$root/assets/img/Directions/maps-and-flags2.png" ?>' alt=""><?php echo $hotelListing['the_hotel_addresse']; ?></p>
      </div>

    <div class="is-section-bg"  style='background-image: url(<?php echo $hotelListing['the_hotel_imagee']; ?>)'></div>
    </div>
  <?php } ?>
<!-- 
    <div class="hotels-imger">
      <div class="the-hotels-img-content">
        <h1>ROSARITO INN CONDOS</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti quas molestiae dolor reiciendis deleniti aut quam fugiat. Repellendus assumenda id explicabo corporis porro. A quis nemo incidunt natus ullam impedit.</p>
        <p><img class="the-pin" src='<?php echo "$root/assets/img/Directions/maps-and-flags2.png" ?>' alt="">Address Goes Here</p>
      </div>

    <div class="is-section-bg"  style='background-image: url(<?php echo "$root/assets/img/rosa-new/rosaritobeachhotel13.png";?>)'></div>
    </div>



    <div class="hotels-imger">
      <div class="the-hotels-img-content">
        <h1>ROSARITO INN CONDOS</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti quas molestiae dolor reiciendis deleniti aut quam fugiat. Repellendus assumenda id explicabo corporis porro. A quis nemo incidunt natus ullam impedit.</p>
        <p><img class="the-pin" src='<?php echo "$root/assets/img/Directions/maps-and-flags2.png" ?>' alt="">Address Goes Here</p>
      </div>

    <div class="is-section-bg"  style='background-image: url(<?php echo "$root/assets/img/rosa-new/festival1.png";?>)'></div>
    </div> -->

  </div>
</section>