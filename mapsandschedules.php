<?php
/*
Template Name: mapsAndSchedules
*/
get_header(); ?>

<div id="page-overlay">
<h1 class="entry-title main"><?php the_title(); ?></h1>
<?php if(function_exists(simple_breadcrumb)) {simple_breadcrumb();} ?>
	<br/>
					
						<hr />
									<br/>
<div id="schedules-container" >
      <!-- Header -->      
      <div class="header top guide">

        Click a route in the list below or in the map to get its schedule, detailed service maps, and connections.
      </div>

      <!-- Left Column -->
      <div id="left-column" class="column left">

        <!-- Regional Routes -->
        <div id="regional-routes" class="column-box boxed">
          <div class="box-header">
            Regional routes
          </div>
 
          <div class="box-chunk">
            <div class="box-row">
              <div class="ms-region">North Mendocino Coast/Ukiah/Santa Rosa</div>
             </div> <!-- end box row -->
             <div class="box-row box-row-item">
              <div class="ms-circ"><a href="/routes/route-65" alt="65"><img src="/images/mapsandschedules/maps-n-schedules-circ-65.png"></a></div>
              <div class="ms-desc"><a href="/routes/route-65" alt="65">CC Rider</a><br /><span style="font-size: 10px;">7-days per week from Ft. Bragg to Willits, Ukiah and Santa Rosa.</span></div>

              <br style="clear: both;">
            </div>
          </div>
        </div>

        <div id="coastal-routes" class="column-box boxed">
          <div class="box-header">
            Inland routes
            <br />

          </div>

          <div class="box-chunk">
            <div class="box-row">
              	<div class="ms-region">
              	Ukiah
            	</div>
				<div class="box-row box-row-item">
					<div class="ms-circ">
						<a href="/routes/routes-7-and-9" alt="7">
							<img src="/images/mapsandschedules/maps-n-schedules-circ-7.png">
						</a>
					</div>
						
					<div class="ms-desc"><a href="/routes/routes-7-and-9" alt="7">Ukiah Jitney</a><br /> <span style="font-size: 11px;">A direct route connecting North and South Ukiah
						<br /> Mon-Fri</span>
					</div>
				</div>
			</div>
			<br style="clear: both;">
            <div class="box-row">
				<div class="box-row box-row-item">
           		   <div class="ms-circ">
           		   		<a href="/routes/routes-7-and-9" alt="9"><img src="/images/mapsandschedules/maps-n-schedules-circ-9.png"></a>
           		   	</div>
             		<div class="ms-desc"><a href="/routes/routes-7-and-9" alt="9">Ukiah Local</a><br />
						<span style="font-size: 11px;">Local route within Ukiah. Mon-Fri: 7a.m. to 11 p.m. Sat: 10 a.m. to 5 p.m.</span>
					</div>
           		</div>
          	</div>
          </div>
	<br style="clear: both;">
	
          <div class="box-chunk">  <hr />
            <div class="box-row">
            <div class="ms-region">Willits / Redwood Valley</div>
            <div class="box-row box-row-item">
             
              <div class="ms-circ"><a href="/routes/routes-1-and-20" alt="1"><img src="/images/mapsandschedules/maps-n-schedules-circ-1.png"></a></div>
              <div class="ms-desc"><a href="/routes/routes-1-and-20" alt="1">Willits Local</a><br /><span style="font-size: 11px;"> Local Service within Willits.</span></div>
            </div>
            </div>
            <br style="clear: both;">
            <div class="box-row">
<div class="box-row box-row-item">
              <div class="ms-circ"><a href="/routes/routes-1-and-20" alt="20"><img src="/images/mapsandschedules/maps-n-schedules-circ-20.png"></a></div>
               <div class="ms-desc"><a href="/routes/routes-1-and-20" alt="20">Willits / Ukiah</a><br /><span style="font-size: 10px;">Connects Willits, Mendocino Community College, and Ukiah, with timed transfers to Route 9 Ukiah Local. Mon-Fri.</span></div>
            </div>
            </div>
            <br style="clear: both;">
           

          </div>
          </div>
        
        <!-- Coastal Routes -->
        <div id="coastal-routes" class="column-box boxed">
          <div class="box-header">
            Coastal routes
            <br />

          </div>

          <div class="box-chunk">
            <div class="box-row">
              <div class="ms-region">Ft. Bragg / North Coast</div>
              <div class="box-row box-row-item">
				  <div class="ms-circ">
					<a href="/routes/routes-5-and-60" alt="5"><img src="/images/mapsandschedules/maps-n-schedules-circ-5.png"></a>
				  </div>
				  
				  <div class="ms-desc">
					<a href="/routes/routes-5-and-60" alt="5">BraggAbout</a><br /> <span style="font-size: 11px;">Mon - Fri: Hourly service in Ft. Bragg</span>
				  </div>
            </div>
            </div>
             
            <div class="box-row">
            <br />
<div class="box-row box-row-item">
              <div class="ms-circ"><a href="/routes/routes-5-and-60" alt="60"><img src="/images/mapsandschedules/maps-n-schedules-circ-60.png"></a></div>
              <div class="ms-desc"><a href="/routes/routes-5-and-60" alt="60">The Coaster</a><br />
<span style="font-size: 11px;">Mon - Fri: Ft. Bragg to Mendocino, Connects with Route 75</span></div>
            </div></div>
          </div>
