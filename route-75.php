<?php
/*
Template Name: route-75
*/
?>

<?php get_header(); ?>
<div id="page-overlay">

<div id="route-header">
	<div id="route-circle-icon-75" class="route-circle-icon">
	</div>
	<div id="route-title">
	Route 75
	</div>
	<?php do_action('route_select'); ?>

</div><!-- #route-header -->


<div id="route-breadcrumb" class="breadcrumb">
		<?php if(function_exists(simple_breadcrumb)) {simple_breadcrumb();} ?>
	</div><!-- end #route-breadcrumb -->

<?php do_action('mendo_route_alert', '75'); ?>

<div id="route-two-col-wrap">
	<div id="route-col-left">
		<div id="route-desc">

		<?php
		wp_reset_postdata();
		the_field('route-desc'); ?>

<!--Route 75 connects the South Coast with Ukiah, Monday through Saturday. Serves South Coast communities from Navarro River Junction to Gualala, and inland communities of Navarro, Philo and Boonville. Connects with Route 60 at the Navarro River Junction Monday through Friday.
	-->
	</div> <!-- end #route-desc -->
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
				Monday through Saturday. No	service	to Ft. Bragg on Saturdays.
			</div> <!-- end #days-of-week -->
			<div id="schedule-buttons">
			<a href="/routes/route-75/northbound/"  >
				<div id="schedule-northbound-75" class="route-popup-button route-button-left route-button-first route-button-odd">
					<div class="popup-button-title">
					Northbound
					</div> <!-- end #popup-button-title -->
					<div class="popup-button-desc" >
					South Coast to Ukiah
					</div> <!-- end popup-button-desc -->
				</div> <!-- end #schedule-northbound-65 -->
				</a>

					<!-- link to South-bound timetable, ending July 25, 2014; remove this on Monday -->

				<a href="/routes/route-75/southbound/southbound-effective-july-2014/"  >
				<div id="schedule-southbound-75" class="route-popup-button route-button-right route-button-last route-button-even"">
				<div class="popup-button-title">
					Southbound<br/>
					</div> <!-- end #popup-button-title -->
					<div class="popup-button-desc">
					Ukiah to South Coast
					</div> <!-- end popup-button-desc -->
				</div> <!-- end #schedule-southbound-65-->
				</a>

				<!-- links to new timetables effective July 27, 2014 -->


				<br style="clear: both;" />
			</div> <!-- end #schedule-buttons -->

			<div id="fare-table-link">
				<a href="/fares/#5-60-75">See fare table for this route</a> >>
			</div> <!-- end #fare-table-link -->
		</div> <!-- end #route-schedule-box -->



	<div id="route-connections-box" class="route-box">
		<div id="route-connections-box-title" class="route-title-box">
			<div id="route-connections-box-title-text" class="route-title-box-text">
				Timetable
			</div> <!-- end #route-connections-box-title-text -->
			<br style="clear: both;" />
		</div> <!-- end #route-connections-box-title -->


			<div class="route-inner-box">
				<div id="route-pdf-icon"></div><div id="route-pdf-link"><a href="http://mendocinotransit.org/wp-content/uploads/2018/08/Route-75.pdf">Download PDF version of Route 75 timetable.</a></div> <!-- end #route-pdf-link -->
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





			</div> <!-- end #map-col-left -->
			<div id="route-map-col-right">

			<div class="route-detail-map-image-wrap">
					<div class="map-detail-title-bar">
						<div class="map-detail-title-text">
							Ukiah Inset Detail
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
							Coastal Map Detail
						</div> <!-- end map-detail-title-text -->
						<div class="map-detail-zoom-icon">
						</div><!-- end .map-detail-zoom-icon -->
						<br style="clear: both;" />
					</div><!-- end map-detail-title-bar -->

					<a href="/wp-content/images/detail_maps/Coastal_Map_Detail_08-big.jpg" data-lightbox="image-1"><img src="/wp-content/images/detail_maps/Coastal_Map_Detail_08-sml.jpg" /></a>
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