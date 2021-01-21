<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html >
<head profile="http://gmpg.org/xfn/11">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/reset.css" type="text/css">
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/formalize.css" />
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/mendo-map.css" />

	<style type="text/css">
	#ui-datepicker-div {font-size:65%;}
	</style>


	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>?v=4.3" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/homepage-hotfix.css?v2" />
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">


	<title>Mendocino Transit Authority (MTA) | Public transportation for Mendocino County, California <?php wp_title(" : "); ?></title>
	<?php wp_head(); ?>
	<meta name="description" content="Mendocino County, California. MTA’s service area encompasses about 2,800 square miles including the Mendocino Coast and Inland communities. The transit system includes a network of long distance, commute and local fixed routes, plus Dial-A-Ride services in Ukiah and Ft. Bragg. MTA provides service throughout the county, including the communities of Albion, Anchor Bay, Bodega, Bodega Bay, Boonville, Calpella, Caspar, Elk, Fort Bragg, Fort Ross, Freestone, Gualala, Hopland, Jenner, Manchester, Mendocino, Navarro, Philo, Point Arena, Redwood Valley, Santa Rosa, Sea Ranch, Stewarts Point, Ukiah, Willits, and Windsor." />

	<script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>

	<script src="<?php echo get_bloginfo('template_directory'); ?>/jquery.formalize.js"></script>
	<script src="<?php echo get_bloginfo('template_directory'); ?>/mendo.js"></script>
	<script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.cookie.js"></script>
	<script src="<?php echo get_bloginfo('template_directory'); ?>/schedule-tables.js"></script>
	<script src="<?php echo get_bloginfo('template_directory'); ?>/mendo-map.js"></script>
	<script src="<?php echo get_bloginfo('template_directory'); ?>/js/home-left.js?v2"></script>

	<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/ie.css" />
	<![endif]-->
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />

	<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css" rel="stylesheet" />
	<script language="javascript" type="text/javascript">

		<!--
		function popitup(url) {
			newwindow=window.open(url,'name','height=800,width=1200');
			if (window.focus) {newwindow.focus()}
			return false;
		}

	// -->
	</script>


<!-- THE FOLLOWING SCRIPT ENABLES AUTOCOMPLETE IN THE TRIP PLANNER FORM -->

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArmkiHTwuavMkb6WV_AjZgjv9zQ7wYoSY&libraries=places"></script>

	<script>

		function initialize() {

		var defaultBounds = new google.maps.LatLngBounds(
		new google.maps.LatLng(39.1503,-123.2067)
		);

		var origin_input = document.getElementById('saddr');
		var destination_input = document.getElementById('daddr');


		var options = {
		bounds: defaultBounds,
		componentRestrictions: {country: 'us'}
		};


		var autocomplete_origin = new google.maps.places.Autocomplete(origin_input, options);
		var autocomplete_destination = new google.maps.places.Autocomplete(destination_input, options);
		}

		google.maps.event.addDomListener(window, 'load', initialize);


	</script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-34817997-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'UA-34817997-1', {'anonymize_ip' : true});
	</script>

</head>
<body>
	<div id="home-alerts">
		<a href="https://mendocinotransit.org/2020/03/18/alert-mta-reduces-bus-service-on-3-19/"><span style="text-transform: uppercase;">
			Reduced Service Bus Schedules - 3/19/2020</span></a>
    </div>
