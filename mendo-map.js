var hoverObjs = [];
var routeLinks = {
				 "1":"route-1",
				 "20":"route-20",
				 "7":"routes-7-and-9",
				 "9": "routes-7-and-9",
				 "5":"route-5",
				 "60":"route-60",
				 "65":"route-65",
				 "66":"route-66",
				 "75":"route-75",
				 "95":"route-95",
				 };



jQuery(document).ready(function($) {


	$('#hovers').find('polygon, path').on('click tap', function() {
	
		
		var routeName = routeLinks[$(this).attr('id').split('_')[0].replace('route','')];
	 
		var getUrl = window.location;
		
		window.location = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1] + '/routes/'+routeName;
	
		
	});


	
	function showHighlight(routeName) {

//	alert(routeName);
		$('#home-map, #map').addClass('hover');
		var $routeGroups = $('#highlights > path, #highlights > g, #highlights > polygon');
		console.log("highlights: " + $routeGroups);
		$.each($routeGroups, function(i, val) {

			//console.log($(val).attr('id') + ' comp to: ' + routeName);
			if($(val).attr('id')) {
				if($(val).attr('id').indexOf(routeName) !== -1  && $(val).attr('id').indexOf('highlight') !== -1 )
				{
					var strippedName = routeName.split('highlight')[0].replace('route','');
					var strippedID = $(val).attr('id').split('highlight')[0].replace('route','');
					if(strippedID === strippedName) {
						console.log("id:"+strippedName+', val id: '+$(val).attr('id'));
					
						var $potentialObjs = $(val).find('polygon, line, polyline, path, g');
			
						//$potentialObjs.attr('filter','url(#f1)');
						 //$potentialObjs.css('stroke-width','30px');
						 //$potentialObjs.css('stroke','white');
						 $potentialObjs.css('opacity','1');
						 
							  
						 hoverObjs.push($potentialObjs);
						 console.log($potentialObjs);
						 hoverObjs.push($(val));
				
						 $.each(hoverObjs, function(k, hoverItem) {
			
								$(hoverItem).css('opacity','1');
				
						});
			 
					}
				}
			
			}
		});

}

function hideHighlights() {
	$('#home-map, #map').removeClass('hover');
	if(hoverObjs.length > 0) {

			$.each(hoverObjs, function(k, hoverItem) {
				console.log('clearing: '+ hoverItem.attr('id'));
//				 $(hoverItem).css('stroke-width','10px');
				 $(hoverItem).css('opacity','0');
			});

			hoverObjs = [];
		}
		

}
  $('.box-row').hover( function() {
  		console.log('route'+$(this).find('a').attr('alt'));
  		showHighlight('route'+$(this).find('a').attr('alt'));
  		
  }, function() {
  	  	hideHighlights();
  });

	$('#hovers').find('polygon, path').on('mouseenter click', function() {
	
			var routeName = $(this).attr('id').split('_')[0];
			showHighlight(routeName);
		
		
	}).on('mouseout mouseleave', function() {
	
			hideHighlights();
			
	});


});