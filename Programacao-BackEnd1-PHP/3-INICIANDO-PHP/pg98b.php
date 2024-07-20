<?php
    $carros = array ("Focus","Fiesta"," Ka");
    
    foreach($carros as $indice => $carro){
        echo $indice;
        echo":";
        echo $carro;
        echo "";
    }
    //SAÍDA: 0:Focus1:Fiesta2: Ka
?>