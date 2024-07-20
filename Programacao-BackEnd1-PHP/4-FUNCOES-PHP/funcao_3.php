<?php
function imprimir_mensagem($mensagem, $saudacao = "Bom dia"){
	$texto = $saudacao. ".";
	$texto .= $mensagem;
	return $texto;
}
echo imprimir_mensagem ("Seja Bem-vindo!");
//retorno: Bom dia. Seja Bem-vindo!

echo imprimir_mensagem ("Opa!","Boa noite");
//Retorno: Boa noite. Opa!

echo imprimir_mensagem();
//erro: pois o primeiro parâmetro é obrigatório

?>