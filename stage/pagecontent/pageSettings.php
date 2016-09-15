<?php
function setParams($p){
	if(isset($_COOKIE[$p ."Cookie"])&&!(isset($_GET[$p]))){
	$v = $_COOKIE[$p ."Cookie"];
	}
	else{
	if(isset($_GET[$p])){$v = $_GET[$p];setcookie($p ."Cookie", $v);} else{$v=0;}
	}
	return $v;
}
/*get some info about the page we are on */
$currentFile = $_SERVER["REQUEST_URI"];
$parts = Explode('/', $currentFile);
$currentPage = $parts[count($parts) - 1];
$directory = $parts[count($parts) - 2];
if(strpos($currentPage, '?')>1){
$currentPage  = substr($currentPage, 0, strpos($currentPage, '?'));
}

?>
<?php
switch($currentPage){

case 'consolidatecredit.php':
default:
include('pagecontent/consolidatecredit.php');
break;
case 'thanks.php':
include('pagecontent/thanks.php');
break;
case 'creditcounseling.php':
include('pagecontent/creditcounseling.php');
break;
case 'creditcard-debtconsolidation.php':
include('pagecontent/creditcard-debtconsolidation.php');
break;
case 'debtconsolidation.php':
include('pagecontent/debtconsolidation.php');
break;
case 'helppaybills.php':
include('pagecontent/helppaybills.php');
break;
case 'helppaycreditcard.php':
include('pagecontent/helppaycreditcard.php');
break;
case 'debtconsolidationprogram.php':
include('pagecontent/debtconsolidationprogram.php');
break;
}
?>