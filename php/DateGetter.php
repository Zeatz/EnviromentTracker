<?php
$getParameter = $_GET["date"];
header('Content-type: application/json');
$uri ="http://eviromentwebservice.azurewebsites.net/api/date/" . $getParameter;
$jsondata = file_get_contents($uri);
echo json_encode($jsondata);
?>




