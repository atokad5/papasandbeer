<?php /* Template Name: About */

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
  
  <section class="about-content">
    <div class="inner">
      <div class="the-main-content_section">
        <?php the_field('main_section_content');?>
      </div>
    </div>
  </section>  
  
  <div class="inner">
    <hr>
  </div>


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
    <hr style="margin-bottom: 3em;">
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