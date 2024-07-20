<?php
    $carros = array(
        array("modelo"=>"Focus", "fabricacao"=>"2013"),
        array("modelo"=>"Fiesta", "fabricacao"=>"2015"),
        array("modelo"=>"Fusca", "fabricacao"=>"1982"),
    );
    
    foreach ($carros as $carro){
        echo "Modelo  ".$carro["modelo"];
        echo " e ano  ". $carro["fabricacao"];
        echo "\n";
    }
    /*  SAÍDA:
        Modelo  Focus e ano  2013
        Modelo  Fiesta e ano  2015
        Modelo  Fusca e ano  1982 */
?>