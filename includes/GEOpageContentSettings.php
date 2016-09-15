<?php

$location = explode('-', $currentPage);
$location = $location[1];

switch($location){
	
	//case 'florida.php':
	case (preg_match('/florida.*/', $currentPage) ? true : false) :
		default:
		include('pagecontent/local-florida-'.$lang.'.php');
		break;
	//case 'georgia.php':
	case (preg_match('/georgia.*/', $currentPage) ? true : false) :
		include('pagecontent/local-georgia-'.$lang.'.php');
		break;
	//case 'newjersey.php':
	case (preg_match('/newjersey.*/', $currentPage) ? true : false) :
		include('pagecontent/local-newjersey-'.$lang.'.php');
		break;
	//case 'newyork.php':
	case (preg_match('/newyork.*/', $currentPage) ? true : false) :
		include('pagecontent/local-newyork-'.$lang.'.php');
		break;
	//case 'texas.php':
	case (preg_match('/texas.*/', $currentPage) ? true : false) :
		include('pagecontent/local-texas-'.$lang.'.php');
		break;
	//case 'california.php':
	case (preg_match('/california.*/', $currentPage) ? true : false) :
		include('pagecontent/local-california-'.$lang.'.php');
		break;
	//case 'pr.php':
	case (preg_match('/pr.*/', $currentPage) ? true : false) :
		include('pagecontent/local-pr-'.$lang.'.php');
		break;
	//case 'mn.php':
	case (preg_match('/mn.*/', $currentPage) ? true : false) :
		include('pagecontent/local-mn-'.$lang.'.php');
		break;
	//case 'ne.php':
	case (preg_match('/ne.*/', $currentPage) ? true : false) :
		include('pagecontent/local-ne-'.$lang.'.php');
		break;
	//case 'il.php':
	case (preg_match('/il.*/', $currentPage) ? true : false) :
		include('pagecontent/local-il-'.$lang.'.php');
		break;
	//case 'ok.php':
	case (preg_match('/ok.*/', $currentPage) ? true : false) :
		include('pagecontent/local-ok-'.$lang.'.php');
		break;
	//case 'nd.php':
	case (preg_match('/nd.*/', $currentPage) ? true : false) :
		include('pagecontent/local-nd-'.$lang.'.php');
		break;
	//case 'sd.php':
	case (preg_match('/sd.*/', $currentPage) ? true : false) :
		include('pagecontent/local-sd-'.$lang.'.php');
		break;
	//case 'dc.php':
	case (preg_match('/dc.*/', $currentPage) ? true : false) :
		include('pagecontent/local-dc-'.$lang.'.php');
		break;
	//case 'nm.php':
	case (preg_match('/nm.*/', $currentPage) ? true : false) :
		include('pagecontent/local-nm-'.$lang.'.php');
		break;
	//case 'ia.php':
	case (preg_match('/ia.*/', $currentPage) ? true : false) :
		include('pagecontent/local-ia-'.$lang.'.php');
		break;
	//case 'wy.php':
	case (preg_match('/wy.*/', $currentPage) ? true : false) :
		include('pagecontent/local-wy-'.$lang.'.php');
		break;
	//case 'al.php':
	case (preg_match('/al.*/', $currentPage) ? true : false) :
		include('pagecontent/local-al-'.$lang.'.php');
		break;

}

$thankYouPage ='geo_thanks-'.$location;
if($detect->isMobile()){
	$thankYouPage = $thankYouPage.'?mobile';
}

?>