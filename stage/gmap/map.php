<?php $currentPage = $_GET['cp']; ?>

<!DOCTYPE html>
<html>
  <head>
	<link rel="stylesheet" type="text/css" href="css/map.css" />
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-gmS9gY_2KrqnKV0aCL2PzcUPMPA88n0"></script>
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/infobox.js"></script>
	<script type="text/javascript" src="js/data.php?loc=<?php echo $currentPage;?>"></script>
	<script>var thelocations = theData;</script>

<?php 

switch($currentPage){
	
	case 'local-florida.php':
	default:
		$theLat = '28.058168';
		$theLng = '-83.481698';
		$theZoom = '6';
	break;
	case 'local-california.php':
		$theLat = '37.245642'; 
		$theLng = '-119.731841';
		$theZoom = '5';
	break;
	case 'local-georgia.php':
		$theLat = '32.165622';
		$theLng = '-82.900075';
		$theZoom = '6';
	break;
	case 'local-newjersey.php':
		$theLat = '40.058324';
		$theLng = '-74.405661';
		$theZoom = '7';
	break;
	case 'local-newyork.php':
		$theLat = '42.521201'; 
		$theLng = '-75.579809';
		$theZoom = '6';
	break;
	case 'local-texas.php':
		$theLat = '31.968599';
		$theLng = '-99.901813';
		$theZoom = '5';
	break;
	}
?>

<script type="text/javascript">
	var theCenter = new google.maps.LatLng(<?php echo $theLat .','. $theLng;?>),
		theZoom = <?php echo $theZoom ?>;
	
	function CenterControl(controlDiv, map) {

	  // Set CSS for the control border
	  var controlUI = document.createElement('div');
	  controlUI.style.backgroundColor = '#003666';
	  controlUI.style.border = '2px solid #fffaf0';
	  controlUI.style.borderRadius = '5px';
	  controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
	  controlUI.style.cursor = 'pointer';
	  controlUI.style.marginRight = '5px';
	  controlUI.style.marginTop = '5px';
	  controlUI.style.textAlign = 'center';
	  controlUI.title = 'Click to recenter the map';
	  controlDiv.appendChild(controlUI);

	  // Set CSS for the control interior
	  var controlText = document.createElement('div');
	  controlText.style.color = '#fffaf0';
	  controlText.style.fontSize = '16px';
	  controlText.style.lineHeight = '35px';
	  controlText.style.paddingLeft = '5px';
	  controlText.style.paddingRight = '5px';
	  controlText.innerHTML = 'Reset';
	  controlUI.appendChild(controlText);

	  //Reset to center
	  google.maps.event.addDomListener(controlUI, 'click', function() {
		map.setCenter(theCenter)
		map.setZoom(theZoom)
	  });

	}
	
function initialize() {

    var style = [
		{"featureType":"all","stylers":[{"saturation":0},{"hue":"#e7ecf0"}]}, 
		{ "featureType": "administrative.province", "elementType": "labels", "stylers": [{ "visibility": "on" }, { "color": "#003666" }, { "weight": 1}]}, 
		{ "featureType": "administrative.province", "elementType": "geometry", "stylers": [ { "visibility": "on" }, { "color": "#22b9f0" }, { "weight": 2}]}, 
		{ "featureType": "administrative.locality", "stylers": [{ "visibility": "off" }]}, 
		{"featureType":"road","stylers":[{"visibility":"off"}]},
		{"featureType":"transit","stylers":[{"visibility":"off"}]},
		{"featureType":"poi","stylers":[{"visibility":"off"}]},
		{"featureType":"water","stylers":[{"visibility":"simplified"},{"color":"#22b9f0"}]}
	],

	mapOptions = {
		mapTypeControlOptions: {
			mapTypeIds: [google.maps.MapTypeId.ROADMAP, "Styled"] 
		},
		backgroundColor: '#22b9f0',
		disableDefaultUI: true,
		//disableDoubleClickZoom: true,
		scrollwheel: false
	},
	
	map = new google.maps.Map(document.getElementById("mapCanvas"), mapOptions),
		styledMapType = new google.maps.StyledMapType(style, {name: "Styled"});
		map.mapTypes.set("Styled", styledMapType);
		map.setMapTypeId('Styled');
		map.setCenter(theCenter);
		map.setZoom(theZoom);
		
	var centerControlDiv = document.createElement('div');
	var centerControl = new CenterControl(centerControlDiv, map);
		centerControlDiv.index = 1;
		map.controls[google.maps.ControlPosition.TOP_RIGHT].push(centerControlDiv);

	dropPins(map, thelocations);

}

function dropPins(map, locations){
    
	var theContentString = [], marker = [];
	
	for (var i = 0; i < locations.pinLocations.length; i++) {
	
		var person = locations.pinLocations[i];		
		var LatLng = new google.maps.LatLng(locations.pinLocations[i].loc.lat, locations.pinLocations[i].loc.lng);
	
		marker[i] = new google.maps.Marker({
			map: map,
			position: LatLng,
			visible: true,
			draggable:false,
			animation: google.maps.Animation.DROP,
			icon: locations.pinLocations[i].ico,
			title: locations.pinLocations[i].name
		});
	
		theContentString[i]= locations.pinLocations[i].content;

		var boxOptions = {
			alignBottom: true,
			pixelOffset: new google.maps.Size(-150, -50),
			boxStyle: { width: "300px" },
			closeBoxMargin: "",
			closeBoxURL: "img/close.png",
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
	
	function Animate() {
		setTimeout(function() { //InfoBox loads first -- !Important! 
		if(document.getElementById("transDiv").className == "hidden"){
			document.getElementById("transDiv").className = "";		
			}
			else{ document.getElementById("transDiv").className = "hidden";	}
		}, 75);
	}
}
</script>

</head>

<body onload="initialize()">

<div id="mapCanvas"></div>

</body>
</html>