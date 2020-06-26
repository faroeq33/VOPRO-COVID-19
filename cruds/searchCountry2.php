<?php
require "../init.php";

use VOPRO\Api as Api;

$country = new Api();
$countryFormValue = $_POST['country'];

$stats = $country->getStatsFromCountry( $countryFormValue );

// In order to avoid array to string error, it extracts first level of the array
$statsCopy = [];
foreach ($stats as $key => $value){
    if (!is_array($value) ){
        $statsCopy[$key] = $value;
    }
}

$data = [
    "country" => $countryFormValue,
    "stats" => $statsCopy,// To print first level of array
    "cases" => $stats["cases"],
    "deaths" => $stats["deaths"],
    "tests" => $stats["tests"]

];

echo $twig->render("showcountries2.html.twig", $data);