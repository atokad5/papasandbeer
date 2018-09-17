<?php $root = get_template_directory_uri(); 
$SocialImg = "$root/assets/img/social-icons/";


?>


<section class="places_to-eat">
  <div class="inner">
    <div class="places-to--eat-top-section">
      <?php the_field('top_paces_to_eat_content'); ?>
    </div>


    <div class="the-place-cards">
      <?php 
      $placesEat = get_field('places_to_eat_cards');

      foreach($placesEat as $thePlaces){ ?>
        <div class="place-card">
            <div class="the-place-header">

            <div class="is-section-bg"  style='background-image: url(<?php echo $thePlaces['card_image'];?>)'></div>
            </div>

            <div class="place-inner">
            <img class="small-taco" src='<?php echo "$root/assets/img/rosarito/eat.png"; ?>' alt="">
              <?php echo $thePlaces['card_content']; ?>
              <p><img class="the-pin" src='<?php echo "$root/assets/img/Directions/maps-and-flags2.png" ?>' alt=""><?php echo $thePlaces['card_address']; ?></p>
            </div>
        </div>
      
      <?php } ?>
    </div>
  </div>
</section>


<section class="places_to-eat">
  <div class="inner">
    <div class="places-to--eat-top-section">
      <?php the_field('second_main_content'); ?>
    </div>


    <div class="the-place-cards">
      <?php 
      $foodCard = get_field('places_to_eat_card');

      foreach($foodCard as $theFood ){ ?>
        <div class="place-card">
            <div class="the-place-header">

            <div class="is-section-bg"  style='background-image: url(<?php echo $theFood['food_card_background'];?>)'></div>
            </div>

            <div class="place-inner">
            <img class="small-taco" src='<?php echo "$root/assets/img/rosarito/eat.png"; ?>' alt="">
              <?php echo $theFood['food_card_content']; ?>
              <a class="btn" href="<?php echo $theFood['food_card_website']; ?>"><span class="current-a">VIEW MENUS</span></a>
            </div>
        </div>
      
      <?php } ?>
    </div>
  </div>
  <div class="is-section-bg"  style='background-image: url(<?php echo $SocialImg.'endlessbg.jpg';?>)'></div>
</section>