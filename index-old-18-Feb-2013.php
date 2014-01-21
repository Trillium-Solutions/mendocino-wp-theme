<?php
/*
Template Name: updated-home
*/
?>

<?php 

if(!$_COOKIE["force-desktop"] && isset($_COOKIE["force-desktop"])) {
				
?>				
<html>
<head profile="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/reset.css" type="text/css">
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/formalize.css" />
<script src="<?php echo get_bloginfo('template_directory'); ?>/jquery.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/jquery.formalize.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.cookie.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/mendo.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/schedule-tables.js"></script>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />


<meta content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;' name='viewport' />


<meta name="viewport" content="width=device-width" />

<title>Mendocino Transit Authority (MTA) | Public transportation for Mendocino County, California <?php wp_title(" : "); ?></title> 
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
 
<script type="text/javascript">
 
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34817997-1']);
  _gaq.push(['_trackPageview']);
 
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
 
</script>
 
</head>
 
<body>
<style>
.wrap{
    width:96%;
    padding: 2%;
 
}
 
#home-route-planner {
background: #ccc;
margin: 0;
width: 100%;
 
}
 
#home-links-col-2-list li {
margin-bottom: 5px;
}
 
#home-route-planner-inner {
margin: 2%;
width: 98%;
}
 
.logo {
text-align: left;
    padding: 2%;
    background: #FFFCE9;
}
    
.footer{
    color:#8F8E8C;
    position:absolute;
    right:10px;
    bottom:2px;
}   
 
 h2, h1 {
color: #004C2C;
}
 
h1 {
margin: 9px 20px 20px 20px;
font-size: 1.3em;
}
h2 {
font-size: 1.2em;
}
 
 
h3 {
margin-bottom: 10px;
margin-top: 10px;
font-size: 18px;
font-weight: bold;
font-size: 1.1em;
}
 
 
.footer a{
    color:rgb(228, 146, 162);
}
</style>
 
 
    <div class="wrap">
    <?php if ( is_user_logged_in() ) { 
    ?>
    
    En español
     
     <?php
    } ?> 
        <div class="logo">
        
                    <img src="/wp-content/images/mobile/MTA-logo-small-white-bg.png" width="280" height="89" border="0" />
 
<br/>
<br/>
<h2>Mendocino Transit Authority</h2>
 
<br/>
<br/>
<h4>Public Transportation for Mendocino County, California</h4>
 
<p>Currently viewing mobile site &#8211; <a id="mobile-to-desktop-link" href="/">Switch to desktop site<br /><br /></a></p>
<hr />
 
 
        
        <div id="home-service-alerts">
                    <h2>Service Alerts</h2>
<?php $posts = query_posts( $query_string . '&cat=4&orderby=asc&posts_per_page=3' ); ?>
<?php if( $posts ) { ?>
 
    <div class="home-post"> 
 
        <?php
        $count = 0;
        foreach( $posts as $post ) : setup_postdata( $post ); 
                
                $count = $count + 1;
                ?>
 
            <h3 class="home-alert-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
 
        <?php endforeach; 
        
        if ($count == 1) { ?>
        
        <style type="text/css">
h3.home-alert-title {
margin: 6px 0 20px 0;
font-weight: normal;
}
</style>
        
        <?php
        
        } elseif ($count == 2) {  ?>
        
            <style type="text/css">
h3.home-alert-title {
margin: 12px 0 12px 0;
font-weight: normal;
}
</style>
        <?php
        } elseif ($count == 3) {  ?>
        
            <style type="text/css">
h3.home-alert-title {
margin: 0px 0 0px 0;
font-weight: normal;
}
</style>
        <?php
        }
        ?>
 
    </div>
 
<?php } else { ?>
<div id="home-no-alerts">There are currently no service alerts.</div>
<?php } ?> 
</div> <!-- end #home-service-alerts -->
        
            <?php $recent = new WP_Query("page_id=570"); while($recent->have_posts()) : $recent->the_post();?>
<?php the_content(); ?>
<?php endwhile; ?>
            
            
            
        </div>
    </div>    
 
 
