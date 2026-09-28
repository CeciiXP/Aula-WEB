<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$emoção = "feliz";

switch ($emoção) {
    case "feliz":
        echo "Que bom que você está feliz, gostaria de compartilhar o motivo?";
        break;
    case "triste":
        echo "Sinto muito que você está triste, gostaria de compartilhar o motivo?";
        break;
    case "nervoso": 
        echo "Sinto muito que você está nervoso, gostaria de compartilhar o motivo?";
        break;
    case "cansado": 
        echo "Sinto muito que você está cansado, gostaria de compartilhar o motivo?";
    case "entediado":
        echo "Gostaria que eu sugerisse atividades para passar o tempo?";
        break;
    default: 
        echo "opção inválida";
        break;
}
