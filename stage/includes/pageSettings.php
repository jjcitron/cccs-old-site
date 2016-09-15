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

/*Get some info about the page we are on */
	$currentFile = $_SERVER["REQUEST_URI"];
	$parts = Explode('/', $currentFile);
	$currentPage = $parts[count($parts) - 1];
	$directory = $parts[count($parts) - 2];
	
	if(strpos($currentPage, '?')>1){
		$currentPage  = substr($currentPage, 0, strpos($currentPage, '?'));
	}
	//var_dump($location);
	//For local testing
	$fullURL = explode('?', 'http://' .$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
	$currentDir = str_replace($currentPage, '',$fullURL[0] );
?>

<?php
//Get some values from the URL
$submissionurl = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

$ckm_campaign_id = "2856";
$ckm_key = "I0oLhG1Uhzg";
$expire=time()+60*60*24*30;	

	if(isset($_GET['keng'])){
	$ppc_keyword = $_GET['keng'];
	setcookie("ppc_keyword", $ppc_keyword, $expire);
	}
	if(isset($_COOKIE["ppc_keyword"])){
		$ppc_keyword = $_COOKIE["ppc_keyword"];
	}
	else{	$ppc_keyword = '';}

	if(isset($_GET['meng'])){
	$ppc_matchtype = $_GET['meng'];
	setcookie("ppc_matchtype", $ppc_matchtype, $expire);
	}
	if(isset($_COOKIE["ppc_matchtype"])){
		$ppc_matchtype = $_COOKIE["ppc_matchtype"];
	}
	else{	$ppc_matchtype = '';}

	if(isset($_GET['teng'])){
	$ppc_network = $_GET['teng'];
		setcookie("ppc_network", $ppc_network, $expire);
	}
	if(isset($_COOKIE["ppc_network"])){
		$ppc_network = $_COOKIE["ppc_network"];
	}
	else{	$ppc_network = '';}

	if(isset($_GET['peng'])){
	$ppc_placement = $_GET['peng'];
		setcookie("ppc_placement", $ppc_placement, $expire);
	}
	if(isset($_COOKIE["ppc_placement"])){
		$ppc_placement = $_COOKIE["ppc_placement"];
	}
	else{	$ppc_placement = '';}

	if(isset($_GET['geng'])){
	$ppc_adgroup = $_GET['geng'];
		setcookie("ppc_adgroup", $ppc_adgroup, $expire);
	}
	if(isset($_COOKIE["ppc_adgroup"])){
		$ppc_adgroup = $_COOKIE["ppc_adgroup"];
	}
	else{	$ppc_adgroup = '';}

	if(isset($_GET['aeng'])){
	$ppc_adtag = $_GET['aeng'];
		setcookie("ppc_adtag", $ppc_adtag, $expire);
	}
	if(isset($_COOKIE["ppc_adtag"])){
		$ppc_adtag = $_COOKIE["ppc_adtag"];
	}
	else{	$ppc_adtag = '';}


	if(isset($_GET["lang"])){
		$lang =  $_GET["lang"];
		setcookie("lang", $lang, $expire);
		}else{
			if(isset($_COOKIE["lang"])){
				$lang = $_COOKIE["lang"];
				}else{ $lang = 'en'; }
			}
	
	if(isset($_GET["pid"])){
		$partnerid =  $_GET["pid"];
		setcookie("_ai_pid", $partnerid, $expire);
		}else{
			if(isset($_COOKIE["_ai_pid"])){
				$partnerid = $_COOKIE["_ai_pid"];
				}else{	$partnerid = '2300'; }
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

$nums = '{"2582" : "1-866-304-3353",
"2580" : "1-866-367-1452",
"2581" : "1-866-376-1253",
"2584" : "1-866-379-6722",
"2583" : "1-866-339-4113",
"95059" : "1-855-369-2783",
"95050" : "1-855-580-4297",
"95051" : "1-855-580-7853",
"95056" : "1-855-367-7084",
"95054" : "1-855-658-2693",
"95053" : "1-855-641-3028",
"95036" : "1-855-362-7141",
"9145" : "1-855-845-4359",
"9144" : "1-855-821-6588",
"95049" : "1-855-482-6763",
"95038" : "1-855-370-1908",
"95037" : "1-855-458-3448",
"9146" : "1-855-847-9601",
"2387" : "1-855-513-6916",
"2392" : "1-855-471-4720",
"95035" : "1-855-367-0886",
"95058" : "1-855-368-8046",
"95055" : "1-855-672-7408",
"95057" : "1-855-368-4134",
"2483" : "1-866-679-1337",
"2472" : "1-866-449-9120",
"2482" : "1-866-646-1069",
"2484" : "1-866-679-9557",
"2467" : "1-866-267-1568",
"2473" : "1-866-465-2025",
"2474" : "1-866-489-5343",
"2475" : "1-866-506-4182",
"2466" : "1-866-228-2322",
"2479" : "1-866-603-5767",
"2476" : "1-866-515-2416",
"2471" : "1-866-394-2982",
"2478" : "1-866-591-5575",
"2481" : "1-866-614-2058",
"2486" : "1-866-721-3943",
"2477" : "1-866-525-1084",
"2470" : "1-866-350-9043",
"2485" : "1-866-694-3659",
"2480" : "1-866-605-5760",
"95052" : "1-855-634-5576",
"2468" : "1-866-416-3741",
"2469" : "1-866-503-8401",
"9137" : "1-855-369-9271",
"2327" : "1-855-531-9693",
"95002" : "1-855-835-1398",
"2326" : "1-855-646-7829",
"2465" : "1-866-628-1897",
"2463" : "1-866-492-6518",
"9130" : "1-855-234-6617",
"9136" : "1-855-368-7690",
"95001" : "1-855-722-8071",
"9134" : "1-855-367-9951",
"2446" : "1-866-365-2072",
"2447" : "1-866-415-2798",
"2448" : "1-866-415-3345",
"2449" : "1-866-440-3194",
"9133" : "1-855-367-0595",
"2464" : "1-866-626-3204",
"9131" : "1-855-268-3243",
"2350" : "1-855-436-2397",
"9132" : "1-855-351-4236",
"2330" : "1-855-693-0357",
"9127" : "1-855-826-9442",
"9135" : "1-855-368-4153",
"9143" : "1-855-813-0955",
"9140" : "1-855-728-4098",
"2305" : "1-855-366-0481",
"2390" : "1-855-366-1652",
"9139" : "1-855-706-1768",
"9138" : "1-855-369-9735",
"9141" : "1-855-812-3127",
"2304" : "1-855-362-5523",
"9142" : "1-855-812-7936",
"2251" : "1-855-370-0367",
"2550" : "1-855-370-9077",
"95263" : "1-855-300-5531",
"95264" : "1-855-265-8767",
"95265" : "1-855-282-7717",
"95266" : "1-855-294-5849",
"95287":"1-844-456-5446",
"95288":"1-844-457-0349",
"95289":"1-844-663-9230",
"95298":"1-844-212-0973",
"95300":"1-844-660-5775",
"95302":"1-844-340-0995",
"95322":"1-844-262-8347",
"95324":"1-844-567-8431",
"95325":"1-844-661-2893",
"95326":"1-844-208-9396",
"95341":"1-844-667-7469",
"95342":"1-844-661-0866",
"95343":"1-844-276-3596",
"95344":"1-844-661-0860",
"95345":"1-844-211-7787",
"95346":"1-844-223-4252",
"95347":"1-844-660-0782",
"95348":"1-844-240-0702",
"95349":"1-844-242-4062",
"95350":"1-844-242-4063",
"95351":"1-844-607-4463",
"95352":"1-844-842-1221",
"95353":"1-844-841-4406",
"95354":"1-844-841-0399",
"95355":"1-844-227-5349",
"95356":"1-844-790-9874",
"95357":"1-844-205-3106",
"95358":"1-844-685-7494",
"95359":"1-844-208-9402",
"95630":"1-844-685-7489",
"95361":"1-844-662-6134",
"95363":"1-844-840-6841"}';

$nums = utf8_encode($nums);
$json = json_decode($nums); 

if(isset($json->{$partnerid})){
$thePhoneNumber = $json->{$partnerid};
}
?>