</body>
</html>
<?php 
} else {
    get_header(); 
?>
        
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
 
 
<form action="http://www.trilliumtransit.com/redirect/google_redirect.php" name="f"><input type="hidden" value="UTF8" name="ie"/><input type="hidden" value="d" name="f"/><input type="hidden" value="39.150171,-123.207783" name="sll"/>
          <table id="trip_planner_form_table" align="right" style="margin-right:9px;margin-top:5px;">
            <tbody><tr id="row1">
              <td id="cell_1a"><font size="-1"><strong>Start</strong></font></td>
 
        </tr>
        <tr id="row2">
            <td id="cell_2a">
                <input type="text" name="saddr" id="saddr" style="width:250px;margin-top:10px;" onfocus="checkclear(this)"  value="Address, placename, or intersection"/>
            </td>
            
</tr>
 
<tr id="row3">
<td id="cell_1c"><font size="-1"><strong>End</strong></font></td></tr>
        
<tr id="row4">
<td id="cell_2b">
        
                <input type="text" name="daddr" id="daddr" style="width:250px;margin-top:10px;" onfocus="checkclear(this)" value="Address, placename, or intersection"/>
        
    </td>    
        </tr>
    <tr id="row5">
        <td id="cell_3a" valign="top" style="padding-top:17px;">
              <font size="-1"><div id="when">When</div><select name="ttype" id="trip_type_select">
              <option name="dep">Leave at</option>
              <option name="arrive">Arrive by</option>
              </select> 
              
              <input type="text" maxlength="100" tabindex="1" value="" name="date" size="5" id="fdate" alt="Date"/>  <input type="text" maxlength="100" tabindex="1" value="" name="time" size="5" alt="Time" id="ftime"/><input type="hidden" value="42" name="agency"/><input type="hidden" name="sort" value="walk"/>
              
             </font>
              </td>
              </tr>
              <tr id="row6">
              <td id="cell_3b" align="right" style="padding-top:17px;" id="submit_cell"><span id="plan_trip_text" class="plan_trip_text">See itinerary in </span><input type="submit" tabindex="1" value="Google Maps" id="directions_submit" style="text-align:center"/></td>
            </tr>
 
          </tbody></table>
        </form>
 
<script type="text/javascript">
var thisdate = new Date();
 
function formatDate(date) { 
var d = new Date(date); 
var hh = d.getHours(); 
var m = d.getMinutes(); 
var dd = "a"; 
var h = hh; 
if (h >= 12) { 
h = hh-12; 
dd = "p"; 
} 
if (h == 0) { 
h = 12; 
} 
m = m<10?"0"+m:m; 
 
return h+':'+m+dd 
}
 
document.getElementById('ftime').value=formatDate(thisdate); 
 
document.getElementById('fdate').value=thisdate.getMonth()+1 + '/' +thisdate.getDate();
</script>
 
<div id="home-google-transit-link">
    <a href="/google-maps/" >More about transit in Google Maps and on your mobile phone.</a>
</div>
</div> <!-- end #home-route-planner-inn -->
                    </div><!-- #home-route-planner -->
                    
                    
                    <div id="home-left-links">
 

<div id="home-dynamic-space">
<div id="home-service-alerts" class="left-links-sec">

<div class="alert-sym"></div><div id="service-alert-title" class="left-link-title">Service Alerts</div>
<div id="home-news-arhive-link" class="left-links-archive-link"><a href="/alerts-and-news/">See all</a></div>

<ul class="left-link-list">
<?php

query_posts( array ( 'category_name' => 'service-alert', 'posts_per_page' => 3 ) );


if( have_posts()) {

$count = 1;
while ( have_posts() ) : the_post();
				
				
				?>

			<li style="display: none;">
    <a class="left-home-link" id="home-alerts-link-<?php echo $count; ?>" href=" <?php the_permalink() ?>" ><?php the_title() ?></a>
    </li>

		<?php 
		$count = $count + 1;
		endwhile; ?>
</ul>

<br style="clear: both;" />

</div>
 
 
<?php

}
  	query_posts( array ( 'category_name' => 'news', 'posts_per_page' => 10 ) );
 
 if( have_posts()) {
 ?>
 
 
<div id="home-news" class="left-links-sec">
<div class="left-sec-internal">
<div id="home-news-title" class="left-link-title">News</div>
<div id="home-news-arhive-link" class="left-links-archive-link"><a href="/alerts-and-news/">See all</a></div>
<ul class="left-link-list">
<?php
$count = 1;
while ( have_posts() ) : the_post();
				
				
				?>

			<li style="display: none;">
    <a class="left-home-link" id="home-news-link-<?php echo $count; ?>" href=" <?php the_permalink() ?>" ><?php the_title() ?></a>
    </li>

		<?php 
		$count = $count + 1;
		endwhile; ?>
</ul>

<br style="clear: both;" />
</div>
 </div>
 <?php
}


 the_post(); 
		query_posts( array ( 'category_name' => 'employment_opportunities', 'posts_per_page' => 3 ) );
if( have_posts()) {
 

?>
 
<div id="home-jobs" class="left-links-sec">
<div class="left-sec-internal">
<div id="home-news-title" class="left-link-title">Employment Opportunities</div>
<div id="home-news-arhive-link" class="left-links-archive-link"><a href="/employment-opportunities/">See all</a></div>
<ul class="left-link-list">
<?php
$count = 1;
while ( have_posts() ) : the_post();
				
				
				?>

			<li style="display: none;">
    <a class="left-home-link" id="home-jobs-link-<?php echo $count; ?>" href=" <?php the_permalink() ?>" ><?php the_title() ?></a>
    </li>

		<?php 
		$count = $count + 1;
		endwhile; ?>
</ul>

<br style="clear: both;" />
</div>
</div>
<?php }
?>
        <!--<h3 class="home-news-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>-->      
</div> <!-- end #dynamic-space -->
 
<div id="sign-up">
    <h2 id="sign-up-for-alerts"> Sign up for Service Alerts</h2>
<form action="http://mendocinotransit.us5.list-manage.com/subscribe/post?u=00e99199bd982874f8bd36527&amp;id=495f9d88d9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
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
					<div id="map-under">
					
					
						<!--<div id="home-map-caption">
							Click a route to see its schedule and detail map.
						</div> --> 
						
<div id="preload-60"> </div>

<div id="preload-5"> </div>

<div id="preload-1"> </div>

<div id="preload-7"> </div>

<div id="preload-9"> </div>

<div id="preload-65"> </div>

<div id="preload-20"> </div>

<div id="preload-75"> </div>

<div id="preload-95"> </div>
						
						
						
						<map name="map">
<area shape="poly" coords="90,228,114,222,113,205,105,165,95,130,85,123,81,115,80,89,53,89,71,220,92,235,92,234," href="/routes/routes-5-and-60" alt="60" title="60"   >
<area shape="poly" coords="135,104,174,106,175,66,134,66," href="/routes/routes-5-and-60" alt="5" title="5"   >
<area shape="poly" coords="245,111,284,112,282,80,245,80," href="/routes/routes-1-and-20" alt="1" title="1"   >
<area shape="poly" coords="400,254,401,289,436,289,434,254,405,254," href="/routes/routes-7-and-9" alt="7" title="7"   >
<area shape="poly" coords="439,254,473,256,473,287,440,290," href="/routes/routes-7-and-9" alt="9" title="9"   >
<area shape="poly" coords="82,91,85,124,139,159,210,166,244,143,253,135,262,127,280,175,315,203,316,246,322,250,325,300,349,375,398,468,429,540,466,574,505,620,534,621,514,567,477,527,469,481,432,440,411,377,381,311,349,245,342,182,304,159,282,117,252,115,199,124,158,132,126,110," href="/routes/route-65" alt="65" title="65"   >
<area shape="poly" coords="249,143,261,131,279,176,312,206,313,247,320,258,320,278,305,275,297,250,277,211,265,184," href="/routes/routes-1-and-20" alt="20" title="20"   >
<area shape="poly" coords="306,280,319,281,326,305,270,360,216,332,175,282,142,274,159,348,229,444,218,458,202,450,201,440,150,375,110,370,104,348,117,304,92,245,91,234,111,221,156,233,200,238,247,281,270,299," href="/routes/route-75" alt="75" title="75"   >
<area shape="poly" coords="111,375,149,376,197,440,199,455,235,457,297,526,350,585,393,628,406,647,440,634,475,621,496,616,531,624,531,645,485,653,466,670,435,688,390,700,356,673,311,625,266,583,220,526,180,484,155,446,139,415,110,402," href="/routes/route-95" alt="95" title="95"   >
</map>
						<img src="/images/549-800-clear.png" width="549" height="800" usemap="#map" hidefocus="true"   >

				
					
					

</div> <!-- end #map under -->
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
							<li id="home-link-accesibility" class="home-sub-link"><div class="home-link-icon"></div><div class="home-links-text"><a href="#accesibility">Accessibility</a></div></li>
						</ul>
					</div> <!-- end #home-links-col-1 -->
					<div id="home-links-col-2">
						<div id="home-links-col-2-title" class="home-links-title">
						Other Services
						</div> <!-- end #home-links-col-1-title -->
						<ul id="home-links-col-2-list" class="home-links-list">
							<li id="home-link-dial-a-ride" class="home-sub-link"><div class="home-link-icon"></div><div class="home-links-text"><a href="dial-a-ride">Dial-A-Ride</a></div></li>
							<li id="home-link-farmworkers" class="home-sub-link"><div class="home-link-icon"></div><div class="home-links-text"><a href="farmworkers-transportation">Mendocino Farmworkers Transportation Program</a></div></li>
							<li id="home-link-connecting-services" class="home-sub-link"><div class="home-link-icon"></div><div class="home-links-text"><a href="connections">Connecting Services</a></div></li>
							<li id="home-link-app-center" class="home-sub-link"><div class="home-link-icon"></div><div class="home-links-text"><a href="/app-center/">App Center</a></div></li>
							<li id="home-link-developer-data" class="home-sub-link"><div class="home-link-icon"></div><div class="home-links-text"><a href="developer">Developer Data</a></div></li>
						</ul>
					</div> <!-- end #home-links-col-2 -->
					<div id="home-links-col-3">
						<div id="home-links-col-3-title" class="home-links-title">
						Agency Information 
						<?php
						//if ($detect->isMobile()) {
    					//	echo "mobile device";
						//} 
						?>
						</div> <!-- end #home-links-col-1-title -->
						<ul id="home-links-col-3-list" class="home-links-list">
						<li><a href="/about">About MTA</a></li>
							<li><a href="/related-organizations">Related Organizations</a></li>
							<li><a href="/contact">Contact</a></li>
							<li><a href="/planning-documents">Planning Documents</a></li> 
							<li><a href="/board-of-directors/">Board agendas and minutes</a></li>
							<li><a href="/title-vi-program/">Title VI Program</a></li> 
						</ul>
					</div> <!-- end #home-links-col-3 -->
					<br style="clear: both;">
				</div> <!-- #home-bottom-links-->
				
			<br style="clear: both;">
				<div id="bottom-hr" />
				</div>
				<div id="home-mta-description"> 
Mendocino County, California.  MTA’s service area encompasses about 2,800 square miles including the Mendocino Coast and Inland communities. The transit system includes a network of long distance, commute and local fixed routes, plus Dial-A-Ride services in Ukiah and Ft. Bragg.  MTA provides service throughout the county, including the communities of Albion, Anchor Bay, Bodega, Bodega Bay, Boonville, Calpella, Caspar, Elk, Fort Bragg, Fort Ross, Freestone, Gualala, Hopland, Jenner, Manchester, Mendocino, Navarro, Philo, Point Arena, Redwood Valley, Santa Rosa, Sea Ranch, Stewarts Point, Ukiah, Willits, and Windsor.
				</div>

<?php get_footer(); } ?>
