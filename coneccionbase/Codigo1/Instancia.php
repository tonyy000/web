<?php

require_once('telefono.php');

$iphone = new telefono();

$iphone->marca ="apple"; 
$iphone->modelo ="15 pro max";
$iphone->almacenamiento ="1 tb"; 
$iphone->color ="titanio";
$iphone->precio ="30000";
$iphone->caracteristicas();

$huawei = new telefono();
$huawei->marca = "huawei"; 
$huawei->modelo = "nova" ;
$huawei->almacenamiento = "128 Gb";
$huawei->color = "silver";
$huawei->precio = "20000";
$huawei->caracteristicas();

$redmi = new telefono();
$redmi->marca = "redmi."; 
$redmi->modelo = "redmi note 12";
$redmi->almacenamiento = "128 Gb";
$redmi->color = "blue";
$redmi->precio = "15000";
$redmi->caracteristicas();

$samsung = new telefono();
$samsung->marca = "Samsung."; 
$samsung->modelo = "samsung note 12";
$samsung->almacenamiento = "128 Gb";
$samsung->color = "clack";
$samsung->precio = "15000";
$samsung->caracteristicas();
?>
<center><a href="../../Index/Index.php"><img src="../../Index/img/CasaIndex.jpeg" alt="5px"></a></center>