<?php
/*
    Codigo:    3
    Objetivo:  Repaso de aprendizaje en clase
    Autor:     Antonio Aguilar Jimenez
    Fecha:     09/09/2024
*/

class auto{
    public $marca;
    public $modelo;
    public $precio;
    public $año;
    public $pasajeros;
    public $gasolina;
    public $estado;



public function __construct($marca, $modelo, $precio, $año, $pasajeros, $gasolina, $estado){
    $this->marca=$marca;
    $this->modelo=$modelo;
    $this->precio=$precio;
    $this->año=$año;
    $this->pasajeros=$pasajeros;
    $this->gasolina=$gasolina;
    $this->estado=$estado;


}

public function encender(){
    if( !$this->estado){
    echo "<p>la ".$this->marca." esta encendido</p>";
    $this->estado=true;
    }else{
    echo "<p> Error la ". $this->marca ." ya está encendido</p>";
    }
}

public function apagar(){
    if($this->estado){
    echo "<p>la ".$this->marca." se ha apagado</p>";
    $this->estado=false;
        
    }else{
    echo "<p>Error la ". $this->marca ." ya está apagado</p>";
        }
    }

public function caracteristicas(){
    if($this->estado){
    echo "---------------<br>";
    echo "Marca: ". $this->marca."<br>";
    echo "Modelo: ". $this->modelo."<br>";
    echo "Precio: ". $this->precio."<br>"; 
    echo "Año: ". $this->año."<br>";
    echo "Pasajeros:  ". $this->pasajeros."<br>";
    echo "Gasolina:  ". $this->gasolina."<br>";
    echo "--------------<br>";
    }
    else{
    echo "<br>El auto esta apagado";
    }
}

public function viajelar(){
    if($this->estado){
    if($this->gasolina>=30){
    echo "<br>Se realizo el viaje largo";
    $this->gasolina=$this->gasolina -30;
    echo "<br>La gasolina que queda es:  ". $this->gasolina."<br>";
     }else{
    echo "<br>No hay gasolina ya";
    }
    }else{
    echo "<br>El auto esta apagado";
    }

}

public function viajecor(){
    if($this->estado){
    if($this->gasolina>=5){
    echo "<br>Se realizo el viaje corto";
    $this->gasolina=$this->gasolina -5;
    echo "<br>La gasolina que queda es:  ". $this->gasolina."<br>";
    }else{
    echo "<br>No hay gasolina suficiente";
    }
    }else{
    echo "<br>El auto esta apagado";
    }
}

}
?>
