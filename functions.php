<?php

  add_action('mendo_route_alert', 'make_route_alert');
  
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
?><div id="route-dropdown" >
		<select id="route-select" 	style="width: 180px; height: 35px; font-size: 18px; padding: 3px 0 0 10px; color: #666;">
		  <option selected="selected" >Select a Route</option>
		  <option value="1-20">Rts. 1 and 20 - Willits and Redwood Valley</option>
		  <option value="7-9">Rts. 7 and 9 - Ukiah</option>
		  <option value="5-60">Rts. 5 and 60 - Ft. Bragg/North Coast</option>
		  <option value="65">Rt. 65 CC Rider</option>
		  <option value="75">Rt. 75 South Coast/Ukiah</option>
		  <option value="95">Rt. 95 South Coast/Santa Rosa</option>
		</select>
	</div><!-- end #route-dropdown -->
	<?php
}


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