<?php
/*
Template Name: route-5-1
*/
?>

<?php get_header(); ?>
<div id="page-overlay">

<div id="route-header">
	<div id="route-circle-icon-5" class="route-circle-icon"></div>
	<h1 id="route-title">ROUTE 5</h1>
	
	<?php do_action('route_select'); ?>
</div><!-- #route-header -->


<div id="route-breadcrumb" class="breadcrumb">
		<?php //if(function_exists(simple_breadcrumb)) {simple_breadcrumb();} ?>
	</div><!-- end #route-breadcrumb -->

<?php do_action('mendo_route_alert', '5'); ?>

<div id="route-two-col-wrap">
	<div id="route-col-left">
		<div id="route-desc">
Route 65 - CC Rider runs 7-days per week from Ft. Bragg to Willits, Ukiah and Santa Rosa.		</div> <!-- end #route-desc -->
		<div id="route-schedule-box" class="route-box">
			<div id="route-schedule-box-title" class="route-title-box">
			 	<div id="route-schedule-box-title-text" class="route-title-box-text">
			 		Schedule
			 	</div> <!-- end #route-schedule-box-title-text -->
			 	<div id="route-schedule-popup-info-text">
			 	 (Click to pop-up a schedule for each route)
			 	</div> <!-- end#route-schedule-popup-info-text -->
			 	<br style="clear: both;" />
			</div> <!-- end #route-schedule-box-title -->
			<div id="route-days-of-week">
				7 Days a week
			</div> <!-- end #days-of-week -->
			<div id="schedule-buttons">
			<a href="http://www.mendocinotransit.org/routes/route-65-cc-rider/route-95-timetable/"  >
				<div id="schedule-northbound-65" class="route-popup-button route-button-left route-button-first route-button-odd">
					<div class="popup-button-title">
					Northbound
					</div> <!-- end #popup-button-title -->
					<div class="popup-button-desc" >
					Santa Rosa -> Fort Bragg
					</div> <!-- end popup-button-desc -->
				</div> <!-- end #schedule-northbound-65 -->
				</a>
				<a href="http://www.mendocinotransit.org/routes/route-65-cc-rider/route-95-timetable/"  >
				<div id="schedule-southbound-65" class="route-popup-button route-button-right route-button-last route-button-even"">
				<div class="popup-button-title">
					Southbound
					</div> <!-- end #popup-button-title -->
					<div class="popup-button-desc">
					Fort Bragg -> Santa Rosa
					</div> <!-- end popup-button-desc -->
				</div> <!-- end #schedule-southbound-65-->
				</a>
				<br style="clear: both;" />
			</div> <!-- end #schedule-buttons -->

			<div id="fare-table-link">
				<a href="/fares/#65">See fare table for this route</a> >>
			</div> <!-- end #fare-table-link -->
		</div> <!-- end #route-schedule-box -->


	<div id="route-connections-box" class="route-box">
		<div id="route-connections-box-title" class="route-title-box">
			<div id="route-connections-box-title-text" class="route-title-box-text">
				Connections in Santa Rosa
			</div> <!-- end #route-connections-box-title-text -->
			<br style="clear: both;" />
		</div> <!-- end #route-connections-box-title -->
		<div id="route-connections-container">
			<div class="route-connection">
				<div class="route-connection-title">
					Pickups-Dropoffs in Santa Rosa
				</div> <!-- end .route-connection-title -->
				<div class="route-connection-desc">
					While the Route 95 and 65 buses are in Santa Rosa, drop- offs and pick-ups are available within a 3 mile radius of the 2nd St. Transit Mall for an additional fare of $2.00.
					For additional information for Route 95, call 707-884-3723 or ask the driver (recommended). For Route 65, call 707-964-0420 or ask the driver.
				</div> <!-- end .route-connection-desc -->
			</div> <!-- end .route-conneciton -->
			<div class="route-connection">
				<div class="route-connection-title">
					To and From San Francisco
				</div> <!-- end .route-connection-title -->
				<div class="route-connection-desc">
					Golden Gate Transit Route 101 provides hourly service between downtown San Francisco and the 2nd St. Transit Mall in Santa Rosa. There you can connect between Golden Gate Transit Route 101 and MTA’s Route 95 and Route 65.
				</div> <!-- end .route-connection-desc -->
			</div><!-- end .route-conneciton -->
			<div class="route-connection">
				<div class="route-connection-title">
					To and From San Francisco, Oakland and Sonoma County Airports
				</div> <!-- end .route-connection-title -->
				<div class="route-connection-desc">
					The SB Route 65 will drop off at the Sonoma County Airport by request. The Northbound Route 65 picks up at the Sonoma County Airport daily at 3:05 p.m. The Southbound Route 95 will take you to the Sonoma County Airport for an additional fare of $2.50. The Northbound Route 95 picks up at the Sonoma County Airport daily at 3:45 p.m. There you can also catch the Sonoma County Airport Express for trips to Oakland and SFO airports.
				</div> <!-- end .route-connection-desc -->
			</div><!-- end .route-conneciton -->
			<div class="route-connection">
				<div class="route-connection-title">
					Sonoma County and Santa Rosa Buses
				</div> <!-- end .route-connection-title -->
				<div class="route-connection-desc">
					At the 2nd Street Transit Mall, you can also transfer to Sonoma County Transit and Santa Rosa CityBus routes.
				</div> <!-- end .route-connection-desc -->
			</div><!-- end .route-conneciton -->
			<div class="route-connection" class="route-connection-last">
				<div class="route-connection-title">
					To and From Amtrak Bus
				</div> <!-- end .route-connection-title -->
				<div class="route-connection-desc">
					MTA Route 95 and Route 65 serve the Amtrak bus stop at Railroad St./3rd St. (Courtyard by Marriott) in Santa Rosa.
				</div> <!-- end .route-connection-desc -->
			</div><!-- end .route-conneciton -->
		</div> <!-- end #route-connections-container -->
	</div> <!-- end #route-connections-box -->


	<div id="route-connections-box" class="route-box">
		<div id="route-connections-box-title" class="route-title-box">
			<div id="route-connections-box-title-text" class="route-title-box-text">
				Timetable
			</div> <!-- end #route-connections-box-title-text -->
			<br style="clear: both;" />
		</div> <!-- end #route-connections-box-title -->

			<div class="route-inner-box">
				<div id="route-pdf-icon"></div><div id="route-pdf-link"><a href="/files/Rt_65.pdf">Download PDF version of Route 65 timetable.</a></div> <!-- end #route-pdf-link -->
				<br style="clear: both;" />
			</div> <!-- end #route-inner-box" -->

	</div> <!-- end #route-connections-box -->

	</div> <!-- #end route col left -->


	<div id="route-col-right">

		<div id="route-connections-box-title" class="route-title-box">
			<div id="route-connections-box-title-text" class="route-title-box-text">
				Detail and Overview maps
			</div> <!-- end #route-connections-box-title-text -->
			<br style="clear: both;" />
		</div> <!-- end #route-connections-box-title -->



			<div id="route-map-image-col-wrap">
			<div id="route-map-col-left">

			<div class="route-detail-map-image-wrap">
					<div class="map-detail-title-bar">
						<div class="map-detail-title-text">
							Ukiah Detail
						</div> <!-- end map-detail-title-text -->
						<div class="map-detail-zoom-icon">
						</div><!-- end .map-detail-zoom-icon -->
						<br style="clear: both;" />
					</div><!-- end map-detail-title-bar -->

					<a href="/wp-content/images/detail_maps/ukiah-detail-11-big.jpg" data-lightbox="image-1"><img src="/wp-content/images/detail_maps/ukiah-detail-11-sml.jpg" /></a>
				</div> <!-- end .route-detail-map-image-wrap -->


			<div class="route-detail-map-image-wrap">
					<div class="map-detail-title-bar">
						<div class="map-detail-title-text">
							Ukiah Detail
						</div> <!-- end map-detail-title-text -->
						<div class="map-detail-zoom-icon">
						</div><!-- end .map-detail-zoom-icon -->
						<br style="clear: both;" />
					</div><!-- end map-detail-title-bar -->

					<a href="/wp-content/images/detail_maps/Ukiah_Inset_Detail-big.jpg" data-lightbox="image-1"><img src="/wp-content/images/detail_maps/Ukiah_Inset_Detail_sml.jpg" /></a>
				</div> <!-- end .route-detail-map-image-wrap -->

				<div class="route-detail-map-image-wrap">
					<div class="map-detail-title-bar">
						<div class="map-detail-title-text">
							Santa Rosa Detail
						</div> <!-- end map-detail-title-text -->
						<div class="map-detail-zoom-icon">
						</div><!-- end .map-detail-zoom-icon -->
						<br style="clear: both;" />
					</div><!-- end map-detail-title-bar -->

					<a href="/wp-content/images/detail_maps/Santa_Rosa_Detail-big.jpg" data-lightbox="image-1"><img src="/wp-content/images/detail_maps/Santa_Rosa_Detail-sml.jpg" /></a>
				</div> <!-- end .route-detail-map-image-wrap -->


			</div> <!-- end #map-col-left -->
			<div id="route-map-col-right">
				<div class="route-detail-map-image-wrap">
					<div class="map-detail-title-bar">
						<div class="map-detail-title-text">
							Willits Detail
						</div> <!-- end map-detail-title-text -->
						<div class="map-detail-zoom-icon">
						</div><!-- end .map-detail-zoom-icon -->
						<br style="clear: both;" />
					</div><!-- end map-detail-title-bar -->

					<a href="/wp-content/images/detail_maps/Willits-Detail-big.jpg" data-lightbox="image-1"><img src="/wp-content/images/detail_maps/Willits-Detail-sml.jpg" /></a>
				</div> <!-- end .route-detail-map-image-wrap -->
				<div class="route-detail-map-image-wrap">
					<div class="map-detail-title-bar">
						<div class="map-detail-title-text">
							Calpella Detail
						</div> <!-- end map-detail-title-text -->
						<div class="map-detail-zoom-icon">
						</div><!-- end .map-detail-zoom-icon -->
						<br style="clear: both;" />
					</div><!-- end map-detail-title-bar -->

					<a href="/wp-content/images/detail_maps/Calpella-Detail-big.jpg" data-lightbox="image-1"><img src="/wp-content/images/detail_maps/Calpella-Detail-sml.jpg" /></a>
				</div> <!-- end .route-detail-map-image-wrap -->

				<div class="route-detail-map-image-wrap">
					<div class="map-detail-title-bar">
						<div class="map-detail-title-text">
							Fort Bragg Detail
						</div> <!-- end map-detail-title-text -->
						<div class="map-detail-zoom-icon">
						</div><!-- end .map-detail-zoom-icon -->
						<br style="clear: both;" />
					</div><!-- end map-detail-title-bar -->

					<a href="/wp-content/images/detail_maps/Ft-Bragg-Detail-Map-big.jpg" data-lightbox="image-1"><img src="/wp-content/images/detail_maps/Ft-Bragg-Detail-Map-sml.jpg" /></a>
				</div> <!-- end .route-detail-map-image-wrap -->

			</div> <!-- end #map-col-right -->
		</div> <!-- end #route-map-image-col-wrap -->
		<br style="clear: both;" />

	</div> <!-- end #route-col-right -->
	<br style="clear: both;" />
</div> <!-- end #route-two-col-wrap -->





<?php the_post(); ?>

                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>
      <h1 class="entry-title"><?php //the_title(); ?></h1>


</div> <!-- post -->




</div> <!-- page-overlay -->

<?php get_footer(); ?>