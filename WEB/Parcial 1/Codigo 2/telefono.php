<?php
/*
Codigo      2
Parcial     1   
Objetivo    Creacion de clase simple
Autor       Gael Emiliano Torres Vazquez
*/




class telefono{
public $color;
public $modelo;
public $almacenamiento;
public $marca;
public $precio;
public $estado=false;
public $tipopantalla;


//Constructor Sirve Para Inicializar los valores


public function __construct($tipopantalla,$color,$marca,$modelo,$almacenamiento,$precio,$estado)

{
    $this->color=$color;
    $this->marca=$marca;
    $this->modelo=$modelo;
    $this->tipopantalla=$tipopantalla;
    $this->almacenamiento=$almacenamiento;
    $this->precio=$precio;
    $this->estado=false; //apagado true:encenddo
}


//comportamientos

public function encender() {
    if ($this->estado){
        echo "el telefono no se puede encender porque ya fue encendido"."<br>";

    }
    else{
        echo "El telefono esta siendo encendido"."<br>";
    }
}


public function apagar()    {
    if($this->estado){
        echo "Telefono Apagado"."<br>";
        $this->estado=false;
    }
    else{
        echo "Error, no puedes apagar el telefono ya que se encendio"."<br>";
    }

}

public function caracteristicas(){
    if ($this->estado){
    echo"marca: ".$this->marca."<br>";
    echo"modelo: ".$this->modelo."<br>";
    echo"color: ".$this->color."<br>";
    echo"precio: ".$this->precio."<br>";
    echo"tipopantalla: ".$this->tipopantalla."<br>";
    echo"almacenamiento: ".$this->almacenamiento."<br>";
    }
    
}

}