<?php
require "../init.php";

$input = $_POST['country'];

$input = "history?day=2020-06-19&country=" . $input;// nog wijzigen voor history

$response = Unirest\Request::get("https://covid-193.p.rapidapi.com/" . $input,
	array(
		"X-RapidAPI-Host" => "covid-193.p.rapidapi.com",
		"X-RapidAPI-Key" => "86dff1ac42mshb72e16d1ea5da03p1af417jsnfe3f86abc684"
	)
);

$country = (array) $response->body->response[0];

$data = [
    "country" => $country,
    "input" => $input,
];


echo $twig->render("searchcountry2.html.twig", $data);
