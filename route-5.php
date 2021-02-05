<?php
/*
Template Name: route-5
*/
?>

<?php get_header(); ?>
<div id="page-overlay">

<header id="route-header">
	<div id="route-circle-icon-5" class="route-circle-icon"></div>
		<h1 id="route-title"> Routes 5 - Ft. Bragg</h1>
	<?php do_action('route_select'); ?>

</header><!-- #route-header -->
<div id="route-breadcrumb" class="breadcrumb">
		<?php //if(function_exists(simple_breadcrumb)) {simple_breadcrumb();} ?>
	</div><!-- end #route-breadcrumb -->

<?php do_action('mendo_route_alert', '5'); ?>

<main>
<div id="route-two-col-wrap">
	<div id="route-col-left">

		<div id="route-desc" class="route-desc-top">
<img src="/images/mapsandschedules/maps-n-schedules-circ-5.png" height="15" > <strong>Route 5 BraggAbout</strong> is an hourly service within Ft. Bragg.
</div> <!-- end #route-desc -->
		<div id="route-schedule-box" class="route-box ">
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
				Monday through Friday
			</div> <!-- end #days-of-week -->
			<div id="schedule-buttons">
			<a href="/routes/route-5/route-5-northbound/"  >
				<div id="schedule-northbound-65" class="route-popup-button route-button-left route-button-first route-button-odd route-button-short" style="height:45px;">
					<div class="popup-button-title">
					Northbound
					<br/><span style="font-size:12px;"></span>
					</div> <!-- end #popup-button-title -->
					<div class="popup-button-desc" >

					</div> <!-- end popup-button-desc -->
				</div> <!-- end #schedule-northbound-65 -->
				</a>
				<a href="/routes/route-5/route-5-southbound/"  >
				<div id="schedule-southbound-65" class="route-popup-button route-button-right route-button-last route-button-even route-button-short" style="height:45px;">
				<div class="popup-button-title">
					Southbound
					</div> <!-- end #popup-button-title -->
					<div class="popup-button-desc">

					</div> <!-- end popup-button-desc -->
				</div> <!-- end #schedule-southbound-65-->
				</a>

				<!-- update to North schedule effective July 27, 2014 - remove old North schedule on Monday-->


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
        <?php if (get_field('schedule_pdf')) : ?>
            <div id="route-pdf-icon"></div>
                <div id="route-pdf-link">
                    <a href="<?php the_field('schedule_pdf'); ?>" target="_blank">Download PDF version of Route 5 timetable.</a></div> <!-- end #route-pdf-link -->
            <br style="clear: both;" />
            </div> <!-- end #route-inner-box" -->
        <?php endif; ?>

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
							Fort Bragg Detail
						</div> <!-- end map-detail-title-text -->
						<div class="map-detail-zoom-icon">
						</div><!-- end .map-detail-zoom-icon -->
						<br style="clear: both;" />
					</div><!-- end map-detail-title-bar -->

					<a href="/wp-content/images/detail_maps/Ft-Bragg-Detail-Map-big.jpg" data-lightbox="image-1"><img src="/wp-content/images/detail_maps/Ft-Bragg-Detail-Map-sml.jpg" /></a>
				</div> <!-- end .route-detail-map-image-wrap -->





			</div> <!-- end #map-col-left -->
			<div id="route-map-col-right">
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