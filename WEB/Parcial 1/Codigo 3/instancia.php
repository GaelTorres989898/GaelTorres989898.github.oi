<?php

require_once("Auto.php");

$Pagani = new Auto("pagani","hatchback",2024,7000000,5,40);

$Pagani->Cargargasolina(20);
$pagani->consultargaslina();
$Pagani->Caracteristicas();
$Pagani->Encender();
$Pagani->Encender();

$Pagani->caracteristicas();
$Pagani->viajecorto();
$Pagani->viajelargo();
$pagani->Apagar();
$Pagani->Cargargasolina(3);
$Pagani->Encender();



$pagani->viajelargo();
$pagani->Consultargasolina();
$pagani->Apagar();
$pagani->Apagar();


?>