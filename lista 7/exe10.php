<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$peso = 70; 
$altura = 1.75; 
$imc = $peso * $altura;

switch (true) {
    case ($imc < 18.5):
        echo "Abaixo do peso.";
        break;
    case ($imc < 24.9):
        echo "Normal";
        break;
    case ($imc < 29.9):
        echo "Sobrepeso";
        break;
    case ($imc > 30):
        echo "Obesidade";
        break;
    default: 
        echo "opção inválida";
        break;
}