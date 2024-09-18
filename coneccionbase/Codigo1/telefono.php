<?php

/*
Codigo 1
Parcial 1
Objetivo: la creacion de Una clase Basica
Fecha 30 de agosto 2024
Autor: Antonio Aguilar Jimenez
*/

class telefono{

    public $color;
    public $almacenamiento;
    public $marca;
    public $modelo;
    public $precio;

    function encender(){
        echo "El telefono esta encendido";
    }
    function apagar(){
        echo "El telefono se apago";

    }
    public function caracteristicas(){
        echo "------------------"."<br>";
        echo "Marca: ".$this->marca."<br>";
        echo "Modelo: ".$this->modelo."<br>";
        echo "Color: ".$this->color."<br>";
        echo "Precio: ".$this->precio."<br>";
        echo "------------------"."<br>";

    }
}
?>