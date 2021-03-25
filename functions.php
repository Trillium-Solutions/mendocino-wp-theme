<?php

  add_action('mendo_route_alert', 'make_route_alert');
  
  register_nav_menus( array(
	'agency-information' => 'Agency Information Links',
  ) );

  
  
  function make_route_alert($routeNumber){  
  global $post;
      if (is_page()) {
      
      		
      		$routes = explode('-', $routeNumber); 
      		$call = "cat=4&showposts=5&tag=";  
      		$multi = false;
      		foreach ($routes as $routeNum) {
      			if($multi) { $call .= ',';}
      			$call.= 'route-'.$routeNum.'-alert';
      			$multi = true;
      		}
      		//echo $call;
		  	$posts = get_posts ($call); ?>
			  <?php if ($posts) { 
			  ?>
			
<div id="service-alert-box" class="route-box route-alert-box-<?php echo $routeNum; ?>">
	<div id="service-alert-inner-box">
		<?php // conditional if is double route  
		if ($routeNumber == "7-9") { 
		?> <h2>Service Alerts for Routes 7 and 9</h2>  
		<?php } elseif($routeNumber == "1-20") { ?>
		<h2>Service Alerts for Routes 1 and 20</h2>  
		<?php } elseif($routeNumber == "5-60") { ?>
		<h2>Service Alerts for Routes 5 and 60</h2>  
		<?php } else  {?> 
		<h2>Service Alerts for Route <?php echo $routeNumber; ?></h2>  <?php } ?>
		<ul>
		       <?php
				foreach ($posts as $post):
				  setup_postdata($post); ?>
				   <a href="<?php the_permalink(); ?> ">
				   <li>
				   <?php the_date(); ?>  -- 
				 <?php the_title(); ?></a>
			   </li>
			   <?php endforeach;
			  
			?>
		</ul>
	</div> <!-- end #service alert-inner-box -->
</div> <!-- end #service alert-box -->




<?php
}
}
}


add_action('route_select', 'routeSelect');
function routeSelect() {
	$q = array(
		'post_type'			=> 'route',
		'posts_per_page'	=> -1,
		'meta_key'			=> 'route_sort_order',
		'orderby'			=> 'meta_value_num',
		'order'				=> 'ASC',
	);
	$rtes = new WP_Query($q);
	if ($rtes->have_posts()) {
		echo '<div id="route-dropdown">';
		echo '<select id="route-select" class="route-drop-down">';
		echo '<option selected="selected">';
		printf('Select a Route');
		echo '</option>';
	while ($rtes->have_posts()) {
			$rtes->the_post();
			$name = get_post_meta(get_the_ID(), 'route_long_name', true);
			$sname = get_post_meta(get_the_ID(), 'route_short_name', true);
			echo '<option value="route-';
			echo $sname;
			echo '">';
			printf('Rt. ');
			printf($sname);
			printf(' ');
			printf($name);
			echo '</option>';
		}
		echo '</select>';
		echo '</div>';
		wp_reset_postdata();
	}
}


/*function routeSelect() {	
?>
<div id="route-dropdown" >
		<select id="route-select" 	style="width: 180px; height: 35px; font-size: 18px; padding: 3px 0 0 10px; color: #666;">
		  <option selected="selected" >Select a Route</option>
			<option value="<?php echo get_post_meta( get_the_ID()); ?>"><?php the_title(); ?></option>
		  <!--<option value="1">Rt. 1 Willits</option>
		  <option value="20">Rt. 20 Redwood Valley</option>
		  <option value="7-9">Rts. 7 and 9 - Ukiah</option>
		  <option value="5">Rt. 5 Ft. Bragg</option>
		  <option value="60">Rt. 60 North Coast</option>
		  <option value="65">Rt. 65 CC Rider</option>
		  <option value="75">Rt. 75 South Coast/Ukiah</option>
		  <option value="95">Rt. 95 South Coast/Santa Rosa</option>-->
		  <!--<?php //endwhile; endif; wp_reset_postdata(); ?>-->
		</select>
	
	</div><!-- end #route-dropdown -->*/

	//<?php
//}




add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {

	/* Register the 'primary' sidebar. */
	register_sidebar(
		array(
			'id' => 'primary',
			'name' => __( 'Primary' ),
			'description' => __( 'A short description of the sidebar.' )
		)
	);

	/* Repeat register_sidebar() code for additional sidebars. */
}

?>



<?php 
$labels = array(
        'name'               => _x( 'News', 'post type general name' ),
        'singular_name'      => _x( 'News Post', 'post type singular name' ),
        'menu_name'          => _x( 'News', 'admin menu'),
        'name_admin_bar'     => _x( 'News Post', 'add new on admin bar'),
        'add_new'            => _x( 'Add New', 'News Post'),
        'add_new_item'       => __( 'Add New Post'),
        'new_item'           => __( 'New Post'),
        'edit_item'          => __( 'Edit News Post'),
        'view_item'          => __( 'View News Post'),
        'all_items'          => __( 'All News'),
        'search_items'       => __( 'Search News'),
        'parent_item_colon'  => __( 'Parent News Post:'),
        'not_found'          => __( 'No news found.'),
        'not_found_in_trash' => __( 'No news items found in Trash.')
    );

$args = array(
        'menu_icon'          => 'dashicons-megaphone',
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,       
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'news' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'revisions', 'editor'),
    );

register_post_type( 'news', $args );




function mendo_custom_timetables() {
	$route_id = get_post_meta(get_the_ID(), 'route_id', true);

	$date = new DateTime();
	$today = intval($date->format('Ymd'));

	// Set a date 14 days in the future from today
	$date->add(new DateInterval('P14D'));
	$soon = intval($date->format('Ymd'));

	$timetable_args = array(
		'post_type'			=> 'timetable',
		'posts_per_page' 	=> -1,
		'meta_key'			=> 'direction_label',
		'orderby'			=> 'meta_value',
		'order'				=> 'DESC',
		'meta_query'	=> array(
			'relation'	=> 'AND',
			array(
				'key'	=> 'route_id',
				'value'	=> $route_id,
			),
			array(
				'key'	=> 'start_date',
				'value'	=> $today,
				'compare'	=> '<=',
				'type'	=> 'NUMERIC',
			)
		)
	);
	$timetables = new WP_Query( $timetable_args );
	if ( $timetables->have_posts() ) { ?>
			
		<div id="schedule-buttons">
		<?php
		while ( $timetables->have_posts() ) {
			$timetables->the_post();
			// Get timetable metadata
			$permalink = get_permalink($post_id);
			$dir = get_post_meta( get_the_ID(), 'direction_label', true);

			printf('<a href="%s"" class="timetable-link">', $permalink);
			echo '<div id="schedule-northbound-65" class="route-popup-button route-button-left route-button-first route-button-odd route-button-short">';
			echo '<div class="popup-button-title">';
			echo $dir;
			echo '</div>';
			echo '</div>';
			printf ('</a>');
		}
		echo '<br style="clear: both;" />';
		echo '</div>';
		wp_reset_postdata();
	} 
}




?>

