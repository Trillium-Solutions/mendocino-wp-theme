<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html >
<head profile="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/reset.css" type="text/css">
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/formalize.css" />

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>

<script src="<?php echo get_bloginfo('template_directory'); ?>/jquery.formalize.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/mendo.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.cookie.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/schedule-tables.js"></script>

<style type="text/css">
#ui-datepicker-div {font-size:65%;}
</style>


<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/homepage-hotfix.css" /> 
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">

<script src="<?php echo get_bloginfo('template_directory'); ?>/js/home-left.js?v2"></script>


<title>Mendocino Transit Authority (MTA) | Public transportation for Mendocino County, California <?php wp_title(" : "); ?></title>
<?php wp_head(); ?>
<meta name="description" content="Mendocino County, California. MTA’s service area encompasses about 2,800 square miles including the Mendocino Coast and Inland communities. The transit system includes a network of long distance, commute and local fixed routes, plus Dial-A-Ride services in Ukiah and Ft. Bragg. MTA provides service throughout the county, including the communities of Albion, Anchor Bay, Bodega, Bodega Bay, Boonville, Calpella, Caspar, Elk, Fort Bragg, Fort Ross, Freestone, Gualala, Hopland, Jenner, Manchester, Mendocino, Navarro, Philo, Point Arena, Redwood Valley, Santa Rosa, Sea Ranch, Stewarts Point, Ukiah, Willits, and Windsor." />


<!--[if IE]>
<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/ie.css" />
<![endif]-->
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/lightbox.js"></script>
<link href="<?php echo get_bloginfo('template_directory'); ?>/css/lightbox.css" rel="stylesheet" />
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

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>

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

</head>
<body>
<div id="coast-repeat-wrapper">
<div id="coast-right-hill-wrapper">
	<div id="main-center-wrapper">
	
	<div id="top-right-number-and-spanish">
         <div id="mendo-number">1-800-696-4MTA</div>
	     <div id="language-link"><a href="/es">En espa&ntilde;ol</a></div>
    </div> <!-- #top-right-number-and-spanish-->
	 
	
		<div id="top">
			<div id="logo-left">
				<a href="/">
				<div id="mta-logo">
				</div> <!-- #logo -->
				</a>
				<div id="logo-text">
				</div> <!-- #logo-text -->
			</div> <!-- #logo-left-->
			
			<div id="nav">
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
			</div> <!-- #nav -->
		</div> <!-- #top -->
		<div id="top-curves-template"></div>
		<div id="bg-strecher">
		<div id="main-container">
			<div id="inner-main-container">