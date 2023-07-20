<?php

/*Funções:
    strlen()- quantidadede caracteres;
    substr(<str>,<indice>,<len>)- retorna um fragmento da string; 
    strtoupper(<str>)- converte o texto para maiúsculas;
    str_replace(“textoOriginal“,“textoNovo “,variável)– substitui os caracteres numa string.
    array_merge(array $array1[,array $...]) — combina um ou mais arrays

 * Exercício 1 - 
Tendo como texto a seguinte variável $pais = “Portugal” retorne: 
a. O quarto e quinto caracter;
b. A quantidade de caracteres; 
c. Converter para maiúsculas.
*/
$pais = "Portugal";
$quarto_e_quinto_caracter = substr($pais, 3, 2);
echo "O quarto e quinto caracter de $pais são: $quarto_e_quinto_caracter<br>";
$pais_em_maiusculas = strtoupper($pais);
echo "O texto $pais em maiúsculas é: $pais_em_maiusculas<br>";


/*Exercício 2 -
Na seguinte $frase = “Estou a frequentar o curso de PHP na Associação” 
a. Altera a palavra “Associação” por “ANPRI” e exiba no browser.
*/
$frase = "Estou a frequentar o curso de PHP na Associação";
$frase = "Estou a frequentar o curso de PHP na Associação";
$nova_frase = str_replace("Associação", "ANPRI", $frase);
echo $nova_frase . "<br />";


/*Exercício 3 -
Construa um array de 4 cores e exiba na janela o segundo índice do array. Não se esqueça que o primeiro elemento do array tem índice zero.
*/
$cores = array("verde", "vermelho", "amarelo", "azul");
echo "O segundo elemento do array é: " . $cores[1] . "<br />";


/*Exercício 4 -
Dada as seguintes variáveis: 
    $a = array("a" => "maçã", "b" => "banana");
    $b = array("a" =>"kiwi","b"=> "ananás","c" =>"morango");
a.Exiba no browser a união de $a e $b 
b.Exiba no browsera união de $b e $a
*/
$a = array("a" => "maçã", "b" => "banana");
$b = array("a" =>"kiwi","b"=> "ananás","c" =>"morango");

$uniao_a_b = array_merge($a, $b);
echo "União de \$a e \$b:<br>";
print_r($uniao_a_b);
echo "<br>";

$uniao_b_a = array_merge($b, $a);
echo "União de \$b e \$a:<br>";
print_r($uniao_b_a);

?>