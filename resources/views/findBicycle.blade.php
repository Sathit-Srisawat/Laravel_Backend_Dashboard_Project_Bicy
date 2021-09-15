<!DOCTYPE html>
<html>
  <head>
    <title>Find Bicycle</title>
    <meta name="viewport" content="initial-scale=1.0">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./main.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html {
        height: 100%;
        margin: 0;
        padding: 0;
		text-align: center;
      }

      #map {
        height: 1000px;
        width: 100%;
      }
    </style>
  </head>
  <body>
  <div id="map"></div>

    <div class="w3-top">
        <div class="w3-bar w3-black w3-card">
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>

            <a href="http://128.199.197.229" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Dashboard</a>

            <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
        </div>
    </div>

    <script>

      function initMap() {
			var mapOptions = {
              center: {lat: 8.642067, lng: 99.897298},
			  zoom: 14,
			}
				
			var maps = new google.maps.Map(document.getElementById("map"),mapOptions);

			var marker, info;

			$.getJSON( 'http://128.199.197.229/bicycle-api' , function( jsonObj ) {
					//*** loop
					$.each(jsonObj, function(i, item){
						marker = new google.maps.Marker({
						   position: new google.maps.LatLng(item.latitude, item.longitude),
						   map: maps,
						   title: item.type
						});

					  info = new google.maps.InfoWindow();

					  google.maps.event.addListener(marker, 'click', (function(marker, i) {
						return function() {
						  info.setContent(item.type);
						  info.open(maps, marker);
						}
					  })(marker, i));

					}); // loop

			 });

		}
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwOYJQOrpYIa1r-jWbf7TWf3ewxWJ8_Xg&callback=initMap&libraries=&v=weekly" async defer></script>
  </body>
</html>
