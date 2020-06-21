<?php


$projectfolder = ''; //<- insert absolute path

/* loader settings */
$loader = new \Twig\Loader\FilesystemLoader('view', $projectfolder);

$twig = new \Twig\Environment($loader, [
    'debug' => true
]);

$twig->addExtension(new \Twig\Extension\DebugExtension());
/* loader settings  */

/*globals
CONST ROOT = 'http://localhost/VOPRO-COVID-19/';
$twig->addGlobal('root', ROOT);
*/


/* functions 
$cssPathFunction = new \Twig\TwigFunction('css', function ( $nameStylesheet ) {
    return ROOT . "/css/" . $nameStylesheet;
});
$twig->addFunction($cssPathFunction);
*/

