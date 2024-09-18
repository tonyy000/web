<?php

/*
    Codigo:    3.1
    Objetivo:  Repaso de aprendizaje en clase
    Autor:     Antonio Aguilar Jimenez
    Fecha:     12/09/2024
*/

class Auto {
    public $marca;
    public $modelo;
    public $precio;
    public $año;
    public $pasajeros;
    public $gasolina;
    public $estado;
    public $kilometraje;
    public $costo = 0;
    public $consumoGas;

    public function __construct($marca, $modelo, $precio, $año, $pasajeros, $gasolina, $estado) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->precio = $precio;
        $this->año = $año;
        $this->pasajeros = $pasajeros;
        $this->gasolina = $gasolina;
        $this->estado = $estado;
        $this->kilometraje = 0;
    }

    public function encender() {
        if (!$this->estado) {
            echo "<p>El " . $this->marca . " está encendido.</p>";
            $this->estado = true;
        } else {
            echo "<p>Error: El " . $this->marca . " ya está encendido.</p>";
        }
    }

    public function apagar() {
        if ($this->estado) {
            echo "<p>El " . $this->marca . " se ha apagado.</p>";
            $this->estado = false;
        } else {
            echo "<p>Error: El " . $this->marca . " ya está apagado.</p>";
        }
    }

    public function caracteristicas() {
        if ($this->estado) {
            
            echo "Características del Auto<br>";
            echo "---------------------------<br>";
            echo "Marca: " . $this->marca . "<br>";
            echo "Modelo:" . $this->modelo . "<br>";
            echo "Precio: " . $this->precio . "<br>";
            echo "Año:" . $this->año . "<br>";
            echo "Pasajeros:" . $this->pasajeros . "<br>";
            echo "Gasolina:" . $this->gasolina . " litros<br>";
            echo "Kilometraje:" . $this->kilometraje . " km<br>";
            echo "----------------------------<br>";
        } else {
            echo "<p>El auto está apagado.</p>";
        }
    }

    public function viajelar() {
        if ($this->estado) {
            if ($this->gasolina >= 30) {
                $this->gasolina -= 30;
                $this->kilometraje += 300; 
                echo "<p>Se realizó el viaje largo.</p>";
                echo "<p>La gasolina que queda es: " . $this->gasolina . " litros.</p>";
                echo "<p>Kilometraje total: " . $this->kilometraje . " km.</p>";
            } else {
                echo "<p>No hay gasolina suficiente.</p>";
            }
        } else {
            echo "<p>El auto está apagado.</p>";
        }
    }

    public function viajecor() {
        if ($this->estado) {
            if ($this->gasolina >= 5) {
                $this->gasolina -= 5;
                $this->kilometraje += 50; 
                echo "<p>Se realizó el viaje corto.</p>";
                echo "<p>La gasolina que queda es: " . $this->gasolina . " litros.</p>";
                echo "<p>Kilometraje total: " . $this->kilometraje . " km.</p>";
            } else {
                echo "<p>No hay gasolina suficiente.</p>";
            }
        } else {
            echo "<p>El auto está apagado.</p>";
        }
    }

    public function viajelibre($km) {
        $consumoGas = $km / 10;

        if ($this->estado) {
            if ($this->gasolina >= $consumoGas) {
                $this->gasolina -= $consumoGas;
                $this->kilometraje += $km;

                if ($km <= 10) {
                    $this->costo = 50;
                } elseif ($km <= 20) {
                    $this->costo = 100;
                } else {
                    $this->costo = 150;
                }

                echo "<p>Se realizó el viaje de " . $km . " km.</p>";
                echo "<p>La gasolina que queda es: " . $this->gasolina . " litros.</p>";
                echo "<p>Kilometraje total: " . $this->kilometraje . " km.</p>";
                echo "<p>Costo del viaje: $" . $this->costo . "</p>";
            } else {
                echo "<p>No cuentas con suficiente gasolina.</p>";
            }
        } else {
            echo "<p>El auto está apagado.</p>";
        }
    }
    public function calcularKilometrajePosible() {
        if ($this->estado) {
            $kmPorLitro = 10; 
            $kilometrajePosible = $this->gasolina * $kmPorLitro;
            echo "<br>Con " . $this->gasolina . " litros de gasolina, el kilometraje posible es de: " . $kilometrajePosible . " km.";
        } else {
            echo "<br>El auto está apagado.";
        }
    }

   
    public function tanqueLleno() {
        if ($this->estado) {
            $capacidadMaxima = 50;
            if ($this->gasolina >= $capacidadMaxima) {
                echo "<br>El tanque está lleno.";
            } else {
                echo "<br>El tanque no está lleno. La gasolina actual es: " . $this->gasolina . " litros.";
            }
        } else {
            echo "<br>El auto está apagado.";
        }
    }
}
?>