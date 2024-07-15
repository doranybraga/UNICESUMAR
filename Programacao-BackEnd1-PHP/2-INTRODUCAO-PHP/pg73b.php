<?php
    $valor1 = 10;
    $valor2 = 20;
    $valor1 += 10;
    $valor3 = &$valor1;
    $valor3 = + 50;
    var_dump($valor1);
    var_dump($valor2);
    var_dump($valor3);


    /*CÓDIGO COM ERRO NA LINHA 6

    Explicação das correções:

    Erro na linha 6 : O operador += é utilizado para atribuir à variável da esquerda o valor da soma entre essa variável e o
    valor à direita. No entanto, nesse caso, a variável $valor3 não possui um valor inicial, o que torna a operação
    inválida.

    Correção: A correção consiste em utilizar o operador de adição (+) ao invés de +=. Isso soma 50 ao valor de $valor3, que
    por sua vez é uma referência para $valor1. Dessa forma, ambas as variáveis passam a ter o valor 60.

    Observações:

    O uso de $valor3 = &$valor1; cria uma referência entre as variáveis $valor3 e $valor1. Isso significa que qualquer
    alteração feita em uma das variáveis será refletida na outra.
    As funções var_dump() exibem o valor e o tipo das variáveis na tela.
    Com essas correções, o código agora funciona como esperado, atribuindo o valor 60 às variáveis $valor1 e $valor3,
    enquanto $valor2 permanece com o valor original de 20. */
?>