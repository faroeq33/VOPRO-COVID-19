<?php 
require "init.php";

$data = [
    "home" => "home"
];

echo $twig->render("home.html.twig", $data);