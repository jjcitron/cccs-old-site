<?php 
switch($location){
	case 'california.php':
		$locName = 'California';
		$theLatLon = '37.245642, -119.731841';
		$neBounds = '46.928029, -109.681987';
		$swBounds = '22.644798, -129.589213';
		$theZoom = '5';
		break;
	case 'georgia.php':
		$locName = 'Georgia';
		$theLatLon = '32.165622, -82.900075';
		$neBounds = '36.875888, -76.010995';
		$swBounds = '27.015827, -93.545174';
		$theZoom = '6';
		break;
	case 'newjersey.php':
		if($lang=='es'){$locName = 'Nueva Jersey';}else{$locName = 'New Jersey';}
		$theLatLon = '40.058324, -74.405661';
		$neBounds = '43.030052, -71.484887';
		$swBounds = '38.011311, -77.903085';
		$theZoom = '7';
		break;
	case 'newyork.php':
		if($lang=='es'){$locName = 'Nueva York';}else{$locName = 'New York';}
		$theLatLon = '42.521201, -75.579809'; 
		$neBounds = '48.829304, -64.490266';
		$swBounds = '36.154691, -86.796184';
		$theZoom = '6';
		break;
	case 'texas.php':
		$locName = 'Texas';
		$theLatLon = '31.968599, -99.901813';
		$neBounds = '42.413842, -83.222125';
		$swBounds = '15.561406, -118.108300';
		$theZoom = '5';
		break;
	case 'pr.php':
		$locName = 'Puerto Rico';
		$theLatLon = '18.1954658, -66.4740017';
		$neBounds = '19.740014, -63.672300';
		$swBounds = '16.344492, -69.292424';
		$theZoom = '7';
		break;
	case 'mn.php':
		$locName = 'Minnesota';
		$theLatLon = '46.221033, -94.574011';
		$neBounds = '50.774116, -89.564245';
		$swBounds = '42.919574, -100.550573';
		$theZoom = '6';
		break;
	case 'ne.php':
		$locName = 'Nebraska';
		$theLatLon = '41.492537, -99.901813';
		$neBounds = '44.217705, -94.012690';
		$swBounds = '38.835492, -104.845209';
		$theZoom = '6';
		break;
	case 'il.php':
		$locName = 'Illinois';
		$theLatLon = '40.633125, -89.398528';
		$neBounds = '42.999043, -85.691883';
		$swBounds = '36.158301, -94.195301';
		$theZoom = '6';
		break;
	case 'ma.php':
		$locName = 'Massachusetts';
		$theLatLon = '42.407211, -71.382437';
		$neBounds = '43.268590, -69.081628';
		$swBounds = '40.621650, -75.371301';
		$theZoom = '7';
		break;
	case 'ok.php':
		$locName = 'Oklahoma';
		$theLatLon = '35.467560, -97.516428';
		$neBounds = '37.979260, -93.406206';
		$swBounds = '32.875416, -105.666948';
		$theZoom = '6';
		break;
	case 'sd.php':
		$locName = 'South Dakota';
		$theLatLon = '43.969515, -99.901813';
		$neBounds = '47.199952, -93.534518';
		$swBounds = '41.511635, -106.333590';
		$theZoom = '6';
		break;
	case 'florida.php':
	default:
		$locName = 'Florida';
		$theLatLon = '28.058168, -83.481698';
		$neBounds = '34.230654, -77.955576';
		$swBounds = '20.977599, -89.645028';
		$theZoom = '6';
	}
?>

<script>
var theCenter = new google.maps.LatLng(<?php echo $theLatLon ?>),
	theZoom = <?php echo $theZoom ?>;
	  
