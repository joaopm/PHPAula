<?php
    include './Celular.php';

    $iphone6 = new Celular("iPhone 6", "Apple", "5Pol", "32GB", "4GB", "R$ 2000");
    $galaxyS7 = new Celular("Galaxy S7", "Samsung", "5Pol", "32GB", "4GB", "R$ 2000");
    $motoX = new Celular("Moto X", "Motorola", "5Pol", "32GB", "4GB", "R$ 2000");

    $iphone6 -> ImprimeDados();
    $galaxyS7 ->ImprimeDados();
    $motoX ->ImprimeDados();
 ?>
