<?php
require "../init.php";

use VOPRO\Api as Api;

$countries = new Api();

$stats = $countries->getStatsFromCountry($_GET['country']);

// In order to avoid array to string error
$statsCopy = [];
foreach ($stats as $key => $value){
    if (!is_array($value) ){
        $statsCopy[$key] = $value;
    }
}

$data = [
    "stats" => $statsCopy,
    "cases" => $stats["cases"],
    "deaths" => $stats["deaths"],
    "tests" => $stats["tests"]

];

echo $twig->render("showcountrystats.html.twig", $data);