<br style="clear: both;">
          <div class="box-chunk">

            <div class="box-row">
             <hr />
              <div class="ms-region">South Mendocino Coast / Santa Rosa</div>
              <div class="box-row box-row-item">
               <div class="ms-circ"><a href="/routes/route-95" alt="95"><img src="/images/mapsandschedules/maps-n-schedules-circ-95.png"></a></div>
               <div class="ms-desc"><a href="/routes/route-95" alt="95">Route 95</a><br /><span style="font-size: 11px;"> 7-days per week</span></div>
            <br style="clear: both;">
           </div>
<hr />
            <div class="box-row"> 
              <div class="ms-region">South Mendocino Coast /Ukiah</div>
 <br />
               <div class="ms-circ"><a href="/routes/route-75" alt="75"><img src="/images/mapsandschedules/maps-n-schedules-circ-75.png"></a></div>
               <div class="ms-desc"><a href="/routes/route-75" alt="75">Route 75</a><br /><span style="font-size: 10px;">Mon - Sat: Connects with Route 60, <br />No Saturday connection with Route 60</span></div>
            </div>
            </div>
           <br style="clear: both;">
 <br />
          </div>


        </div>
      </div>
      
      <!-- Right Column -->
      <div id="right-column" class="column right">
        <!-- Map Container -->
        <div id="map" class="column-box boxed">
        
        <div id="map-under">
					
					
						<!--<div id="home-map-caption">
							Click a route to see its schedule and detail map.
						</div> --> 
						<div id="ms-preload-65"> </div>

<div id="ms-preload-75"> </div>

<div id="ms-preload-5"> </div>

<div id="ms-preload-9"> </div>

<div id="ms-preload-20"> </div>

<div id="ms-preload-60"> </div>

<div id="ms-preload-95"> </div>

<div id="ms-preload-1"> </div>

<div id="ms-preload-7"> </div>

						<map name="map">
<area shape="poly" coords="299,41,297,16,323,16,323,39," href="/routes/routes-5-and-60" alt="5" title="5"   />
<area shape="poly" coords="393,134,393,155,421,155,421,136," href="/routes/routes-1-and-20" alt="1" title="1"   />
<area shape="poly" coords="385,281,384,302,404,304,404,284," href="/routes/routes-7-and-9" alt="9" title="9"   />
<area shape="poly" coords="357,283,357,304,380,304,382,284," href="/routes/routes-7-and-9" alt="7" title="7"   />
<area shape="poly" coords="151,140,167,142,194,88,208,56,208,49,214,33,197,28,164,86," href="/routes/routes-5-and-60" alt="60" title="60"   />
<area shape="poly" coords="219,31,208,47,223,74,235,114,265,141,291,146,317,145,354,144,365,142,365,158,361,171,357,189,359,203,369,228,369,239,348,264,349,276,343,284,331,301,328,327,322,336,315,373,309,444,291,482,293,626,305,668,322,678,332,658,332,610,330,564,340,529,337,498,335,458,347,410,347,388,351,358,355,314,354,298,368,268,387,248,386,219,383,198,383,170,381,115,341,112,292,98,267,87,256,68,238,58," href="/routes/route-65" alt="65" title="65"   />
<area shape="poly" coords="334,272,343,280,330,301,311,319,253,324,216,316,215,240,178,193,159,233,127,269,115,284,125,350,131,375,123,376,116,360,111,334,107,318,104,306,103,292,101,278,90,278,90,260,109,240,127,207,134,179,150,144,171,144,204,172,237,198,237,236,250,273,263,292,304,290," href="/routes/route-75" alt="75" title="75"   />
<area shape="poly" coords="91,280,101,280,103,304,103,318,111,342,118,368,129,386,148,433,156,504,190,567,191,618,221,635,271,638,305,662,318,681,303,689,209,686,129,674,143,627,139,570,118,524,113,446,96,382,88,334,85,304," href="/routes/route-95" alt="95" title="95"   />
<area shape="poly" coords="349,146,364,144,361,153,359,168,359,180,354,192,354,202,365,218,369,236,347,265,345,277,331,277,341,243,340,206,339,174," href="/routes/routes-1-and-20" alt="20" title="20"   />
</map>

      
						<img src="/images/clear.png" width="466" height="710" usemap="#map"  hidefocus="true" />
	</div> <!-- end #map under -->				
					
    
        </div>

        <!-- Connections container -->
        <div id="connections" class="column-box boxed">
          <div class="box-header">Connections</div>
          <div class="box-chunk" style="margin-top: 17px">
            MTA service connects with 
            <ul class="ul-circle">
				<li><a href="http://www.greyhound.com/">Greyhound</a></li>
					<li><a href="http://www.amtrak.com/">Amtrak</a></li>
				<li><a href="http://www.sctransit.com/">Sonoma County Transit</a></li>
				<li><a href="http://goldengate.org/schedules.php">Golden Gate Transit</a></li>
				<li><a href="http://www.laketransit.org/">Lake Transit</a></li>
				<li><a href="http://ci.santa-rosa.ca.us/departments/transit/CityBus/Pages/default.aspx">Santa Rosa CityBus</a></li>
            </ul>
            For more
            information on these connections, see the
            <a href="/connections">Connections</a> page or individual routes
            pages.
          </div>
        </div>
      </div>

    </div>
    <br style="clear: both;">

    </div> <!-- page-overlay -->

<?php get_footer(); ?>