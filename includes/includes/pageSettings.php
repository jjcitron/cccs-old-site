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
//get some values from the URL
$submissionurl = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

$ckm_campaign_id = "2856";
$ckm_key = "I0oLhG1Uhzg";

	if(isset($_GET['keng'])){
	$ppc_keyword = $_GET['keng'];
	}
	else{$ppc_keyword = '';}
	if(isset($_GET['meng'])){
	$ppc_matchtype = $_GET['meng'];
	}
	else{$ppc_matchtype = '';}

	if(isset($_GET['teng'])){
	$ppc_network = $_GET['teng'];
	}
	else{$ppc_network = '';}

	if(isset($_GET['peng'])){
	$ppc_placement = $_GET['peng'];
	}
	else{$ppc_placement = '';}

	if(isset($_GET['geng'])){
	$ppc_adgroup = $_GET['geng'];
	}
	else{$ppc_adgroup = '';}

	if(isset($_GET['aeng'])){
	$ppc_adtag = $_GET['aeng'];
	}
	else{$ppc_adtag = '';}

$expire=time()+60*60*24*30;	
	
if(isset($_GET["pid"])){
	
	$partnerid =  $_GET["pid"];
	setcookie("_ai_pid", $partnerid, $expire);
	}
else{
	if(isset($_COOKIE["_ai_pid"])){
		$partnerid = $_COOKIE["_ai_pid"];
	}
	else{	$partnerid = '2300';}
}
	

	//do this in a json
	/*
	switch($partnerid){
	
	case '2302':
	$phonenumber = '855-359-8273';
	break;
	case '2303':
	$phonenumber = '855-359-8167';
	break;
	
*/	

$nums = '{"2300" : "855-333-9811",
"2301" : "855-358-7744",
"2302" : "855-359-8273",
"2303" : "855-359-8167",
"2304" : "855-362-5523",
"2305" : "855-366-0481",
"2306" : "855-366-1623",
"2307" : "855-366-1639",
"2308" : "855-366-1652",
"2309" : "855-366-1694",
"2323" : "855-513-6916",
"2387" : "855-227-9856",
"2388" : "855-272-1602",
"2389" : "855-330-8495",
"2390" : "855-337-1171",
"2391" : " 855-338-5279",
"2324" : "855-416-8393",
"2325" : "855-531-9693",
"2326" : "855-646-7829",
"2327" : "855-653-0509",
"2328" : "855-668-9916",
"2329" : "855-674-9458",
"2330" : "855-693-0357",
"2331" : "855-751-8336",
"2350" : "855-372-9601",
"2392" : "855-471-4720",
"2393" : "855-535-5088",
"2394" : "855-550-6778",
"2395" : "855-580-5230",
"2396" : "855-580-6959",
"2332" : "855-758-2006",
"2333" : "855-782-2745",
"2350" : "855-372-9601 ",
"2351" : "877-838-0163",
"2358" : "877-224-8601",
"2359" : "877-633-9030",
"2360" : "877-657-5899",
"2310" : "855-366-8641",
"2311" : "855-387-0136"}';


$nums = utf8_encode($nums);
$json = json_decode($nums); 

if(isset($json->{$partnerid})){
$thePhoneNumber = $json->{$partnerid};

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