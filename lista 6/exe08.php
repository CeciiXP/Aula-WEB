<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$user = "admin";
$senha = 12345;
$valor1 = 0;
$valor2 = 0;

if ($senha = 12345) {
    $valor1 = 1;
}; 
if ($user = "admin") {
    $valor2 = 1;
};

if ($valor1 + $valor2 = 2) {
    echo "Login bem-sucedido";
}
    else echo "usuário ou senha incorreto";
