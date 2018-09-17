<?php 
		$root = get_template_directory_uri();
		$getContentBlock = get_field('venue_posts');
		$i ='';
 ?>


<section>
	<div class="inner">
		
	<?php 

		foreach($getContentBlock as $theContent){ 
				$i++
			?>
		<div class="entry-parent-el is-g <?php if($i % 2 == 0){
				echo "suh";
			} ?>">

			<div class="entry-el has-img-v">
				<div class="entry-el-inner">
					<figure class="the-entry-img">
						<img src="<?php echo $theContent['section_image'] ?>" alt="">
					</figure>
				</div>
			</div>

			<div class="entry-el has-txt-v">
				<div class="entry-el-inner">
					<?php echo $theContent['section_content_block']; ?>
				</div>
			</div>

		<div class="clear-block"></div>
		</div>
		<hr>
	<?php } ?>

	</div>
</section>