<?php
require_once('telefono.php');



$huawei=new telefono();
$huawei->marca="huawei";
$huawei->color="silver";
$huawei->modelo="Nova";
$huawei->almacenamiento="128 gb";
$huawei->precio="5000";

$huawei->caracteristicas();

$iphone=new telefono();
$iphone->marca="iphone";
$iphone->color="white";
$iphone->modelo="iphone 15";
$iphone->almacenamiento="1tb ";
$iphone->precio="350000";

$iphone->caracteristicas();

$redmi=new telefono();
$redmi->color="white";
$redmi->modelo="iphone 15";
$redmi->almacenamiento="1tb ";
$redmi->precio="350000";

$redmi->caracteristicas();

?>

