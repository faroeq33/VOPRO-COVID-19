<?php
require "../init.php";

use VOPRO\Api as Api;

$countrystats = new Api();


$data = [
    "countries" => $countrystats->getAllCountries()
];

echo $twig->render("searchcountry1.html.twig", $data);

