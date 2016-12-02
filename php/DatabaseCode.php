<?php
$uri ="http://eviromentwebservice.azurewebsites.net/api/date/2016-11-30";
$jsondata = file_get_contents($uri);

$convertToAssociativeArray = true;
$temp = json_decode($jsondata, true);

require_once '../vendor/autoload.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../');
$twig = new Twig_Environment($loader, array(
    'auto_reload' => true
));
$template = $twig->loadTemplate('index.html.twig');
echo $template->render(array('results' => $temp));
?>

