<?php 
require "init.php";

$data = [
    "home" => "home"
];

echo $twig->render("core.html.twig", $data);