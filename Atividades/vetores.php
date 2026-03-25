<?php
// Funções

function calculoFahrenheit($celsius)
{
    return $celsius * 1.8 + 32;
}
function fatorial($n)
{
    $fatorial = 1;
    for ($i = $n; $i > 0; $i--) {
        $fatorial += $i;
    }
    return $fatorial;
}
function calculoF($x)
{
    return ($x * $x + 2 * $x + 4) / 2 * $x;
}

// Programa principal

$vetores = [];

// 1- Ler os 5 elementos do vetor

for ($i = 0; $i < 5; $i++) {
    $valor = readline("informe um número: ");
    array_push($vetores, $valor);
}

// 2- Criar vetor 1 aplicando a fórmula (C para F)
echo "\n\n---Celsius para Fahrenheit---\n\n";
$vetor1 = [];
foreach($vetores as $vs){
    $conversor = calculoFahrenheit($vs);
    array_push($vetor1, $conversor);
}
foreach($vetor1 as $celsius) {
    echo $celsius . " - ";
}


// 3- Criar vetor 2 calculando o fatorial
echo "\n\n---Fatorial---\n\n";
$vetor2 = [];
foreach($vetores as $f){
    $fator = fatorial($f);
    array_push($vetor2, $f);
}
echo $f . " - ";

// 4- Criar vetor 3 calculando o f(x)

$vetor3 = [];
foreach($vetor3 as $x) {
    
}

// 5- Imprimir os 3 vetores utilizando a função