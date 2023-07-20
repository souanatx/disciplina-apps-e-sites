<?php

/* Exercício 1 - 
Calcule a média final das notas de 3 provas, de modo a obter a situação do aluno, de acordo com os seguintes critérios:
(Obs.As notas estão armazenadas em variáveis)
    Se amédia >= 9,5 o aluno está aprovado;
    Se amédia for maior que 8 emenor que 9,5 o aluno irá a recuperação; 
    Se média for menor ou igual a 8, o aluno está reprovado.
*/
$nota1 = 9;
$nota2 = 10;
$nota3 = 11;

$media = ($nota1 + $nota2 + $nota3) / 3;

if ($media >= 9.5) {
    echo "Aluno aprovado!" . "<br />";
} elseif ($media > 8 && $media < 9.5) {
    echo "Aluno em recuperação!" . "<br />";
} else {
    echo "Aluno reprovado!" . "<br />";
}


/*Exercício 2 -
Construa um algoritmo que lê um número de 1 a 10 e imprime na janela o número de vezes correspondente ao seu valor.
(Obs.O número está armazenado numa variável)
*/
$num = 5; 
$i = 1;
while ($i <= $num && $num >= 1 && $num <= 10) {
    echo $i . "<br>";
    $i++;
}


/*Exercício 3 -
Construa um algoritmo que permite ler um número e calcule a respetiva tabuada.
(Obs.O número está armazenado numa variável)
*/
$num = 5; 
$i = 1;
while ($i <= 10) {
    $resultado = $num * $i;
    echo "$num x $i = $resultado<br />";
    $i++;
}


/*Exercício 4 -
Elabore um programa em PHP que compare três números inteiros, colocando-os num array por ordem crescente. Imprima os três números, utilizando a estrutura “foreach”.
(Obs.Os números estão armazenados em variáveis)
*/
$num1 = 9;
$num2 = 10;
$num3 = 11;
$menor = $num1;
$medio = $num2;
$maior = $num3;
if ($medio < $menor) {
    $x = $menor;
    $menor = $medio;
    $medio = $x;
}
if ($maior < $menor) {
    $x = $menor;
    $menor = $maior;
    $maior = $x;
}
if ($maior < $medio) {
    $x = $medio;
    $medio = $maior;
    $maior = $x;
}
echo "Números em ordem crescente: ";
foreach ([$menor, $medio, $maior] as $ncrescente) {
    echo "<br /> $ncrescente";
}

?>