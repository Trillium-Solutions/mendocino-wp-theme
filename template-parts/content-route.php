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
				<!--<div><?php //get_route_circle();?></div>-->
					
						<?php the_route_title(); ?>
					
				<?php do_action('route_select'); ?>

			</header><!-- #route-header -->


		<!-- Route Alerts -->
	<?php tcp_do_alerts( array('collapse' => false, 'route-circles' => true ) ); ?>

		
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

				<?php mendo_custom_timetables(); ?>
					

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

				<?php if (get_field('schedule_pdf')) : ?>
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
									<a href="<?php the_field('schedule_pdf'); ?>" target="_blank">Download PDF version of the timetable.</a>
								</div> <!-- end #route-pdf-link -->
							<br style="clear: both;" />
					</div> <!-- end #route-inner-box" -->
				</div> <!-- end #route-connections-box -->
				<?php endif; ?>
			</div> <!-- #end route col left -->


			<aside id="route-col-right">
			<?php if ( have_rows('maps') ): ?>
				<div class="route-connections-box-title route-title-box">
					<div class="route-connections-box-title-text route-title-box-text">
						Detail and Overview maps
					</div> <!-- end #route-connections-box-title-text -->
					<br style="clear: both;" />
				</div> <!-- end #route-connections-box-title -->
				<?php while ( have_rows('maps') ):
								the_row();
							?>
					<div  id="route-map-col-left" class="masonry-layout__panel">
						<div class="masonry-layout__panel-content route-detail-map-image-wrap">
							<div class="map-detail-title-bar">
								<div class="map-detail-title-text">
									<?php the_sub_field('map_title')?>
								</div> <!-- end map-detail-title-text -->
								<br style="clear: both;" />
							</div><!-- end map-detail-title-bar -->
								<a href="/wp-content/images/detail_maps/ukiah-detail-11-big.jpg" data-lightbox="image-1"><img src="<?php the_sub_field('map_image'); ?>" /></a>
						</div><!-- .masonry-layout__panel-content-->
					</div><!--.masonry-layout__panel-->
				<?php endwhile; ?>
				<?php endif; ?>
				
				<br style="clear: both;" />

			</aside> <!-- end #route-col-right -->
			<br style="clear: both;" />
		</div> <!-- end #route-two-col-wrap -->
	</article>
	