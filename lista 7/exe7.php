<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$num1 = 8;
$num2 = 4;
$operacao = 2;

switch ($operacao) {
    case 1:
        echo $num1 + $num2;
        break;
    case 2:
        echo $num1 - $num2;
        break;
    case 3: 
        echo $num1 * $num2;
        break;
    case 4: 
        echo $num1 / $num2;
        break;
    default: 
        echo "opção inválida";
        break;
}
