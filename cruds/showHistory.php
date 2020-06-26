<?php
require "../init.php";

$data = [
    "showhistory"   => "showhistory",
    "pageTitle" => "showcountries1"
];

echo $twig->render("history.html.twig", $data);