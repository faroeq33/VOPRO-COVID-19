<?php 
require_once 'vendor/autoload.php';

Use VOPRO\Jsonconversie as Jsonconversie;

echo "<h1>" . $input . "</h1>";

$response = Unirest\Request::get("https://covid-193.p.rapidapi.com/history?day=2020-04-05&country=" . $input,
	array(
		"X-RapidAPI-Host" => "covid-193.p.rapidapi.com",
		"X-RapidAPI-Key" => "86dff1ac42mshb72e16d1ea5da03p1af417jsnfe3f86abc684"
	)
);

echo "<pre>";
print_r($response);
echo "</pre>";


// $curl = curl_init();

// curl_setopt_array($curl, array(
// 	CURLOPT_URL => "https://covid-193.p.rapidapi.com/" . $input,
// 	CURLOPT_RETURNTRANSFER => true,
// 	CURLOPT_FOLLOWLOCATION => true,
// 	CURLOPT_ENCODING => "",
// 	CURLOPT_MAXREDIRS => 10,
// 	CURLOPT_TIMEOUT => 30,
// 	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
// 	CURLOPT_CUSTOMREQUEST => "GET",
// 	CURLOPT_HTTPHEADER => array(
// 		"x-rapidapi-host: covid-193.p.rapidapi.com",
// 		"x-rapidapi-key: 86dff1ac42mshb72e16d1ea5da03p1af417jsnfe3f86abc684"
// 	),
// ));

// $response = curl_exec($curl);
// $err = curl_error($curl);

// curl_close($curl);


