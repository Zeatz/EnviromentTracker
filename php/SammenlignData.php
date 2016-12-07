<?php
require_once '../vendor/autoload.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../');
$twig = new Twig_Environment($loader, array(
'auto_reload' => true
));
$template = $twig->loadTemplate('SamData.html.twig');
echo $template->render(array());
?>