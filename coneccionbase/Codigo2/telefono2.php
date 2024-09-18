
<?php
/*
Codigo:  2 
Parcial: 1
Objetivo: Constructor y Comportamientos
Fecha:   5 de Septiembre del 2024
Autor:   Antonio Aguilar Jimenez
*/

class Telefono  {

    public $color;
    public $modelo;
    public $almacenamiento;
    public $precio;
    public $marca;
    public $estado;
    

    public function __construct($color,$modelo,$almacenamiento,$precio,$marca,$estado)
    {
        $this->color=$color;
        $this->modelo=$modelo;
        $this->almacenamiento=$almacenamiento;
        $this->precio=$precio;
        $this->marca=$marca;
        $this->estado=$estado;
    }
   

    public function encender(){
        if($this->estado){
            echo "El telefono ".$this->marca." Fue encendido "."<br>";
            echo "-----------------------------<br>";
            $this->estado=true;
        }
        else{
            echo "Error, el telefono ya esta encendido<br>";
        }
    }

    public function apagar(){
        if($this->estado){
            echo "El telefono ".$this->marca." Fue apagado "."<br>";
            $this->estado=false;
        }
        else{
            echo "No se puede apagar por que no se encuentra apagado<br>";
        }
    }

    public function caracteristicas(){
        if($this->estado){
            
            echo "Color: ".$this->color."<br>";
            echo "Modelo: ".$this->modelo."<br>";
            echo "Almacenamiento: ".$this->almacenamiento."<br>";
            echo "Precio: ".$this->precio."<br>";
            echo "Marca: ".$this->marca."<br>";
            echo "Estado Encendido<br>";
            echo "-----------------------------<br>";
        }
        else{
            echo "No se puede mostrar el celular esta apagado <br>";
        }
    }
    public function Foto(){
        if($this->almacenamiento >= .1){
            $this->almacenamiento=$this->almacenamiento-.1;
            echo "La Foto guardada <br>";
        }
        else{
            echo "Error no hay espacio en el telefono<br>";
        }
    }

}

?>
