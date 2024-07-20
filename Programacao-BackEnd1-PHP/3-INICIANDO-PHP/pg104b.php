<?php
    $categoria = $_GET["id"];
    
    switch ($categoria){
        case "TV":
            echo "Destaques: LG, TCL, Philco";
            break;
        case "FOGAO":
            echo "Destaques: Arno, Dako";
            break;
        case"CHUVEIRO":
            echo "Destaques: Lorenzetti, Bella Ducha";
            break;
        default:
            echo "Categoria não encontrada";
            break;
        
    }
    /*php /tmp/vke48iSaxJ.php

Warning: Undefined array key "id" in /tmp/vke48iSaxJ.php on line 2
Categoria não encontrada */
?>