<header>
    <svg style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg">
    <defs>
    <symbol id="icon-facebook" viewBox="0 0 32 32">
    <title>facebook</title>
    <path d="M16 1.455c-8.033 0-14.545 6.512-14.545 14.545s6.512 14.545 14.545 14.545c8.033 0 14.545-6.512 14.545-14.545s-6.512-14.545-14.545-14.545zM20.307 10.012h-2.020c-0.719 0-0.869 0.295-0.869 1.038v1.794h2.901l-0.279 3.147h-2.634v9.406h-3.758v-9.366h-1.951v-3.192h1.951v-2.509c0-2.356 1.261-3.588 4.040-3.588h2.602v3.269z"></path>
    </symbol>
    <symbol id="icon-instagram" viewBox="0 0 32 32">
    <title>instagram</title>
    <path d="M22.913 9.649v1.786c0 0 0 0 0 0 0 0.286-0.232 0.517-0.517 0.517-0.001 0-0.003 0-0.004-0h-1.745c-0.001 0-0.003 0-0.004 0-0.286 0-0.517-0.232-0.517-0.517 0 0 0 0 0-0v-1.786c0 0 0 0 0-0 0-0.286 0.232-0.517 0.517-0.517 0.001 0 0.003 0 0.004 0h1.749c0.286 0 0.517 0.232 0.517 0.517zM16.21 18.457c1.317 0 2.384-1.067 2.384-2.384s-1.067-2.384-2.384-2.384c-1.317 0-2.384 1.067-2.384 2.384s1.067 2.384 2.384 2.384zM30.545 16c0 8.033-6.512 14.545-14.545 14.545s-14.545-6.512-14.545-14.545c0-8.033 6.512-14.545 14.545-14.545s14.545 6.512 14.545 14.545zM24.392 13.653h-4.78c0.484 0.674 0.774 1.515 0.774 2.425 0 2.312-1.874 4.186-4.186 4.186s-4.186-1.874-4.186-4.186c0-0.909 0.29-1.751 0.782-2.437l-4.764 0.013v7.333c0 1.785 1.447 3.232 3.232 3.232h9.891c1.785 0 3.232-1.447 3.232-3.232zM16.202 19.309c1.785 0 3.232-1.447 3.232-3.232s-1.447-3.232-3.232-3.232c-1.785 0-3.232 1.447-3.232 3.232 0.005 1.782 1.45 3.224 3.232 3.224 0 0 0 0 0 0zM24.392 11.014c0-1.785-1.447-3.232-3.232-3.232h-8.844v4.077h-0.663v-4.081h-0.461v4.081h-0.663v-3.996c-0.183 0.042-0.339 0.092-0.49 0.153l0.021 3.839h-0.663v-3.483c-0.83 0.593-1.366 1.553-1.366 2.638v2.125h5.188c0.759-0.772 1.815-1.25 2.982-1.25s2.223 0.478 2.981 1.249l5.209 0.001v-2.121z"></path>
    </symbol>
    <symbol id="icon-twitter" viewBox="0 0 32 32">
    <title>twitter</title>
	<path d="M16 1.455c-8.033 0-14.545 6.512-14.545 14.545s6.512 14.545 14.545 14.545c8.033 0 14.545-6.512 14.545-14.545s-6.512-14.545-14.545-14.545zM23.317 13.495c0.21 4.743-3.329 10.032-9.58 10.032-0.003 0-0.007 0-0.011 0-1.917 0-3.702-0.565-5.198-1.538 0.273 0.052 0.547 0.068 0.825 0.068 1.59 0 3.052-0.547 4.208-1.463-1.484-0.018-2.722-0.982-3.159-2.309 0.185 0.015 0.406 0.037 0.633 0.037 0.314 0 0.619-0.043 0.908-0.123-1.579-0.318-2.731-1.677-2.731-3.305 0-0.014 0-0.027 0-0.041 0.442 0.246 0.966 0.394 1.524 0.406-0.899-0.616-1.484-1.639-1.484-2.8 0-0.617 0.165-1.195 0.454-1.693 1.662 2.060 4.135 3.395 6.922 3.538-0.032-0.227-0.063-0.488-0.063-0.757 0-1.866 1.512-3.378 3.378-3.378 0.968 0 1.84 0.407 2.456 1.059 0.809-0.157 1.526-0.438 2.174-0.824-0.292 0.812-0.816 1.461-1.499 1.875 0.704-0.078 1.36-0.264 1.967-0.538-0.505 0.697-1.062 1.271-1.704 1.737z"></path>
    </symbol>
    </defs>
    </svg>
<div id="coast-repeat-wrapper">
	<div id="coast-right-hill-wrapper">
		<div id="main-center-wrapper">

			<div id="top-right-number-and-spanish">
				<div id="top-line">
					<div id="mendo-number">1-800-696-4MTA</div>
					<div id="social-links">
						<a href="https://facebook.com/RideMTA">
						<svg class="icon icon-facebook"><use xlink:href="#icon-facebook"></use></svg><span class="name"></span></a>
						<a href="https://instagram.com/mendocinotransit">
						<svg class="icon icon-instagram"><use xlink:href="#icon-instagram"></use></svg><span class="name"></span></a>
						<a href="https://twitter.com/HopOnMTA">
						<svg class="icon icon-twitter"><use xlink:href="#icon-twitter"></use></svg><span class="name"></span></a>
					</div>
				</div>
				<div id="language-link"><a href="/es">En espa&ntilde;ol</a></div>
			</div> <!-- #top-right-number-and-spanish-->


			<div id="top">
				<div id="logo-left">
					<a href="/">
					<div id="mta-logo">
					</div> <!-- #logo -->
					</a>
					<div id="logo-text">
						Mendocino Transit Authority
					</div> <!-- #logo-text -->
				</div> <!-- #logo-left-->

				<!--<button id="mobile-nav-button">Menu</button>-->
				<nav id="nav" class="mobile-show">
					<a href="/maps-and-schedules">
						<div id="nav-maps-and-schedules">
						</div> <!-- #nav-maps-and-schedules-link -->
					</a>
					<a href="/fares">
						<div id="nav-fares">
						</div><!-- #nav-fares -->
					</a>
					<a href="/how-to-ride">
						<div id="nav-how-to-ride">
						</div><!-- nav-how-to-ride -->
					</a>
					<a href="/connections">
						<div id="nav-connections">
						</div><!-- #nav-connections-->
					</a>
				</nav> <!-- #nav -->
			</div> <!-- #top -->
		<?php
		if(is_front_page()){ ?>
			<div id="announcement-banner">
				<a href="https://mendocinotransit.org/2016/10/10/rider-alert-route-65-service-expansion/">
					<img src="<?php echo get_template_directory_uri(); ?>/images/mendocino-banner.png" alt="Expanded service on Route 65 between Fort Bragg and Ukiah" width="1015px" height="auto" style="margin:auto; padding-left:10px; padding-bottom:20px;">
				</a>
			</div>

		<?php } ?>
		<!--Header ends -->
		<div id="top-curves-template"></div>
		<div id="bg-strecher">
		<div id="main-container">
			<div id="inner-main-container">