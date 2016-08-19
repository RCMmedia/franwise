<?php 
 //wp_deregister_script('jquery');

add_theme_support( 'post-thumbnails' ); 

require_once('wp-advanced-search/wpas.php'); 
	
function my_search_form() {
	$args = array();
	
    $args['form']['ajax'] = array( 'enabled' => true,
                                   'show_default_results' => false,
                                   'results_template' => 'template-ajax-results.php', // This file must exist in your theme root
                                   'button_text' => 'Load More Results');
                                   
    
    $args['wp_query'] = array('post' => 'Post', 'page' => 'Page',
                              'posts_per_page' => 5);
                              
    $args['fields'][] = array('type' => 'search',
                              'title' => 'Search',
                              'placeholder' => 'Search');
                              
    $args['fields'][] = array( 'type' => 'submit',
                               'class' => 'button',
                               'value' => 'Search' );
                              
    register_wpas_form('search-form', $args);    
}
add_action('init', 'my_search_form');

?>