<?php

$arquivo = fopen('listas-séries.txt', 'r');

while (!feof($arquivo)) {
    $serie = fgets($arquivo);

    echo $serie;
}


fclose($arquivo);