<?php


$projectfolder = ''; //<- insert absolute path

/* loader settings */
$loader = new \Twig\Loader\FilesystemLoader('view', "D:/XAMPP/htdocs/Projecten/VOPRO-COVID-19");

$twig = new \Twig\Environment($loader, [
    'debug' => true
]);

$twig->addExtension(new \Twig\Extension\DebugExtension());
/* loader settings  */

/* functions 
$cssPathFunction = new \Twig\TwigFunction('css', function ( $nameStylesheet ) {
    return ROOT . "/css/" . $nameStylesheet;
});
$twig->addFunction($cssPathFunction);
*/

