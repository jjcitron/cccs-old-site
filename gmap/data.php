<?php header('Content-Type: application/javascript');?>

<?php
function set_file(){
	$aLocFile;
	//$location = explode('-', $_GET['loc']);
	//$location = $location[1];
	$location = str_replace('local-','',$_GET['loc']);
	
	switch ($location){	
	case 'california.php':
		$aLocFile='ca.csv';
		break;
	case 'georgia.php':
		$aLocFile='ga.csv';
		break;
	case 'newjersey.php':
		$aLocFile='nj.csv';
		break;
	case 'newyork.php':
		$aLocFile='ny.csv';
		break;
	case 'texas.php':
		$aLocFile='tx.csv';
		break;
	case 'pr.php':
		$aLocFile='pr.csv';
		break;
	case 'mn.php':
		$aLocFile='mn.csv';
		break;
	case 'ne.php':
		$aLocFile='ne.csv';
		break;
	case 'il.php':
		$aLocFile='il.csv';
		break;
	case 'ma.php':
		$aLocFile='ma.csv';
		break;
	case 'ok.php':
		$aLocFile='ok.csv';
		break;
	case 'nd.php':
		$aLocFile='nd.csv';
		break;
	case 'sd.php':
		$aLocFile='sd.csv';
		break;
	case 'dc.php':
		$aLocFile='dma.csv';
		break;
	case 'wy.php':
		$aLocFile='wy.csv';
		break;
	case 'al.php':
		$aLocFile='al.csv';
		break;
	case 'nm.php':
		$aLocFile='nm.csv';
		break;
	case 'ia.php':
		$aLocFile='ia.csv';
		break;
	case 'florida.php' :
	default:
		$aLocFile='fl.csv';
	}
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

if($_GET['lang']=='es'){$helpTxt = "Fue Ayudado Con:";}else{$helpTxt = "Got Help With:";}

$thedata = csv_to_array(set_file(), ',');

$totaldat = count($thedata);
shuffle($thedata);

foreach ($thedata as $key => $row) {
    $aName[$key]  = $row['Name'];
	$aSex[$key] = $row['Sex'];
    $aLocation[$key] = $row['Location'];
	$aAmount[$key] = $row['Amount'];
	$aLat[$key] = $row['Latitude'];
	$aLon[$key] = $row['Longitude'];
}

$datlimit;
for ($i = 0; $i <= $totaldat; $i++) {
	if($totaldat < 50){
		$datlimit = $totaldat-1;
	}else{$datlimit = 50;}
}
?>

var theData = {
	'pinLocations':[
	
	<?php 
		for ($i = 0; $i <= $datlimit; $i++) {
			echo "{'name':'".$aName[$i]."', 'ico':'gmap/img/pin".$aSex[$i].".png', 'content':'".$contentOpen .$aName[$i]."</br>".$aLocation[$i]."</br></br>".$helpTxt."</br><span>".$aAmount[$i]."</span>".$contentClose."', 'lat':'".$aLat[$i]."', 'lng':'".$aLon[$i]."' },";
		}
	?>
	
]}