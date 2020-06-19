<?php



/* loader settings */
$loader = new \Twig\Loader\FilesystemLoader('view', "D:/XAMPP/htdocs/Projecten/VOPRO-COVID-19");

$twig = new \Twig\Environment($loader, [
    'debug' => true
]);

$twig->addExtension(new \Twig\Extension\DebugExtension());
/* loader settings  */

//globals
CONST ROOT = 'http://localhost/Projecten/VOPRO-COVID-19/';
$twig->addGlobal('root', ROOT);



/* functions*/
$cssPathFunction = new \Twig\TwigFunction('css', function ( $nameStylesheet ) {
    return $projectfolder . "/css/" . $nameStylesheet;
});
$twig->addFunction($cssPathFunction);

$imgPathFunction = new \Twig\TwigFunction('img', function ( $nameStylesheet ) {
    return $projectfolder . "/assets/css/" . $nameStylesheet;
});
$twig->addFunction($imgPathFunction);
/* functions */
