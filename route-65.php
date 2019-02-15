<?php
/*
Template Name: route-65
*/
?>

<?php get_header(); ?>
<div id="page-overlay">

<div id="route-header">
	<div id="route-circle-icon-65" class="route-circle-icon">
	</div>
	<div id="route-title">
	ROUTE 65 -- CC RIDER
	</div>
	<?php do_action('route_select'); ?>

</div><!-- #route-header -->


<div id="route-breadcrumb" class="breadcrumb">
		<?php ////if(function_exists(simple_breadcrumb)) {simple_breadcrumb();} ?>
	</div><!-- end #route-breadcrumb -->

<?php do_action('mendo_route_alert', '65'); ?>

<div id="route-two-col-wrap">
	<div id="route-col-left">
		<div id="route-desc">
<!-- Route 65 - CC Rider runs 7-days per week from Ft. Bragg to Willits, Ukiah and Santa Rosa.	 -->
<?php 		wp_reset_postdata();
the_field("route-desc"); ?>
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
				7 Days a week
			</div> <!-- end #days-of-week -->
			<div id="schedule-buttons">
			<a href="http://www.mendocinotransit.org/routes/route-65/northbound/"  >
				<div id="schedule-northbound-65" class="route-popup-button route-button-left route-button-first route-button-odd">
					<div class="popup-button-title">
					Northbound
					</div> <!-- end #popup-button-title -->
					<div class="popup-button-desc" >
					Santa Rosa -> Fort Bragg
					</div> <!-- end popup-button-desc -->
				</div> <!-- end #schedule-northbound-65 -->
				</a>
				<a href="http://www.mendocinotransit.org/routes/route-65/southbound/"  >
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
			<?php
			if ( have_rows('connections') ):
				while ( have_rows('connections') ):
					the_row();
			?>
				<div class="route-connection-title">
					<?php the_sub_field('connection_title'); ?>
				</div> <!-- end .route-connection-title -->
				<div class="route-connection-desc">
					<?php the_sub_field('connection_description'); ?>
				</div> <!-- end .route-connection-desc -->
			<?php endwhile; endif; ?>
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
				<div id="route-pdf-icon"></div><div id="route-pdf-link"><a href="http://mendocinotransit.org/wp-content/uploads/2018/08/Route-65.pdf">Download the Route 65 PDF Timetable</a></div> <!-- end #route-pdf-link -->
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