<?php
require "../init.php";

$input = "statistics";

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


echo $twig->render("stats.html.twig", $data);