<?php

add_action( 'init', 'stop_heartbeat', 1 );
function stop_heartbeat() {
wp_deregister_script('heartbeat');
}



add_action('init', 'events_type_register');
function events_type_register() {
   $newsLabels = array(
      'name' => 'Events Posts',
      'singular_name' => 'Events Post',
      'add_new' => 'New Events Posts',
      'add_new_item' => 'Add New Events Posts',
      'edit_item' => 'Edit Events Posts',
      'new_item' => 'New Events Posts',
      'view_item' => 'View Events Posts',
      'search_items' => 'Search Events Posts',
      'not_found' => 'Found No Events Posts',
      'not_found_in_trash' => 'Nothing in Trash',
      'parent_item_colon' => ''
   );
   $newsarg = array(
      'labels' => $newsLabels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'query_var' => true,
      'menu_icon' => 'dashicons-calendar',
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => true,
      'taxonomies'  => array( 'custom_taxonomies' ),
      'menu_position' => 4,
      'supports' => array('title','editor','thumbnail', 'custom-fields')
     );
   register_post_type( 'events' , $newsarg );
}




register_taxonomy( 'events-categories',
   array('events'),
   array('hierarchical' => true,
      'labels' => array(
         'name' => 'Event Month',
         'singular_name' => 'Event Month',
         'search_items' =>  'Search Event Month',
         'all_items' => 'All Event Month',
         'parent_item' => 'Parent Event Month',
         'parent_item_colon' => 'Parent Event Month',
         'edit_item' => 'Edit Event Month',
         'update_item' => 'Update Event Month',
         'add_new_item' => 'Add Event Month',
         'new_item_name' => 'New Event Month'
      ),
      'show_admin_column' => true,
      'show_ui' => true,
      'query_var' => true,
      'show_admin_column' => true
   )
);


function get_category_newslabel($postID, $linked=false, $is_feature=false) {

   $cat_names = array();
   $is_news = get_post_type() === 'events' || $is_feature;

   //var_dump($is_news);

   if ($is_news) {
      //$catargs = array('name'=>'custom_taxonomies');
      $cats = get_the_terms($postID, 'events-categories');
      if(is_array($cats)){
         foreach($cats as $cat) {
            $cat_names[] = $cat->name;
         }
      }
   } else {
      $cats = get_the_category($postID);
      foreach($cats as $cat) {
         $cat_names[] = $cat->cat_name;
      }
   }

   return implode(', ', $cat_names);
}


// FAQ POST TYPE 
add_action('init', 'faq_type_register');
function faq_type_register() {
   $faqLabels = array(
      'name' => 'FAQ Posts',
      'singular_name' => 'FAQs Post',
      'add_new' => 'New FAQs Posts',
      'add_new_item' => 'Add New FAQs Posts',
      'edit_item' => 'Edit FAQs Posts',
      'new_item' => 'New FAQs Posts',
      'view_item' => 'View FAQs Posts',
      'search_items' => 'Search FAQs Posts',
      'not_found' => 'Found No FAQs Posts',
      'not_found_in_trash' => 'Nothing in Trash',
      'parent_item_colon' => ''
   );
   $faqsarg = array(
      'labels' => $faqLabels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'query_var' => true,
      'menu_icon' => 'dashicons-feedback',
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => true,
      'taxonomies'  => array( 'custom_taxonomies' ),
      'menu_position' => 4,
      'supports' => array('title','editor','thumbnail', 'custom-fields')
     );
   register_post_type( 'faq' , $faqsarg );
}




register_taxonomy( 'faq-categories',
   array('faq'),
   array('hierarchical' => true,
      'labels' => array(
         'name' => 'Add New FAQ Type',
         'singular_name' => 'FAQ',
         'search_items' =>  'Search FAQ',
         'all_items' => 'All FAQs',
         'parent_item' => 'Parent FAQ',
         'parent_item_colon' => 'Parent FAQ',
         'edit_item' => 'Edit FAQ',
         'update_item' => 'Update FAQ',
         'add_new_item' => 'Add FAQ',
         'new_item_name' => 'New FAQ'
      ),
      'show_admin_column' => true,
      'show_ui' => true,
      'query_var' => true,
      'show_admin_column' => true
   )
);


function get_category_faqLabel($postID, $linked=false, $is_feature=false) {

   $cat_namesTwo = array();
   $is_newsTwo = get_post_type() === 'faq' || $is_feature;

   //var_dump($is_news);

   if ($is_news) {
      //$catargs = array('name'=>'custom_taxonomies');
      $catsTwo = get_the_terms($postID, 'faq-categories');
      if(is_array($catsTwo)){
         foreach($catsTwo as $catTwo) {
            $cat_namesTwo[] = $catTwo->name;
         }
      }
   } else {
      $catsTwo = get_the_category($postID);
      foreach($catsTwo as $catTwo) {
         $cat_namesTwo[] = $catTwo->cat_nameTwo;
      }
   }

   return implode(', ', $cat_names);
}


// Hotels POST TYPE 
add_action('init', 'hotel_type_register');
function hotel_type_register() {
   $faqLabelsTwo = array(
      'name' => 'Hotels',
      'singular_name' => 'Hotels',
      'add_new' => 'Add Hotel',
      'add_new_item' => 'Add New Hotel',
      'edit_item' => 'Edit Hotel',
      'new_item' => 'New FAQs Posts',
      'view_item' => 'View All Hotels',
      'search_items' => 'Search Hotel',
      'not_found' => 'Found No Hotels',
      'not_found_in_trash' => 'Nothing in Trash',
      'parent_item_colon' => ''
   );
   $faqsargTwo = array(
      'labels' => $faqLabelsTwo,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'query_var' => true,
      'menu_icon' => 'dashicons-feedback',
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => true,
      'taxonomies'  => array( 'custom_taxonomies' ),
      'menu_position' => 4,
      'supports' => array('title','editor','thumbnail', 'custom-fields')
     );
   register_post_type( 'hotels' , $faqsargTwo );
}





if (function_exists('acf_add_options_page')) {
	acf_add_options_page();
	acf_set_options_page_title('Papas&Beer');

}



// changes permissions for options page, allows lower-level user access to options pages
if( function_exists('acf_set_options_page_capability') ) {
    acf_set_options_page_capability( 'manage_options' );
}


add_theme_support( 'post-thumbnails' ); 

// admin footer message, shown in bottom left on all screens
function mag_admin_footer() {
   echo '<span id="footer-thankyou">Wordpress Theme by <a href="http://www.zitrocreative.com">Zitro Creative</a>.</span>';
}
add_filter('admin_footer_text', 'mag_admin_footer');

function wpdocs_excerpt_more( $more ) {
    return '.....';
    return 4;
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


function thenew_register_nav_menu(){
   register_nav_menus(array(
      'Primary_menu' => __('Primary Navigation Menu'),
      'Footer_menu' => __('Footer Navigation Menu')
   ));
}
add_action('after_setup_theme', 'thenew_register_nav_menu');


/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

   register_sidebar( array(
      'name'          => 'Blog Right Sidebar',
      'id'            => 'home_right_1',
      'before_widget' => '<div>',
      'after_widget'  => '</div>',
      'before_title'  => '',
      'after_title'   => ''
   ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );





