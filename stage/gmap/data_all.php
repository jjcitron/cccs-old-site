<?php header('Content-Type: application/javascript');?>

<?php
include('../includes/pageSettings.php'); 

function set_file(){
	$aLocFile = 'all.csv';
	return $aLocFile;
}

function csv_to_array($filename, $delimiter){
	if(!file_exists($filename) || !is_readable($filename))
		return FALSE;
	$header = NULL;
	$data = array();
	if (($handle = fopen($filename, 'r')) !== FALSE){
		while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE){
			if(!$header){
				$header = $row;
			}else{ $data[] = array_combine($header, $row); }
		}
		fclose($handle);
	}
return $data;
}

$contentOpen = "<div id=\'theInfobox\'><div id=\'transDiv\' class=\'hidden\'><div class=\'div-out\'><div class=\'div-in\'>";
$contentClose = "</div></div></div></div>";

if($lang=='es'){$helpTxt = "Fue Ayudado Con:";}else{$helpTxt = "Got Help With:";}

$thedata = csv_to_array(set_file(), ',');

$totaldat = count($thedata);
shuffle($thedata);

foreach ($thedata as $key => $row) {
    $aName[$key] = $row['Name'];
	$aSex[$key] = $row['Sex'];
    $aLocation[$key] = $row['Location'];
	$aAmount[$key] = $row['Amount'];
	$aLat[$key] = $row['Latitude'];
	$aLon[$key] = $row['Longitude'];
	$aState[$key] = $row['State'];
}

$datlimit;
for ($i = 0; $i <= $totaldat; $i++) {
	if($totaldat < 500){
		$datlimit = $totaldat-1;
	}else{$datlimit = 500;}
}	
?>

var theData = {
	'pinLocations':[
	
	<?php
		for ($i = 0; $i <= $datlimit; $i++){
			switch ($aState[$i]){
				case 'CA':
				echo "{'name':'".$aName[$i]."', 'ico':'gmap/img/pin".$aSex[$i].".png', 'content':'".$contentOpen .$aName[$i]."</br>".$aLocation[$i]."</br></br>".$helpTxt."</br><span>".$aAmount[$i]."</span>".$contentClose."', 'lat':'".$aLat[$i]."', 'lng':'".$aLon[$i]."' },";
				break;
			case 'GA':
				echo "{'name':'".$aName[$i]."', 'ico':'gmap/img/pin".$aSex[$i].".png', 'content':'".$contentOpen .$aName[$i]."</br>".$aLocation[$i]."</br></br>".$helpTxt."</br><span>".$aAmount[$i]."</span>".$contentClose."', 'lat':'".$aLat[$i]."', 'lng':'".$aLon[$i]."' },";
				break;
			case 'NJ':
				echo "{'name':'".$aName[$i]."', 'ico':'gmap/img/pin".$aSex[$i].".png', 'content':'".$contentOpen .$aName[$i]."</br>".$aLocation[$i]."</br></br>".$helpTxt."</br><span>".$aAmount[$i]."</span>".$contentClose."', 'lat':'".$aLat[$i]."', 'lng':'".$aLon[$i]."' },";
				break;
			case 'NY':
        		echo "{'name':'".$aName[$i]."', 'ico':'gmap/img/pin".$aSex[$i].".png', 'content':'".$contentOpen .$aName[$i]."</br>".$aLocation[$i]."</br></br>".$helpTxt."</br><span>".$aAmount[$i]."</span>".$contentClose."', 'lat':'".$aLat[$i]."', 'lng':'".$aLon[$i]."' },";
				break;
			case 'TX':
        		echo "{'name':'".$aName[$i]."', 'ico':'gmap/img/pin".$aSex[$i].".png', 'content':'".$contentOpen .$aName[$i]."</br>".$aLocation[$i]."</br></br>".$helpTxt."</br><span>".$aAmount[$i]."</span>".$contentClose."', 'lat':'".$aLat[$i]."', 'lng':'".$aLon[$i]."' },";
				break;
			case 'PR':
        		echo "{'name':'".$aName[$i]."', 'ico':'gmap/img/pin".$aSex[$i].".png', 'content':'".$contentOpen .$aName[$i]."</br>".$aLocation[$i]."</br></br>".$helpTxt."</br><span>".$aAmount[$i]."</span>".$contentClose."', 'lat':'".$aLat[$i]."', 'lng':'".$aLon[$i]."' },";
				break;
			case 'MN':
       			echo "{'name':'".$aName[$i]."', 'ico':'gmap/img/pin".$aSex[$i].".png', 'content':'".$contentOpen .$aName[$i]."</br>".$aLocation[$i]."</br></br>".$helpTxt."</br><span>".$aAmount[$i]."</span>".$contentClose."', 'lat':'".$aLat[$i]."', 'lng':'".$aLon[$i]."' },";
				break;
			case 'NE':
        		echo "{'name':'".$aName[$i]."', 'ico':'gmap/img/pin".$aSex[$i].".png', 'content':'".$contentOpen .$aName[$i]."</br>".$aLocation[$i]."</br></br>".$helpTxt."</br><span>".$aAmount[$i]."</span>".$contentClose."', 'lat':'".$aLat[$i]."', 'lng':'".$aLon[$i]."' },";
				break;
			case 'IL':
        		echo "{'name':'".$aName[$i]."', 'ico':'gmap/img/pin".$aSex[$i].".png', 'content':'".$contentOpen .$aName[$i]."</br>".$aLocation[$i]."</br></br>".$helpTxt."</br><span>".$aAmount[$i]."</span>".$contentClose."', 'lat':'".$aLat[$i]."', 'lng':'".$aLon[$i]."' },";
				break;
			case 'MA':
       			echo "{'name':'".$aName[$i]."', 'ico':'gmap/img/pin".$aSex[$i].".png', 'content':'".$contentOpen .$aName[$i]."</br>".$aLocation[$i]."</br></br>".$helpTxt."</br><span>".$aAmount[$i]."</span>".$contentClose."', 'lat':'".$aLat[$i]."', 'lng':'".$aLon[$i]."' },";
				break;
			case 'OK':
        		echo "{'name':'".$aName[$i]."', 'ico':'gmap/img/pin".$aSex[$i].".png', 'content':'".$contentOpen .$aName[$i]."</br>".$aLocation[$i]."</br></br>".$helpTxt."</br><span>".$aAmount[$i]."</span>".$contentClose."', 'lat':'".$aLat[$i]."', 'lng':'".$aLon[$i]."' },";
				break;
			case 'SD':
        		echo "{'name':'".$aName[$i]."', 'ico':'gmap/img/pin".$aSex[$i].".png', 'content':'".$contentOpen .$aName[$i]."</br>".$aLocation[$i]."</br></br>".$helpTxt."</br><span>".$aAmount[$i]."</span>".$contentClose."', 'lat':'".$aLat[$i]."', 'lng':'".$aLon[$i]."' },";
				break;
			case 'FL' :
			default:
				echo "{'name':'".$aName[$i]."', 'ico':'gmap/img/pin".$aSex[$i].".png', 'content':'".$contentOpen .$aName[$i]."</br>".$aLocation[$i]."</br></br>".$helpTxt."</br><span>".$aAmount[$i]."</span>".$contentClose."', 'lat':'".$aLat[$i]."', 'lng':'".$aLon[$i]."' },";
			}
		}
	?>
	
]}