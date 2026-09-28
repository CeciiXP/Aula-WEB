<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$clima = "ensolarado";

switch ($clima) {
    case "ensolarado":
        echo "Passe protetor solar.";
        break;
    case "nublado":
        echo "Continue passando protetor solar, raios UV atravessam núvens.";
        break;
    case "chuvoso": 
        echo "Leve um gurarda-chuva.";
        break;
    case "nevando": 
        echo "Não coma a neve.";
        break;
    case "tempestade": 
        echo "Não saia de casa.";
        break;

    default: 
        echo "opção inválida";
        break;
}
