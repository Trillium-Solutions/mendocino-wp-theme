<?php
/*
Template Name: updated-home
*/
get_header();
?>
	<main>
		<div id="home-left-col">
			<div id="home-route-planner">
				<div id="home-route-planner-inner">
					<h2>PLAN YOUR TRIP</h2>
					<script type="text/javascript">

					function checkclear(what){
					if(!what._haschanged){
					what.value=''
					};
					what._haschanged=true;
					}


					</script>

				<form action="https://www.trilliumtransit.com/redirect/google_redirect.php" name="f">
					<input type="hidden" value="UTF8" name="ie"/>
					<input type="hidden" value="d" name="f"/>
					<input type="hidden" value="39.150171,-123.207783" name="sll"/>
					<table id="trip_planner_form_table" align="right" style="margin-right:9px;margin-top:5px;">
						<tbody>
							<tr id="row1">
								<td id="cell_1a">
									<label for="saddr">Start</label>
									<input type="text" name="saddr" id="saddr" style="width:250px;margin-top:10px;" onfocus="checkclear(this)"  value="Address, placename, or intersection"/>
								</td>
							</tr>
							<tr id="row2">
								<td id="cell_2a">
									<label for="daddr">End</label>
									<input type="text" name="daddr" id="daddr" style="width:250px;margin-top:10px;" onfocus="checkclear(this)" value="Address, placename, or intersection"/>
								</td>
							</tr>
							<tr id="row3">
								<td id="cell_1c">
									<label for="ttype" id="when">When</label>
									<select name="ttype" id="trip_type_select">
										<option name="dep">Leave at</option>
										<option name="arrive">Arrive by</option>
									</select>
									<label for="fdate" class="screen-reader-text">Date</label>
									<input type="text" id="fdate" maxlength="100" value="" name="date" size="5" id="fdate"/>
									<label for="ftime" class="screen-reader-text">Time</label>
									<input type="text" id="ftime" maxlength="100" value="" name="time" size="5" id="ftime"/>
									<input type="hidden" value="42" name="agency"/>
									<input type="hidden" name="sort" value="walk"/>
								</td>
							</tr>
							<tr id="row4">
								<td id="cell_2b" align="right" style="padding-top:17px;" id="submit_cell"><span id="plan_trip_text" class="plan_trip_text">See itinerary</span>
									<input type="submit" value="Get Directions" id="directions_submit" style="text-align:center"/>
								</td>
							</tr>
						</tbody>
					</table>
				</form>

				<script type="text/javascript">
				var thisdate = new Date();

				function formatDate(date) {
				var d = new Date(date);
				var hh = d.getHours();
				var m = d.getMinutes();
				var dd = "AM";
				var h = hh;
				if (h >= 12) {
				h = hh-12;
				dd = "PM";
				}
				if (h == 0) {
				h = 12;
				}
				m = m<10?"0"+m:m;

				return h+':'+m+' '+dd
				}

				document.getElementById('ftime').value=formatDate(thisdate);

				var d = new Date(),
				month = d.getMonth() + 1,
				day = d.getDate(),
				year = d.getFullYear();

				document.getElementById('fdate').value = month + '/' + day + '/' +  year ;

				var format = 'g:i A';
				var step = 1;

				function parseTime(time, format, step) {

				var hour, minute, stepMinute,
				defaultFormat = 'g:ia',
				pm = time.match(/p/i) !== null,
				num = time.replace(/[^0-9]/g, '');

				// Parse for hour and minute
				switch(num.length) {
				case 4:
				hour = parseInt(num[0] + num[1], 10);
				minute = parseInt(num[2] + num[3], 10);
				break;
				case 3:
				hour = parseInt(num[0], 10);
				minute = parseInt(num[1] + num[2], 10);
				break;
				case 2:
				case 1:
				hour = parseInt(num[0] + (num[1] || ''), 10);
				minute = 0;
				break;
				default:
				return '';
				}

				if( pm === true && hour > 0 && hour < 12 ) hour += 12;

				if( hour >= 13 && hour <= 23 ) pm = true;

				if( step ) {
				if( step === 0 ) step = 60;
				stepMinute = (Math.round(minute / step) * step) % 60;
				if( stepMinute === 0 && minute >= 30 ) {
				hour++;
				if( hour === 12 || hour === 24 ) pm = !pm;
				}
				minute = stepMinute;
				}

				if( hour <= 0 || hour >= 24 ) hour = 0;
				if( minute < 0 || minute > 59 ) minute = 0;

				return (format || defaultFormat)
						.replace(/g/g, hour === 0 ? '12' : 'g')
				.replace(/g/g, hour > 12 ? hour - 12 : hour)
				.replace(/G/g, hour)
				.replace(/h/g, hour.toString().length > 1 ? (hour > 12 ? hour - 12 : hour) : '0' + (hour > 12 ? hour - 12 : hour))
				.replace(/H/g, hour.toString().length > 1 ? hour : '0' + hour)
				.replace(/i/g, minute.toString().length > 1 ? minute : '0' + minute)
				.replace(/s/g, '00')
				.replace(/a/g, pm ? 'pm' : 'am')
				.replace(/A/g, pm ? 'PM' : 'AM');

				}


				function update() {
					$j('#ftime').val(parseTime($j('#ftime').val(), format, step));
				}

				$j(document).ready( function() {

					$j('#ftime').blur(update);

				$j(function() {
					$j( "#fdate" ).datepicker({dateFormat: "mm/dd/yy"});
				});


				});
				</script>

					<div id="home-google-transit-link">
						<a href="/google-maps/" >More about transit in Google Maps and on your mobile phone.</a>
					</div>
				</div> <!-- end #home-route-planner-inn -->
    		</div><!-- #home-route-planner -->


            <div id="home-left-links">
 			<div id="home-dynamic-space">

			<?php
			$count = 1;
			query_posts( array ( 'category_name' => 'service-alert', 'posts_per_page' => 4 ) );


			if( have_posts()) {
			?>
			<div id="home-service-alerts" class="left-links-sec">

			<div class="alert-sym"></div>
				<div id="service-alert-title" class="left-link-title">
				<a href="/alerts-and-news/">Service Alerts</a>
			</div>

				<ul class="left-link-list">
				<?php
				$count = 1;
				while ( have_posts() ) : the_post(); 
				?>
					<li>
						<a class="left-home-link" id="home-alerts-link-<?php echo $count; ?>" href=" <?php the_permalink() ?>" ><?php the_title() ?></a>
					</li>

					<?php
					$count = $count + 1;
					endwhile;
					wp_reset_query();
					?>
					</ul>

			<br style="clear: both;" />

		</div>


		<?php

		}

		$args = array(
			'numberposts' 	=> 3,
			'post_type'		=> array('news'),
		);
		$my_query = new WP_Query( $args );

		if( $my_query->have_posts()) {
		?>


<div id="home-news" class="left-links-sec">
<div class="left-sec-internal">
	<div id="home-news-title" class="left-link-title">
		<a href="/alerts-and-news/">News</a>
	</div>
		<ul class="left-link-list">
			<?php
			$count = 1;
			while ( $my_query->have_posts() ) : $my_query->the_post();
			?>

				<li >
					<a class="left-home-link" id="home-news-link-<?php echo $count; ?>" href=" <?php the_permalink() ?>" ><?php the_title() ?></a>
				</li>

			<?php
			$count = $count + 1;
			endwhile;
			wp_reset_postdata();
			?>
		</ul>

	<br style="clear: both;" />
	</div>
 </div>
 <?php
}


 the_post();

