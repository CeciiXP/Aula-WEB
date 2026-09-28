<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$escolha = 3;

switch ($escolha) {
    case 1:
        echo "Você escolheu rock. Agora está tocando Clue de TheJins";
        break;
    case 2:
        echo "Você escolheu pop. Agora está tocando Nikole Kidman de Adéla";
        break;
    case 3: 
        echo "Você escolheu Sertanejo. Agora está tocando alguma música sobre agro carros muitos caros e adultério.";
        break;
    case 4: 
        echo "Você escolheu Eletrônico. Agora está tocando Sex on the beat de Adéla.";
        break;

    default: 
        echo "opção inválida";
        break;
}
