<?php
require_once('telefono.php');



$huawei=new telefono("oled","Gold","Huawei","Nova 9",128,5000,false);
$huawei->encender();
$huawei->encender();
$huawei->marca="huawei";
$huawei->color="silver";
$huawei->modelo="Nova 9";
$huawei->almacenamiento="128 gb";
$huawei->precio="5000";
$huawei->encender();
$huawei->caracteristicas();


?>