$(document).ready(function(){
  'use strict';
 
});//===== Document Ready Ends =====//

function get_azan_time(selectObject) {
   
   var value = selectObject.value;  
	var azan_time_json_url = "https://api.aladhan.com/v1/timingsByCity?city="+ value +"&country="+ value +"&method=8"; // Thanks to API Aladhan.com
	var namaz_time_json_url = "https://api.aladhan.com/v1/timingsByCity?city="+ value +"&country="+ value +"&method=8&tune=2,10,10,10,10,10,10,10,10";
	
	$.getJSON(azan_time_json_url, function (data) {
		 "use strict";
		 var status = data.code;
		 var timings = data.data.timings; // Azan Timings
		 
		if(status == 200){
			for(var i = 0; i < 1; i++) {
				
				$(".Waktu-solat-Imsak").html(get_meridian(timings.Imsak));
				$(".Waktu-solat-Subuh").html(get_meridian(timings.Subuh));
				$(".Waktu-solat-Syuruk").html(get_meridian(timings.Syuruk));
				$(".Waktu-solat-Zohor").html(get_meridian(timings.Zohor));
				$(".Waktu-solat-Asar").html(get_meridian(timings.Asar));
				$(".Waktu-solat-Maghrib").html(get_meridian(timings.Maghrib));
				$(".Waktu-solat-Isyaq").html(get_meridian(timings.Isyaq));
				
			}

		}else{
			  // API Not Working 
		}
	});
	
	$.getJSON(namaz_time_json_url, function (data) {
		 "use strict";
		 var status = data.code;
		 var timings = data.data.timings; // Prayer Timings
		 
		 $("#result-update").html('Waktu Solat bagi Kawasan:' + ' ' + '<span class ="country">' + value + '</span>');
		 
		if(status == 200){
			for(var i = 0; i < 1; i++) {
				$(".Waktu-solat-Imsak").html(get_meridian(timings.Imsak));
				$(".Waktu-solat-Subuh").html(get_meridian(timings.Subuh));
				$(".Waktu-solat-Syuruk").html(get_meridian(timings.Syuruk));
				$(".Waktu-solat-Zohor").html(get_meridian(timings.Zohor));
				$(".Waktu-solat-Asar").html(get_meridian(timings.Asar));
				$(".Waktu-solat-Maghrib").html(get_meridian(timings.Maghrib));
				$(".Waktu-solat-Isyaq").html(get_meridian(timings.Isyaq));
				
			}

		}else{
			  // API Not Working 
		}
	});
	
}

function get_meridian(ntime){

	const timeString = ntime + ':00'
	// Append any date.
	const timeString12hr = new Date('2000-01-01T' + timeString + 'Z')
	  .toLocaleTimeString({},
		{timeZone:'GMT+8',hour12:true,hour:'numeric',minute:'numeric'}
	  );
	return(timeString12hr);		

	
}