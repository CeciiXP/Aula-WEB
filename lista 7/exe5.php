<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$genero = "Kpop";

switch ($genero) {
    case "rock":
        echo "Você escolheu rock. Artista recomendado: TheJins";
        break;
    case "pop":
        echo "Você escolheu pop. Artista recomendado: Ariana grande";
        break;
    case "jazz": 
        echo "Você escolheu jazz. Artista recomendado: Miles Davis";
        break;
    case "Rap": 
        echo "Você escolheu rap. Artista recomendado: Milli";
        break;

    default: 
        echo "opção inválida";
        break;
}
