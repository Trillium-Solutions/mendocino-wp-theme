<?php
/*
Template Name: route-7-9
*/
?>

<?php get_header(); ?>
<div id="page-overlay">

<header id="route-header">
	<div id="route-circle-icon-7" class="route-circle-icon"></div>
	<div id="route-circle-icon-9" class="route-circle-icon"></div>
		<h1 id="route-title"> ROUTES 7 &amp; 9 - UKIAH </h1>
		<?php do_action('route_select'); ?>
</header><!-- #route-header -->


<div id="route-breadcrumb" class="breadcrumb">
		<?php //if(function_exists(simple_breadcrumb)) {simple_breadcrumb();} ?>
	</div><!-- end #route-breadcrumb -->

<?php do_action('mendo_route_alert', '7-9'); ?>

<main>
<div id="route-two-col-wrap">
	<div id="route-col-left">


	<!-- ROUTE 7 -->


		<div id="route-identifier-7" class="route-identifier">
			<div id="route-desc">
				<img src="/images/mapsandschedules/maps-n-schedules-circ-7.png" height="15" > <strong>Route 7 Ukiah Jitney</strong> is a direct route connecting north and south Ukiah.
				<p>Please see PDF for current reduced service</p>
			</div> <!-- end #route-desc -->
		</div>
		<div id="route-identifier-9" class="route-identifier">
			<div id="route-desc">
				<img src="/images/mapsandschedules/maps-n-schedules-circ-9.png" height="15" > <strong> Route 9 Ukiah Local</strong> offers service between locations within Ukiah.
				<em> Deviated Fixed Route: Ukiah Local 9 evening service after 6:00 pm offers deviated service to persons living with ¾ miles of the Local Route.  This service is available to the general public as well as seniors and persons with disabilities, for an additional charge. Advance reservations are required.  Please call 462-3881 before 5:00pm for pick up.</em>
			</div> <!-- end #route-desc -->
		</div>
		<div id="route-schedule-box" class="route-box">
			<div id="route-schedule-box-title" class="route-title-box">
			 	<div id="route-schedule-box-title-text" class="route-title-box-text">
			 		Route 7 & 9 Schedule
			 	</div> <!-- end #route-schedule-box-title-text -->
			 	<div id="route-schedule-popup-info-text">
			 	 (Click to pop-up a schedule for each route)
			 	</div> <!-- end#route-schedule-popup-info-text -->
			 	<br style="clear: both;" />
			</div> <!-- end #route-schedule-box-title -->
			<div id="route-days-of-week">
				Monday through Friday
			</div> <!-- end #days-of-week -->

			<!-- begin new schedule update 18-Aug-2013 -->
			<div id="schedule-buttons">
			<a href="/routes/routes-7-and-9/route-7-and-9-northbound/"  >
				<div id="schedule-northbound-65" class="route-popup-button route-button-left route-button-first route-button-odd route-button-short" style="height:45px;">
					<div class="popup-button-title">
					Northbound
					<br/><span style="font-size:12px;"></span>
					</div> <!-- end #popup-button-title -->
					<div class="popup-button-desc" >

					</div> <!-- end popup-button-desc -->
				</div> <!-- end #schedule-northbound-65 -->
				</a>
				<a href="/routes/routes-7-and-9/route-7-and-9-southbound/"  >
				<div id="schedule-southbound-65" class="route-popup-button route-button-right route-button-last route-button-even route-button-short" style="height:45px;">
				<div class="popup-button-title">
					Southbound
					<br/><span style="font-size:12px;"></span>
					</div> <!-- end #popup-button-title -->
					<div class="popup-button-desc">

					</div> <!-- end popup-button-desc -->
				</div> <!-- end #schedule-southbound-65-->
				</a>

				<br style="clear: both;" />
			</div> <!-- end #schedule-buttons -->

			<div id="fare-table-link">
				<a href="/fares/#inland">See fare table for this route</a> >>
			</div> <!-- end #fare-table-link -->
		</div> <!-- end #route-schedule-box -->
	

	<div class="route-connections-box route-box">
		<div class="route-connections-box-title route-title-box">
			<div class="route-connections-box-title-text route-title-box-text">
				PDF Timetables
			</div> <!-- end #route-connections-box-title-text -->
			<br style="clear: both;" />
		</div> <!-- end #route-connections-box-title -->

			<div class="route-inner-box">
				<div id="route-pdf-icon"></div>
					<div id="route-pdf-link">
						<a href="<?php the_field('schedule_pdf'); ?>" target="_blank">Download PDF version of Route 7 & 9 timetables.</a></div> <!-- end #route-pdf-link -->
				<br style="clear: both;" />
			</div> <!-- end #route-inner-box" -->

	</div> <!-- end #route-connections-box -->

	</div> <!-- #end route col left -->


	<aside id="route-col-right">

		<div class="route-connections-box-title route-title-box">
			<div class="route-connections-box-title-text route-title-box-text">
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
							Ukiah Downtown Detail
						</div> <!-- end map-detail-title-text -->
						<div class="map-detail-zoom-icon">
						</div><!-- end .map-detail-zoom-icon -->
						<br style="clear: both;" />
					</div><!-- end map-detail-title-bar -->

					<a href="/wp-content/images/detail_maps/Ukiah_Inset_Detail-big.jpg" data-lightbox="image-1"><img src="/wp-content/images/detail_maps/Ukiah_Inset_Detail_sml.jpg" /></a>
				</div> <!-- end .route-detail-map-image-wrap -->

			</div> <!-- end #map-col-right -->
		</div> <!-- end #route-map-image-col-wrap -->
		<br style="clear: both;" />

	</aside> <!-- end #route-col-right -->
	<br style="clear: both;" />
</div> <!-- end #route-two-col-wrap -->
</main>



<?php the_post(); ?>

                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>
      <h1 class="entry-title"><?php //the_title(); ?></h1>


</div> <!-- post -->




</div> <!-- page-overlay -->

<?php get_footer(); ?>
