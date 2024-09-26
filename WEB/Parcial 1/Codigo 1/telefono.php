<?php
/*
Codigo      1
Parcial     1   
Objetivo    Creacion de clse simple
Autor       Gael Emiliano Torres Vazquez
*/

class telefono{
public $color;
public $modelo;
public $almacenamiento;
public $marca;
public $precio;

public function encender(){
    echo"El telefono se inicio";
}
public function apagar(){
    echo"El telefono se apago";
}

public function caracteristicas(){
    echo"----------------<br>";
    echo"marca: ".$this->marca."<br>";
    echo"modelo: ".$this->modelo."<br>";
    echo"almacenamiento: ".$this->almacenamiento."<br>";
    echo"clor: ".$this->color."<br>";
    echo"precio: ".$this->precio."<br>";
}
}