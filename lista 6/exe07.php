<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$idade = 15;

if ($idade < 10 ) {
    echo "Filmes com classificação 'Livre para todos os públicos'.";
};
if ($idade < 14 ) {
     "Filmes com classificação de até '12 anos'.";
};

if ($idade < 18 ) {
     "Filmes com classificação de até '16 anos'.";
};

if ($idade > 18 ) {
     "Filmes com classificação '18 anos' (adulto).";
};
