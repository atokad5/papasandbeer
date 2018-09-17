<?php 
	$root = get_template_directory_uri();

 ?>
<section class="the-bread">
	<div class="inner">
		<ul class="bread-crumbs">

			<?php  

			$breadCrumbs = get_field('page_bread_crumbs' , 'options');
			foreach($breadCrumbs as $theCrumbs){ ?>

			<li>
				

				<img class="bottom-bread-arrow" src="<?php echo "$root/assets/img/breadarr-bot.png"; ?>" alt="">
				<img class="top-bread-arrow" src="<?php echo "$root/assets/img/breadarr-top.png"; ?>" alt="">

				<img class="right-bread-arrow" src="<?php echo "$root/assets/img/breadarr-right.png"; ?>" alt="">
				<a class="theB" href="<?php echo $theCrumbs['page_url']; ?>"><?php echo $theCrumbs['page_link_text']; ?> 
				<!-- <i class="fa fa-angle-double-right" aria-hidden="true"></i> -->
				</a>
			</li>

			<?php } ?>

		</ul>
	</div>
</section>