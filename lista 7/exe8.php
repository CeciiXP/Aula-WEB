<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$nota = 7;

switch ($nota) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Reprovado";
        break;
    case 7:
    case 6: 
        echo "Bom mas pode melhorar";
        break;
    case 8:
    case 9:
        echo "Muito bom";
        break;
    case 10:
        echo "excelente";
        break;
    default: 
        echo "opção inválida";
        break;
}