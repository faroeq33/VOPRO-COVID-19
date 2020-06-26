<?php
require "../init.php";

use VOPRO\Api as Api;

$countrystats = new Api();

$data = [
    "searchcountry1" => "searchcountry1",
    "pageTitle" => "searchcountry1",
    "countries" => $countrystats->getAllCountries()
];

echo $twig->render("searchcountry1.html.twig", $data);

