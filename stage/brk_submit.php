<?php
	$language = "en";

	//extract data from the post
	extract($_POST);
	
	$url = 'https://leads.berkeleycollege.edu/leadImportTesting.asp';
	
	//Seems to be the only fields required to submit successfully
	$fields = array(
		'firstname' => urlencode($firstname),
		'lastname' => urlencode($lastname),
		'address1' => urlencode($address1),
		'city' => urlencode($city),
		'state' => urlencode($state),
		'phonecell' => urlencode($phonecell),
		'phone' => urlencode($phone),
		'email' =>  urlencode($email),
		'zip' => urlencode($zip),
		'password' => urlencode($password), //Issue? - Passwords like testleadonly999, seem to work also.
		);
		
$fields_string = '';

//url-ify the data for the POST
foreach($fields as $key=>$value){
	$fields_string .= $key.'='.$value.'&';
	}
	
rtrim($fields_string, '&');

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); //Important - returns the raw output ('SUCCESS: or FAILURE:...')
    curl_setopt($curl, CURLOPT_POST, count($fields));
    curl_setopt($curl, CURLOPT_POSTFIELDS, $fields_string);
	
		

    $result = curl_exec ($curl);
	
	if ($result === "SUCCESS: ") {
		//var_dump('TRUE');
		//var_dump($result);
		header("Location: http://cccs.aimediagroup.com/stage/brk_thanks.php");
		}
		else{
			//var_dump('FALSE');
			//var_dump($result);
			header("Location: http://cccs.aimediagroup.com/stage/brk_test.php");
			}
	
	//var_dump($fields_string);
	//var_dump($result);
	
    curl_close ($curl);
	exit;
?>