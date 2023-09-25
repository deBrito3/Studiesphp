<?php

$arquivo = fopen('listas-séries.txt', 'r');
$tamanhodoarquivo = filesize('listas-séries.txt');
$series = fread($arquivo,$tamanhodoarquivo);
echo $series;

fclose($arquivo);