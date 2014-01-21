jQuery(document).ready(function ($){
            $('#select-weekday')
                .click(function(){
                           $('#weekday-tables').prependTo('#route-tables');
                           // Swap classes
                           $('#saturday-tables').removeClass('hidden');
                           $('#weekday-tables').removeClass('hidden');

                           $('#weekday-tables').addClass('presented');
                           $('#saturday-tables').addClass('hidden');
                       });

            $('#select-saturday')
                .click(function(){
                           $('#saturday-tables').prependTo('#route-tables');
                           // Swap classes
                           $('#saturday-tables').removeClass('hidden');
                           $('#weekday-tables').removeClass('hidden');

                           $('#saturday-tables').addClass('presented');
                           $('#weekday-tables').addClass('hidden');
                       });
                       
                       
                         $j('.row').mouseover(function() {
$j(this).addClass('hover');
 });
 
 $j('.row').mouseout(function() {
  $j(this).removeClass('hover');
 });
 
 
$('.row').find('div:first').css("width","80px");
$('.popup .row').find('div:first').css("width","250px");


 
});