$args = array(
    'posts_per_page' => 3,
	'post_type'		=> 'board-meeting',
	'order_by' => 'publish_date',
	'order' => 'ASC'
);
$my_query = new WP_Query($args);
if ($my_query->have_posts()) : ?>
    <div id="home-agendas" class="left-links-sec">
        <div class="left-sec-internal">
            <div id="home-agendas-title" class="left-link-title">
				<a href="/board-meetings">Board Meetings</a>
			</div>
            <ul class="left-link-list">
				<?php
				while ($my_query->have_posts()) : $my_query->the_post(); ?>
					<li>
						<a class="left-home-link" href="<?php the_permalink(); ?>"><?php the_time('F j') ?> &ndash; <?php the_title() ?></a>
					</li>
				<?php endwhile; ?>
			</ul>
		<br style="clear: both;" />
		</div>
	</div>
<?php endif; wp_reset_postdata();
if ($count == 1 ) {
?>
<div id="home-service-alerts-2" class="left-links-sec">

<div class="alert-sym"></div><div id="service-alert-title" class="left-link-title">Service Alerts</div>
<div id="home-news-arhive-link" class="left-links-archive-link"><a href="/alerts-and-news/"></a></div>
<br style="clear: both;" />
<br style="clear: both;" />
Currently no service alerts.
</div>


<?php

}
?>
        <!--<h3 class="home-news-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>-->
</div> <!-- end #dynamic-space -->

<div id="sign-up">
    <h2 id="sign-up-for-alerts"> Sign up for <?php if ($count == 1 ) echo "future"; ?> Service Alerts</h2>
