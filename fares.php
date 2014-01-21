<?php

/*
Template Name: fares
*/


get_header(); ?>

<div id="page-overlay">
		
			<?php the_post(); ?>
			<h1 class="entry-title main"><?php the_title(); ?></h1>
<?php if(function_exists(simple_breadcrumb)) {simple_breadcrumb();} ?>
			<br/>
					
						<hr />
									<br/>
 
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div id="page-title">
                    
                    
                    
                    <form id="fare_zones" method="POST" action="http://www.mendocinotransit.org/site_resources/fare_calculator/proxy.php">
                    <input type="hidden" name="csurl" value="http://trilliumtransit.com/clients/mendocino/calculate_fare_result.php">

<h2 id="calculator-title">Fare Calculator</h2>

Start:


<select name="start_zone" id="start_zone" onChange="update_end_zones(this);clear_fare_result();">
<option value="0">Select start zone first</option>
</select>

End:


<select name="end_zone" id="end_zone" onChange="clear_fare_result();">
<option value="0"></option>
</select>


<input type="submit" value="Calculate fare">


<div id="fare_result">
</div>




</form>
                    
                    <?php the_content(); ?>
                    <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
                    </div> <!--page title-->

			
</div> <!-- page-overlay -->
<?php get_footer(); ?>