<?php
	$language = "en";
	
	//extract data from the post
	extract($_POST);
	
	$url = 'https://leads.berkeleycollege.edu/leadImportTesting.asp';
	
	$fields = array(
		'firstname' => 'joe',
		'lastname' => 'shmoee',
		'address1' => '123test',
		'city' => 'newyork',
		'state' => 'ny',
		'phonecell' => '2125552121',
		'phone' => '2125555555',
		'email' =>  'test@mail.com',
		'zip' => '10018',
		'password' => 'testleadonly',
		);
		
$fields_string = '';

//url-ify the data for the POST
foreach($fields as $key=>$value){
	$fields_string .= $key.'='.$value.'&';
	}
	
rtrim($fields_string, '&');

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, count($fields));
    curl_setopt($curl, CURLOPT_POSTFIELDS, $fields_string);
	
		

    $result = curl_exec ($curl);
	
	if ($result === TRUE) {
		echo "cURL Error: " . curl_error($curl);
 
}

	var_dump($fields_string);
	
	var_dump($result);
	
    curl_close ($curl);
	exit;
?>