<?php 
require_once 'vendor/autoload.php';

use VOPRO\Jsonconversie as Jsonconversie;

$response = Unirest\Request::get("https://covid-193.p.rapidapi.com/" . $input,
	array(
		"X-RapidAPI-Host" => "covid-193.p.rapidapi.com",
		"X-RapidAPI-Key" => "86dff1ac42mshb72e16d1ea5da03p1af417jsnfe3f86abc684"
	)
);



include "response.php";


