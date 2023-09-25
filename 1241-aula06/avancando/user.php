<?php


$name = 'Weydson Bríto';
$email = 'bosquinho@alura.com.br';
$senha = 'áááś45';

$pass = mb_strlen($senha) . PHP_EOL;

if ($pass < 8) {
    echo 'Senha Insegura' . PHP_EOL;
}

$posicaodochar = strpos($email, '@');


echo substr($email, 0, $posicaodochar) . PHP_EOL;
echo substr($email, $posicaodochar + 1) . PHP_EOL;

list($nome, $sobrenome) = explode(' ', $name);

echo 'Nome: ' . $nome . PHP_EOL;
echo 'Sobrenome: ' . $sobrenome . PHP_EOL;