function initialize() {
	
	var style = [
		{"featureType":"all","stylers":[{"saturation":0},{"hue":"#e7ecf0"}]},
		{"featureType": "administrative.province", "elementType": "labels", "stylers": [{ "visibility": "on" }, { "color": "#003666" }, { "weight": 1}]}, 
		{"featureType": "administrative.province", "elementType": "geometry", "stylers": [ { "visibility": "on" }, { "color": "#37a9e8" }, { "weight": 2}]}, 
		{"featureType": "administrative.locality", "stylers": [{ "visibility": "off" }]}, 
		{"featureType":"road","stylers":[{"visibility":"off"}]},
		{"featureType":"transit","stylers":[{"visibility":"off"}]},
		{"featureType":"poi","stylers":[{"visibility":"off"}]},
		{"featureType":"water","stylers":[{"visibility":"simplified"},{"color":"#37a9e8"}]}
	];
	
	  var mapOptions = {
		backgroundColor: '#37a9e8',
		disableDefaultUI: true,
		zoomControl: true,
		zoomControlOptions: {
			style: google.maps.ZoomControlStyle.LARGE,
			position: google.maps.ControlPosition.LEFT_CENTER
		},
		
		minZoom: theZoom
	  };

	var map = new google.maps.Map(document.getElementById('mapCanvas'), mapOptions);
		styledMapType = new google.maps.StyledMapType(style, {name: "Styled"});
		map.mapTypes.set("Styled", styledMapType);
		map.setMapTypeId('Styled');
		map.setCenter(theCenter);
		map.setZoom(theZoom);
		
		
		//Set Bounds
		/*var strictBounds = new google.maps.LatLngBounds(
			new google.maps.LatLng(<?php echo $swBounds ?>),
			new google.maps.LatLng(<?php echo $neBounds ?>) 
		);

        //Listen for drag
        google.maps.event.addListener(map, 'dragend', function() {
			if (strictBounds.contains(map.getCenter())) return;
			map.setCenter(theCenter);
        });*/
			
	dropPins(map, thelocations);
}

function dropPins(map, locations){
    
	var theContentString = [], marker = [];
	
	for (var i = 0; i < locations.pinLocations.length; i++) {
	//console.log('record number: ' + i +'name: ' + locations.pinLocations[i].name);
		var person = locations.pinLocations[i];		
		var LatLng = new google.maps.LatLng(locations.pinLocations[i].lat, locations.pinLocations[i].lng);
	
		marker[i] = new google.maps.Marker({
			map: map,
			position: LatLng,
			visible: true,
			draggable:false,
			animation: google.maps.Animation.DROP,
			//icon: locations.pinLocations[i].ico,
			icon:'gmap/img/thepin_v2.png',
			title: locations.pinLocations[i].name
		});
	
		theContentString[i]= locations.pinLocations[i].content;
		  
		var boxOptions = {
			alignBottom: true,
			pixelOffset: new google.maps.Size(-100, -40),
			//boxStyle: { width: "200px" },
			closeBoxMargin: "-7px 0 0 -7px",
			closeBoxURL: "gmap/img/close.png",
			infoBoxClearance: new google.maps.Size(100, 50),
		};
		
		var infobox = new InfoBox(boxOptions);
		google.maps.event.addListener(marker[i], 'click', Callback(map, theContentString[i], i));
	}

	function Callback(m, cs, n) {
		return function() {
			infobox.setContent(cs);
			infobox.open(map, this);
			Animate();
        };
	}
	
	function CloseCallback(m, n) {
		return function() {
			infobox.close(map, this);

        };
	}
	
	function Animate() {
		setTimeout(function() { //!Important!
			$('#transDiv').toggleClass('hidden');
		}, 75);
	}
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
<?php
	if($lang=='es'){echo '<div class="mapTitle">Algunos Residentes de &nbsp;<span>&nbsp;'.$locName.'&nbsp;</span>&nbsp;que hemos ayudado...</div>';}
		else{echo '<div class="mapTitle">Some&nbsp;<span>&nbsp;'.$locName.'&nbsp;</span>&nbsp;Residents we\'ve helped...</div>';}
?>
<div id="mapCanvas"></div>