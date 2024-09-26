<?php

class banco{


    public $cuenta;
    public $nombre;
    public $direccion;
    public $telefono;
    public $saldo;
    public $movimientos;
    
    
    
    public function __construct()
    {
        $this->cuenta;
        $this->nombre;
        $this->direccion;
        $this->telefono;

    
    }
    
public function apertura($cu,$nom,$di,$tel){



        if ($saldo >=50000){
            $this->saldo =$saldo;
            $this->movimientos ="cuenta creada con saldo inicial $"  . $saldo;

        }
        else{
            $this->saldo =0;
            echo "No se Puede abrir la cuenta de banco con menos de 5000 de saldo inicial./n";
        }
    }
    }
    
    
public function depositar ($monto)
{
    if ($monto > 0){
        $this->saldo +=$monto;
        $this->movimientos;
        " Deposito de: $" . $monto;
        echo "Deposito Realizado Nuevo Saldo: $" . $this->$saldo ."\n";
    }
    else{
        echo "El Monto debe de ser positivo.\n";
    }
}

public function retirar($monto)






}
?>