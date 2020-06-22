<?php
require "../init.php";

$data = [
    "response" => $response,
    "input" => $input
];

echo $twig->render("history.html.twig", $data);