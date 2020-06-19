<?php
require "../init.php";

//$country = $_POST['countries'];

$input = $_POST['country'];

$input = "history?day=2020-05-29&country=" . $input;// nog wijzigen voor history

$response = Unirest\Request::get("https://covid-193.p.rapidapi.com/" . $input,
	array(
		"X-RapidAPI-Host" => "covid-193.p.rapidapi.com",
		"X-RapidAPI-Key" => "86dff1ac42mshb72e16d1ea5da03p1af417jsnfe3f86abc684"
	)
);

echo "<pre>";
print_r($response);
echo "</pre>";

$data = [
    "response" => $response,
    "input" => $input,
];


echo $twig->render("searchcountry2.html.twig", $data);