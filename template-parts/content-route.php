<?php
/**
 * Template part for displaying routes
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Transit_Base_Template
 */

?>

	<article <?php post_class(); ?>>
		
			<header id="route-header">
				<div id="route-circle-icon-20" class="route-circle-icon"></div>
					<h1 id="route-title">
						<?php the_title(); ?>
					</h1>
				<?php do_action('route_select'); ?>

			</header><!-- #route-header -->


		<?php do_action('mendo_route_alert', '20'); ?>

		<main>
			<div id="route-two-col-wrap">
			<div id="route-col-left">
				<div id="route-desc">

					<?php wp_reset_postdata();
					the_field('route-desc'); ?>
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
						<a href="/routes/route-20/route-20-northbound/"  >
							<div id="schedule-northbound-65" class="route-popup-button route-button-left route-button-first route-button-odd route-button-short" style="height:45px;">
								<div class="popup-button-title">
									Northbound<br/><span style="font-size:12px;"></span>
								</div> <!-- end #popup-button-title -->
								<div class="popup-button-desc" >

								</div> <!-- end popup-button-desc -->
							</div> <!-- end #schedule-northbound-65 -->
						</a>
						<a href="/routes/route-20/route-20-southbound/"  >
							<div id="schedule-southbound-65" class="route-popup-button route-button-right route-button-last route-button-even route-button-short" style="height:45px;">
								<div class="popup-button-title">
									Southbound<br/><span style="font-size:12px;"></span>
								</div> <!-- end #popup-button-title -->
								<div class="popup-button-desc">

								</div> <!-- end popup-button-desc -->
							</div> <!-- end #schedule-southbound-65-->
						</a>

						<br style="clear: both;" />
					</div> <!-- end #schedule-buttons -->

					<div id="fare-table-link">
						<a href="/fares/">See fare table for this route</a> >>
					</div> <!-- end #fare-table-link -->
				</div> <!-- end #route-schedule-box -->

				<?php if ( have_rows('connections') ): ?>
				<div class="route-connections-box route-box">
					<div class="route-connections-box-title route-title-box">
						<div class="route-connections-box-title-text route-title-box-text">
								Connections in Santa Rosa
						</div> <!-- end #route-connections-box-title-text -->
					<br style="clear: both;" />
					</div> <!-- end #route-connections-box-title -->
						<div id="route-connections-container">
							<div class="route-connection">
								<?php
								
									while ( have_rows('connections') ):
										the_row();
								?>
								<div class="route-connection-title">
									<?php the_sub_field('connection_title'); ?>
								</div> <!-- end .route-connection-title -->
								<div class="route-connection-desc">
									<?php the_sub_field('connection_description'); ?>
								</div> <!-- end .route-connection-desc -->
								<?php endwhile; ?>
							</div><!-- end .route-conneciton -->
						</div> <!-- end #route-connections-container -->
				 </div> <!-- end #route-connections-box -->
				<?php endif; ?>

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
								<a href="<?php the_field('schedule_pdf'); ?>" target="_blank">Download PDF version of timetable.</a></div> <!-- end #route-pdf-link -->
						<br style="clear: both;" />
						</div> <!-- end #route-inner-box" -->
				</div> <!-- end #route-connections-box -->

			</div> <!-- #end route col left -->


			<aside id="route-col-right">
			<?php if ( have_rows('maps') ): ?>
				<div class="route-connections-box-title route-title-box">
					<div class="route-connections-box-title-text route-title-box-text">
						Detail and Overview maps
					</div> <!-- end #route-connections-box-title-text -->
					<br style="clear: both;" />
				</div> <!-- end #route-connections-box-title -->



			<div id="route-map-image-col-wrap">
				<div id="route-map-col-left">				
					<div class="route-detail-map-image-wrap">
					<?php while ( have_rows('maps') ):
						the_row();
					?>
						<div class="map-detail-title-bar">
							<div class="map-detail-title-text">
								<?php the_sub_field('map_title')?>	<!--Ukiah Detail-->
							</div> <!-- end map-detail-title-text -->
							<div class="map-detail-zoom-icon">
							</div><!-- end .map-detail-zoom-icon -->
							<br style="clear: both;" />
						</div><!-- end map-detail-title-bar -->

					<a href="/wp-content/images/detail_maps/ukiah-detail-11-big.jpg" data-lightbox="image-1"><img src="<?php the_sub_field('map_image'); ?>" /></a>
				</div> <!-- end .route-detail-map-image-wrap -->
				<?php endwhile; ?>
				<?php endif; ?>
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
							Ukiah Detail
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


	

	</article>
	<?php
	get_footer();