<?php
require "../init.php";

$country = $_POST['countries'];


$input = "history?day=2020-06-19&country=" . $country;// nog wijzigen voor history

$response = Unirest\Request::get("https://covid-193.p.rapidapi.com/" . $input,
	array(
		"X-RapidAPI-Host" => "covid-193.p.rapidapi.com",
		"X-RapidAPI-Key" => "86dff1ac42mshb72e16d1ea5da03p1af417jsnfe3f86abc684"
	)
);

$data = [
    "response" => $response,
    "input" => $input
];

echo "<pre>";
print_r($response);
echo "</pre>";

echo $twig->render("history.html.twig", $data);
