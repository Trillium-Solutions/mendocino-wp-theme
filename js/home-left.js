/**** home left col styling ***/

var $j = jQuery.noConflict();

$j(function(){


	var leftLinksHeight = $j('#home-left-links').height();	
	$j('.height-check li').each(function() {
	//	alert(($j(this).height())/leftLinksHeight);
		
	});
	
	var maxLinks = 10; // clamp down on total links for testing layout
	
	
	var maxHeight = $j('#home-dynamic-space').height();

	
	//count the articles present
	
	var leftLinkSections = $j('.left-links-sec');
	var combinedSectionHeight = 0;
	$j.each(leftLinkSections, function() {
				combinedSectionHeight += $j(this).height();
	});
	
	//alert(combinedSectionHeight);
	

	
	var links = $j('.left-home-link');
	var numLinksAdded = 0;
	var numAlertsAdded = 0;
	var numNewsAdded = 0;
	var numJobsAdded = 0;
	var newsJobCount = 0;
	
	var alerts = $j('#home-service-alerts ul li');
	var news = $j('#home-news ul li');
	var jobs = $j('#home-jobs ul li');
	
	//alert('alerts: '+alerts.length+', news: '+ news.length + ', jobs: '+jobs.length);
	
	var count = 0;
	
	while (combinedSectionHeight <= maxHeight) {
		if( numLinksAdded < links.length) {
			if (numAlertsAdded < alerts.length) {
				var nextAlert = $j(alerts[numAlertsAdded]);
				if (combinedSectionHeight + nextAlert.height() < maxHeight) {
					nextAlert.css('display','inline');
					numLinksAdded++;
					numAlertsAdded++;
				}
			}
			else {
				if ((newsJobCount%2 == 0 || numJobsAdded >= jobs.length-1) && !(news.length == 0) && numNewsAdded < news.length) {
					if (numNewsAdded < news.length) {
							var nextNews = $j(news[numNewsAdded]);
							if (combinedSectionHeight + nextNews.height() < maxHeight) {
								nextNews.css('display','inline');
								numLinksAdded++;
								numNewsAdded++;
								newsJobCount++;
							}
					}
				}
				else {
					if (numJobsAdded < jobs.length) {

						var nextJob = $j(jobs[numJobsAdded]);

						if (combinedSectionHeight + nextJob.height() < maxHeight) {
							nextJob.css('display','inline');
							numLinksAdded++;
							numJobsAdded++;
							newsJobCount++;

						}
					}
				}
		
			// check new height
			
			}
		} 
		
		var updatedHeight = 0;
		$j.each(leftLinkSections, function() {
				updatedHeight += $j(this).height();
		});
		combinedSectionHeight = updatedHeight;
		

		
		count++;
		
		if(count == 20) break;
	}
		
		
		var visibleSections = [];
		var sections = $j("#home-news,#home-jobs,#home-service-alerts");
		$j.each(sections, function() {
			var liChilds = $j(this).find('li');
			var hasVisible = false;
			$j.each(liChilds, function(i, child) {
				if($j(child).css('display') === 'inline') {hasVisible = true;}
			});
			if (!hasVisible) {
				$j(this).css('display', 'none');
			} else {
				visibleSections.push($j(this));
			}
		});
		
		
		
		if( visibleSections.length == 3) {
			 var spacer = (maxHeight- combinedSectionHeight)/3;
			 $j(visibleSections[0]).find("ul.left-link-list").css('padding-bottom', spacer*.9);
			 $j(visibleSections[0]).css('padding-bottom', spacer/10);
			 $j(visibleSections[1]).find("ul.left-link-list").css('padding-bottom', spacer);
			 $j(visibleSections[2]).find("ul.left-link-list").css('padding-bottom', spacer);
		 } else if( visibleSections.length == 2) {
			 var spacer = (maxHeight- combinedSectionHeight)/2;
			$j(visibleSections[0]).find("ul").css('padding-bottom', spacer*.8);
			$j(visibleSections[0]).css('padding-bottom', spacer*.2);
			 $j(visibleSections[1]).find("ul").css('padding-bottom', spacer*.6);
			 $j(visibleSections[1]).css('padding-bottom', spacer*.4);
		 }



});