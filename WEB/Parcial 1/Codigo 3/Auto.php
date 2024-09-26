<?php
/*
Codigo      3
Parcial     1   
Objetivo    Creacion de clase
Autor       Gael Emiliano Torres Vazquez
*/




class auto{
public $marca;
public $modelo;
public $año;
public $precio;
public $pasajeros;
public $gasolina;


//Constructor Sirve Para Inicializar los valores


public function __construct($marca,$modelo,$año,$precio,$pasajeros,$gasolina,$estado);

{
    $this->marca=$marca;
    $this->modelo=$modelo;
    $this->año=$año;
    $this->precio=$precio;
    $this->pasajeros=$pasajeros;
    $this->gasolina=$gasolina;
    $this->estado=$estado;

}


//comportamientos

public function encender() {
    if ($this->gasolina){
        echo "El Auto se encendio"."<br>";

    }
    else{
        echo "El auto esta siendo encendido"."<br>";
    }
}


public function apagar()    {
    if($this->gasolina){
        echo "El Auto se Apagado"."<br>";
        $this->gasolina=false;
    }
    else{
        echo "Error, no puedes apagar el Auto ya que se encendio"."<br>";
    }

}


public function consultargasolina(){
    if($this->gasolina){
        $this->gasolina= $this->gasolina -6;
        echo "Este es el porcentaje de tu gaolina: <br>";
    }
}

public function viajecorto(){
    if ($this->estado){
        if($this->gasolina=3){
            $this->gasolina = $this->gasolina -3;
            echo "Viaje Realizado con Exito <br>";
        }
        else{
            echo "Error,no tienes gasolina suficiente <br>";
        }
    }
    else{
        echo "Auto apagado,no puedes realizar el viaje";
    }
}

public function cargargasolina($litros){

    if (!$this->estado){
        $this->gasolina=$this->gasolina+$litros;
    }
    else{
        echo"Apaga el auto para cargar gasolina<br>";
    }
}


public function viajelargo(){
    if($this->gasolina=30){
        $this->gasolina = $this->gasolina -30;
        echo "Viaje Realizado con Exito";
    }
}














public function caracteristicas(){
    if ($this->gasolina){
    echo"marca: ".$this->marca."<br>";
    echo"modelo: ".$this->modelo."<br>";
    echo"año: ".$this->año."<br>";
    echo"precio: ".$this->precio."<br>";
    echo"tipopantalla: ".$this->pasajeros."<br>";
    echo"almacenamiento: ".$this->gasolina."<br>";
    }
    
}

}