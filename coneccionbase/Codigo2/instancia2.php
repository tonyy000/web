<link rel="stylesheet" href="../css/todo.css">
<?php
require_once('Telefono2.php');
$phone=new Telefono("WHITE","Iphone 15",.5,20000,"Apple",true);
    $phone->encender();
    $phone->caracteristicas();
    $phone->Foto();
    $phone->caracteristicas();
    $phone->apagar();
?>
<center><a href="../../Index/Index.php"><img src="../../Index/img/CasaIndex.jpeg" alt="5px"></a></center>
