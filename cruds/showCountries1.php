<?php
require "../init.php";

use VOPRO\Api as Api;

$countries = new Api();
$countries->getAllCountries();

$data = [
    "countries" => $countries->getAllCountries()
];

echo $twig->render("showcountries.html.twig", $data);
