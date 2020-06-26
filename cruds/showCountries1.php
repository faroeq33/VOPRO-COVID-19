<?php
require "../init.php";

use VOPRO\Api as Api;

$countries = new Api();
$countries->getAllCountries();

$data = [
    "showcountries1" => "showcountries1",
    "pageTitle" => "showcountries1",
    "countries" => $countries->getAllCountries()
];

echo $twig->render("showcountries1.html.twig", $data);
