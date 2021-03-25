<?php
/*
Template Name: mapsAndSchedules
*/
get_header(); ?>

<div id="page-overlay">
    <header>
      <h1 class="entry-title main"><?php the_title(); ?></h1>
    </header>
  <?php //if(function_exists(simple_breadcrumb)) {simple_breadcrumb();} ?>
	<br/>
	<hr />
  <br/>
    <main>
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
              <div class="ms-circ">
                <a href="/routes/route-65">
                  <img src="/images/mapsandschedules/maps-n-schedules-circ-65.png" alt="Route 65">
                </a>
              </div>
              <div class="ms-desc"><a href="/routes/route-65"><?php the_title(); ?></a>
                <br />
                <span style="font-size: 10px;">7-days per week from Ft. Bragg to Willits, Ukiah and  Santa Rosa.</span>
              </div>

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
						<a href="/routes/route-7">
							<img src="/images/mapsandschedules/maps-n-schedules-circ-7.png" alt=" Route 7">
						</a>
					</div>

					<div class="ms-desc">
            <a href="/routes/route-7">Ukiah Jitney</a><br /> <span style="font-size: 11px;">A direct route connecting North and South Ukiah
						<br /> Mon-Fri</span>
					</div>
				</div>
			</div>
			<br style="clear: both;">
      <div class="box-row">
				<div class="box-row box-row-item">
          <div class="ms-circ">
           	<a href="/routes/route-9">
              <img src="/images/mapsandschedules/maps-n-schedules-circ-9.png" alt=" Route 9">
            </a>
          </div>
          <div class="ms-desc">
            <a href="/routes/route-9">Ukiah Local</a>
            <br />
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

              <div class="ms-circ">
                <a href="/routes/route-1">
                  <img src="/images/mapsandschedules/maps-n-schedules-circ-1.png" alt=" Route 1">
                </a>
              </div>
              <div class="ms-desc">
                <a href="/routes/route-1">Willits Local</a>
                <br />
                <span style="font-size: 11px;"> Local Service within Willits.</span>
              </div>
            </div>
            </div>
            <br style="clear: both;">
            <div class="box-row">
              <div class="box-row box-row-item">
                <div class="ms-circ">
                  <a href="/routes/route-20">
                    <img src="/images/mapsandschedules/maps-n-schedules-circ-20.png" alt="Route 20">
                  </a>
                </div>
                <div class="ms-desc">
                  <a href="/routes/route-20">Willits / Ukiah</a>
                  <br />
                  <span style="font-size: 10px;">Connects Willits, Mendocino Community College, and Ukiah, with timed transfers to Route 9 Ukiah Local. Mon-Fri.</span>
                </div>
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
					<a href="/routes/route-5">
            <img src="/images/mapsandschedules/maps-n-schedules-circ-5.png" alt=" Route 5">
          </a>
				  </div>

				  <div class="ms-desc">
					  <a href="/routes/route-5">BraggAbout</a>
            <br /> <span style="font-size: 11px;">Mon - Fri: Hourly service in Ft. Bragg</span>
				  </div>
            </div>
            </div>
            <br style="clear: both;">
            <div class="box-row">
              <div class="box-row box-row-item">
                <div class="ms-circ">
                  <a href="/routes/route-60">
                    <img src="/images/mapsandschedules/maps-n-schedules-circ-60.png" alt=" Route 60">
                  </a>
                </div>
              <div class="ms-desc">
                <a href="/routes/route-60">The Coaster</a>
                <br />
                <span style="font-size: 11px;">Mon - Fri: Ft. Bragg to Mendocino, Connects with Route 75</span>
              </div>
            </div>
          </div>
        </div>
      <br style="clear: both;">
      <div class="box-chunk">
        <div class="box-row">
        <hr />
        <div class="ms-region">South Mendocino Coast / Santa Rosa</div>
        <div class="box-row box-row-item">
          <div class="ms-circ">
            <a href="/routes/route-95">
              <img src="/images/mapsandschedules/maps-n-schedules-circ-95.png" alt=" Route 95">
            </a>
          </div>
          <div class="ms-desc">
            <a href="/routes/route-95">Route 95</a>
              <br />
              <span style="font-size: 11px;"> 1 trip daily, 7-days per week</span>
            </div>
            <br style="clear: both;">
           </div>
<hr />
            <div class="box-row">
              <div class="ms-region">South Mendocino Coast /Ukiah</div>
 <br />
               <div class="ms-circ">
                <a href="/routes/route-75">
                  <img src="/images/mapsandschedules/maps-n-schedules-circ-75.png" alt=" Route 75">
                </a>
              </div>
               <div class="ms-desc"><a href="/routes/route-75">Route 75</a><br /><span style="font-size: 10px;">Mon - Sat: One trip daily, <br />Connects with Route 60 M-F only</span></div>
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
        <aside id="map" class="column-box boxed">
          <?php include('coastal_detail-01.svg'); ?>
        </aside>

        <!-- Connections container -->
        <aside id="connections" class="column-box boxed">
          <div class="box-header">Connections</div>
            <div class="box-chunk" style="margin-top: 17px">
              MTA service connects with
              <ul class="ul-circle">
                <li><a href="http://www.greyhound.com/">Greyhound</a></li>
                  <li><a href="http://www.amtrak.com/">Amtrak</a></li>
                <li><a href="http://www.sctransit.com/">Sonoma County Transit</a></li>
                <li><a href="http://goldengate.org/schedules.php">Golden Gate Transit</a></li>
                <li><a href="http://www.laketransit.org/">Lake Transit</a></li>
                <li><a href="https://srcity.org/1036/Transit-and-CityBus">Santa Rosa CityBus</a></li>
              </ul>
              For more
              information on these connections, see the
              <a href="/connections">Connections</a> page or individual routes
              pages.
            </div>
          </div>
        </aside>

    </div>
    <br style="clear: both;">
    </main>
   

  </div> <!-- page-overlay -->

<?php get_footer(); ?>