<form action="https://mendocinotransit.us5.list-manage.com/subscribe/post?u=00e99199bd982874f8bd36527&amp;id=495f9d88d9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	<label for="email" class="obscure">Email</label>
    <input type="email" value="" name="EMAIL" class="email" size="35" id="mce-EMAIL" placeholder="email address" required>
    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
    </form>
</div> <!-- sign up -->







					</div> <!-- #home-left-links-->
				</div> <!-- #home-left-col -->

				<div id="home-right-col">
		<div id="home-map-caption">
		Click a route to see its schedule and detail map.
		</div> <!-- end #home-map-caption" -->
					<div id="home-map">
				<?php include('home-map-01.svg'); ?>
					</div> <!-- #home-map -->
				</div><!-- home-right-col -->
				<br style="clear: both; width: 100%;" />

				<div id="home-bottom-links">
					<div id="home-links-col-1">
						<div id="home-links-col-1-title" class="home-links-title">
						MTA SERVICE INFORMATION
						</div> <!-- end #home-links-col-1-title -->
						<ul id="home-links-col-1-list" class="home-links-list">
							<li id="home-link-maps-and-schedules" class="home-sub-link"><div class="home-link-icon"></div><div class="home-links-text"><a href="maps-and-schedules">Maps &amp; Schedules</a></div></li>
							<li id="home-link-fares" class="home-sub-link"><div class="home-link-icon"></div><div class="home-links-text"><a href="fares">Fares</a></div></li>
							<li id="home-link-how-to-ride" class="home-sub-link"><div class="home-link-icon"></div><div class="home-links-text"><a href="how-to-ride">How to Ride</a></div></li>
							<li id="home-link-holidays" class="home-sub-link"><div class="home-link-icon"></div><div class="home-links-text"><a href="holidays">Holidays</a></div></li>
							<li id="home-link-accesibility" class="home-sub-link"><div class="home-link-icon"></div><div class="home-links-text"><a href="accessibility">Accessibility</a></div></li>
						</ul>
					</div> <!-- end #home-links-col-1 -->
					<div id="home-links-col-2">
						<div id="home-links-col-2-title" class="home-links-title">
						Other Services
						</div> <!-- end #home-links-col-1-title -->
						<ul id="home-links-col-2-list" class="home-links-list">
							<li id="home-link-dial-a-ride" class="home-sub-link"><div class="home-link-icon"></div><div class="home-links-text"><a href="dial-a-ride">Dial-A-Ride</a></div></li>
							<li id="home-link-farmworkers" class="home-sub-link"><div class="home-link-icon"></div><div class="home-links-text"><a href="summer-youth-pass">Summer Youth Pass</a></div></li>
							<li id="home-link-connecting-services" class="home-sub-link"><div class="home-link-icon"></div><div class="home-links-text"><a href="connections">Connecting Services</a></div></li>
							<li id="home-link-app-center" class="home-sub-link"><div class="home-link-icon"></div><div class="home-links-text"><a href="/app-center/">App Center</a></div></li>
							<li id="home-link-developer-data" class="home-sub-link"><div class="home-link-icon"></div><div class="home-links-text"><a href="developer">Developer Data</a></div></li>
						</ul>
					</div> <!-- end #home-links-col-2 -->
					<div id="home-links-col-3">
						<div id="home-links-col-3-title" class="home-links-title">
						Agency Information
						</div> <!-- end #home-links-col-1-title -->
						<?php

						wp_nav_menu( array (
							'theme_location' => 'agency-information',
							'menu_class'     => 'home-links-list',
							'menu_id'        => 'agency-links-menu',
						 ) );
						?>
					</div> <!-- end #home-links-col-3 -->
					<br style="clear: both;">
				</div> <!-- #home-bottom-links-->

			<br style="clear: both;">
			<div id="bottom-hr"></div>
				<div id="home-mta-description">
					Mendocino County, California.  MTA’s service area encompasses about 2,800 square miles including the Mendocino Coast and Inland communities. The transit system includes a network of long distance, commute and local fixed routes, plus Dial-A-Ride services in Ukiah and Ft. Bragg.  MTA provides service throughout the county, including the communities of Albion, Anchor Bay, Bodega, Bodega Bay, Boonville, Calpella, Caspar, Elk, Fort Bragg, Fort Ross, Freestone, Gualala, Hopland, Jenner, Manchester, Mendocino, Navarro, Philo, Point Arena, Redwood Valley, Santa Rosa, Sea Ranch, Stewarts Point, Ukiah, Willits, and Windsor.
				</div>
			</main>
			
<!-- test -->
<?php get_footer(); ?>
