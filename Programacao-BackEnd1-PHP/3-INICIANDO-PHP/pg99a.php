<?php
    $carros = array(
        "Ford" => array(
            "Focus", "Fiesta", "Ka"
        ),
        "vw" => array(
            "Fusca"
        )
    );
    
    foreach ($carros as $marca => $carros){
        echo "Marca: $marca - ";
        
        foreach ($carros as $carro){
            echo $carro;
        }
        echo "\n";
    }

    //SAIDA: Marca: Ford - FocusFiestaKa
    //Marca: vw - Fusca
?>