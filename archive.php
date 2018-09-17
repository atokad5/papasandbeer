<?php

//Archive Template
//this is set up to handle categories, tags, author archives

$eventers = get_body_class();


get_header(); ?>



		<?php 

			if(in_array('tax-events-categories', $eventers)){?>
				<?php get_template_part('partials/arc-eventers'); ?>

			<?php } 
			else{ ?>
				
				<?php get_template_part('partials/blog-arc'); ?>


			<?php } ?>
 
	
<?php

get_footer();
?>
