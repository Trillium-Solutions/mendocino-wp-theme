var $j = jQuery.noConflict();

$j(function(){

$j("#route-select").change(function() {
var selected = $j(this).val();
if(selected == "1-20") {
	window.location = "/routes/routes-1-and-20";
} else if (selected == "5-60") {
	window.location = "/routes/routes-5-and-60";
} else if (selected == "7-9") {
	window.location = "/routes/routes-7-and-9";
} else if (selected == "65") {
	window.location = "/routes/route-65";
} else if (selected == "75") {
	window.location = "/routes/route-75";
} else if (selected == "95") {
	window.location = "/routes/route-95";
} 

});


/**** Mobile to desktop cookie set ***/

$j('#mobile-to-desktop-link').click(function() {
  $j.cookie("force-desktop", 1);
});

$j('#desktop-to-mobile-link').click(function() {
  $j.cookie("force-desktop", 0);
});

$j("area[alt=5], a[alt=5]").hover( 
function(){
 $j("#map-under").addClass("m5");
 },
 function() {
 $j("#map-under").removeClass("m5");
});

$j("area[alt=65], a[alt=65]").hover( 
function(){
 $j("#map-under").addClass("m65");
 },
 function() {
 $j("#map-under").removeClass("m65");
});

$j("area[alt=95], a[alt=95]").hover( 
function(){
 $j("#map-under").addClass("m95");
 },
 function() {
 $j("#map-under").removeClass("m95");
});

$j("area[alt=75], a[alt=75]").hover( 
function(){
 $j("#map-under").addClass("m75");
 },
 function() {
 $j("#map-under").removeClass("m75");
});

$j("area[alt=60], a[alt=60]").hover( 
function(){
 $j("#map-under").addClass("m60");
 },
 function() {
 $j("#map-under").removeClass("m60");
});

$j("area[alt=20], a[alt=20]").hover( 
function(){
 $j("#map-under").addClass("m20");
 },
 function() {
 $j("#map-under").removeClass("m20");
});

$j("area[alt=9], a[alt=9]").hover( 
function(){
 $j("#map-under").addClass("m9");
 },
 function() {
 $j("#map-under").removeClass("m9");
});

$j("area[alt=1], a[alt=1]").hover( 
function(){
 $j("#map-under").addClass("m1");
 },
 function() {
 $j("#map-under").removeClass("m1");
});

$j("area[alt=7], a[alt=7]").hover( 
function(){
 $j("#map-under").addClass("m7");
 },
 function() {
 $j("#map-under").removeClass("m7");
});

/* fare table highlights */
$j(".fares-table, .div-table").delegate('td','mouseover mouseleave', function(e) {
    if (e.type == 'mouseover') {
      $j(this).parent().addClass("hover");
            $j(this).addClass("hover-single-cell");
   //   $j("colgroup").eq($j(this).index()).addClass("hover-col");
    }
    else {
      $j(this).parent().removeClass("hover");
        $j(this).removeClass("hover-single-cell");
     // $j("colgroup").eq($j(this).index()).removeClass("hover-col");
    }
});


/** fare calc stuff **/



$j.ajax({
type: "GET",
url: "http://trilliumtransit.com/clients/mendocino/produce_zone_xml.php",
data: '',
dataType: "xml",
success: function(xml) {
var select_start_zone = $j('#start_zone');

var optionsHtml = new Array();
    $j('zone', xml).each(function(){
                  var value = $j(this).attr('value');
                  var label = $j(this).text();
optionsHtml.push( "<option value='"+ value +"'>"+label+"</option>");

        });
optionsHtml = optionsHtml.join('');

select_start_zone.append(optionsHtml);


} //sucess close
}); 


$j('#fare_zones').submit(function() { // catch the form's submit event
    $j.ajax({ // create an AJAX call...
        data: $j(this).serialize(), // get the form data
        type: $j(this).attr('method'), // GET or POST
        url: $j(this).attr('action'), // the file to call
        success: function(response) { // on success..
            $j('#fare_result').html(response); // update the DIV
        }
    });
    return false; // cancel original event to prevent form submitting
});

});



function update_end_zones(start_zone_select) {

var id=$j(start_zone_select).val();
var dataString = 'start_zone='+ id;

$j.ajax
({
type: "GET",
url: "http://trilliumtransit.com/clients/mendocino/produce_zone_xml.php",
data: dataString,
cache: false,
success: function(xml) {
var select_end_zone = $j('#end_zone');

var optionsHtml = new Array();
optionsHtml.push( "<option value='0'>Select a destination zone</option>");
    $j('zone', xml).each(function(){
                  var value = $j(this).attr('value');
                  var label = $j(this).text();
optionsHtml.push( "<option value='"+ value +"'>"+label+"</option>");

        });
optionsHtml = optionsHtml.join('');

select_end_zone.html(optionsHtml);


} 
});

}

function clear_fare_result() {
document.getElementById('fare_result').innerHTML = '';
}