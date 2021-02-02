<?php
/*
Template Name: route-66
*/
?>

<?php get_header(); ?>
<div id="page-overlay">

<div id="route-header">
	<div  class="route-circle-icon" style="background:#c27c92; border-radius: 50%; text-align: center; font-size: 2em; vertical-align: middle; padding-top: 8px; height: 43px;line-height: 100%; color: white; font-weight: normal;">
		66
	</div>
	<div id="route-title">
	ROUTE 66
	</div>
	<?php do_action('route_select'); ?>

</div><!-- #route-header -->


<div id="route-breadcrumb" class="breadcrumb">
		<?php ////if(function_exists(simple_breadcrumb)) {simple_breadcrumb();} ?>
	</div><!-- end #route-breadcrumb -->

<?php do_action('mendo_route_alert', '66'); ?>

<div id="route-two-col-wrap">
	<div id="route-col-left">
		<div id="route-desc">

<?php 		wp_reset_postdata();
the_field('route-desc'); ?>
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
				Monday thru Saturday
			</div> <!-- end #days-of-week -->
			<div id="schedule-buttons">
			<a href="<?php echo get_site_url(); ?>/routes/route-66/northbound/"  >
				<div id="schedule-northbound-66" class="route-popup-button route-button-left route-button-first route-button-odd">
					<div class="popup-button-title">
					Northbound
					</div> <!-- end #popup-button-title -->
					<div class="popup-button-desc" >
					Santa Rosa -> Willits
					</div> <!-- end popup-button-desc -->
				</div> <!-- end #schedule-northbound-65 -->
				</a>
				<a href="<?php echo get_site_url(); ?>/routes/route-66/southbound/"  >
				<div id="schedule-southbound-66" class="route-popup-button route-button-right route-button-last route-button-even"">
				<div class="popup-button-title">
					Southbound
					</div> <!-- end #popup-button-title -->
					<div class="popup-button-desc">
					Willits -> Santa Rosa
					</div> <!-- end popup-button-desc -->
				</div> <!-- end #schedule-southbound-65-->
				</a>
				<br style="clear: both;" />
			</div> <!-- end #schedule-buttons -->

			<div id="fare-table-link">
				<a href="/fares/#66">See fare table for this route</a> >>
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
				<div id="route-pdf-icon"></div><div id="route-pdf-link"><a href="http://mendocino.staging.wpengine.com/wp-content/uploads/2015/06/Route-66-timetable.pdf">Route 66 timetable PDF</a></div> <!-- end #route-pdf-link -->
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
							Santa Rosa Detail
						</div> <!-- end map-detail-title-text -->
						<div class="map-detail-zoom-icon">
						</div><!-- end .map-detail-zoom-icon -->
						<br style="clear: both;" />
					</div><!-- end map-detail-title-bar -->

					<a href="/wp-content/images/detail_maps/Santa_Rosa_Detail-big.jpg" data-lightbox="image-1"><img src="/wp-content/images/detail_maps/Santa_Rosa_Detail-sml.jpg" /></a>
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