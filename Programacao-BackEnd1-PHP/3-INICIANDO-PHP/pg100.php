<?php
     $carros = array("Focus", "Fusca", "Fiesta", "Ka", "Belina");
     foreach($carros as $carro){
        if($carro == "Fusca"){
            continue;
        }
        if($carro == "Ka"){
        break;
        }
        echo $carro;
     } 
     //SAÍDA: FocusFiesta

?>