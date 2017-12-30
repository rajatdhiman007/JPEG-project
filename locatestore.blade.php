@extends('JPEG_project/bootstrapfileformain')
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body >
<div id="main_body" >


<!-- ################################################################################################ -->
<div id="googleMap" style="width:1000px;height:460px; left: 12%"></div>

<script>
// function myMap() {
// 	var mapProp= {
// 	    center:new google.maps.LatLng(51.508742,-0.120850),
// 	    zoom:5,
// 	};
// 	var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

// 	var infoWindow = new google.maps.InfoWindow({map: map});

// 	// Try HTML5 geolocation.
// 	if (navigator.geolocation) {
// 	  navigator.geolocation.getCurrentPosition(function(position) {
// 	    var pos = {
// 	      lat: position.coords.latitude,
// 	      lng: position.coords.longitude
// 	    };

// 	    infoWindow.setPosition(pos);
// 	    infoWindow.setContent('Location found.');
// 	    map.setCenter(pos);
// 	    var service = new google.maps.places.PlacesService(map);
//         service.nearbySearch({
//           location: pos,
//           radius: 5500,
//           type: ['art_gallery']
//         }, callback);
// 	  }, function() {
// 	    handleLocationError(true, infoWindow, map.getCenter());
// 	  });
// 	} else {
// 	  // Browser doesn't support Geolocation
// 	  handleLocationError(false, infoWindow, map.getCenter());
// 	}
// }

var map;
var infowindow;
var service;

function initMap() {
	if(navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(function(position) {
			var pos = {};
			pos.lat = position.coords.latitude;
			pos.lng = position.coords.longitude;
			map = new google.maps.Map(document.getElementById('googleMap'), {
			  center: pos,
			  zoom: 14
			});

			infowindow = new google.maps.InfoWindow();
			service = new google.maps.places.PlacesService(map);
			service.nearbySearch({
			  location: pos,
			  radius: 3500,
			  type: ['art_gallery']
			}, callback);
		});
	}
}

function callback(results, status) {
	if (status === google.maps.places.PlacesServiceStatus.OK) {
	  for (var i = 0; i < results.length; i++) {
	    createMarker(results[i]);
	  }
	}
}

function createMarker(place) {
	console.log(place)
	var placeLoc = place.geometry.location;
	service.getDetails(place, function(result, status) {
		if (status !== google.maps.places.PlacesServiceStatus.OK) {
	        console.error(status);
	        return;
		}
		console.log(result.formatted_phone_number);

		var marker = new google.maps.Marker({
		  map: map,
		  position: place.geometry.location,
		  phone: result.formatted_phone_number
		});

		google.maps.event.addListener(marker, 'click', function() {
		  infowindow.setContent("<h4 style='color: black;'>"+place.name+"</h4><br>"+"<button type='button' class='btn btn-info btn-lg' style='color: black;' data-toggle='modal' data-target='#myModal'>"+marker.phone+"</button>");
		  	// <a  href='pageName?phone="+marker.phone+"' target='_blank'>"+marker.phone+"</a>");
		  infowindow.open(map, this);
		});

	})

}


function handleLocationError(browserHasGeolocation, infoWindow, pos) {
	infoWindow.setPosition(pos);
	infoWindow.setContent(browserHasGeolocation ?
	                      'Error: The Geolocation service failed.' :
	                      'Error: Your browser doesn\'t support geolocation.');
}

</script>


<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfbni6i_iQv16v6pXr4qFHffZRMgQAhVk&callback=myMap"></script> -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfbni6i_iQv16v6pXr4qFHffZRMgQAhVk&libraries=places&callback=initMap" async defer></script>

 
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="color: black;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" >Send picture for printing</h4>
        </div>
        <div class="modal-body">
			<form action="store_location_data" method='POST' enctype='multipart/form-data'>
				<div class="form-group">
					<p>Upload Picture: <input type="file"  name="pic" accept="image/*"></p>
				  <label for="comment">Enter your message:</label>
				  <textarea class="form-control" rows="5" id="comment"></textarea>
				</div>
				<p><input type="submit" onclick="myFunction()" class="btn btn-primary btn-md" value="Submit"></p>
				<script>
				function myFunction() 
				{
    				alert("Your image and message has been sent to the selected studio!");
				}
			</script>
			</form>
        </div>
        <div class="modal-footer">
          <button type="button"  class="btn btn-default" data-dismiss="modal">Close</button>
        	
        </div>
      </div>
      
    </div>
  </div>
</div>


</body>
</html>
