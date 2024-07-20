<?php
function imprimir(){
    $mensagem = "Oi";
    echo $GLOBALS ["mensagem"];
    echo $mensagem;
}
$mensagem = "mensagem 1";
imprimir();
//SAIDA: mensagem 1Oi
?>