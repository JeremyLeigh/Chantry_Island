(function(){
	var map = new google.maps.Map(document.querySelector('.map-wrapper')), marker;
  var directionsService = new google.maps.DirectionsService();
  var directionsDisplay = new google.maps.DirectionsRenderer();
	function initMap(position) {
	map.setCenter(google.maps.LatLng(44.4999086,-81.37354700000003));
  directionsDisplay.setMap(map);
  directionsDisplay.setPanel(document.getElementById('panel'));
  var request = {
    origin: { lat: position.coords.latitude, lng: position.coords.longitude },
    destination:{ lat:44.4999086 , lng: -81.37354700000003 },
    travelMode: google.maps.DirectionsTravelMode.DRIVING
  };

  directionsService.route(request, function (response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    }
  });
	map.setZoom(16);



  var icon = {
    url : 'https://cdn0.iconfinder.com/data/icons/flaturici-set-3/512/lighthouse-512.png',
   scaledSize: new google.maps.Size(37, 37), // scaled size
    origin: new google.maps.Point(0,0), // origin
anchor: new google.maps.Point(10, 10) // anchor
  };
  marker = new google.maps.Marker({
    position : { lat:44.4999086 , lng: -81.37354700000003 },
    map: map,
    title: 'Chantry Island Tours',
    icon: icon
  });
	}
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(initMap, handleError);
	} else {
		console.log("Your browser does not have geolocation.");
	}
	function handleError(e) {
		console.log(e);
	}

})();
