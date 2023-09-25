<?php

$novaserie = trim(fgets(STDIN));

file_put_contents('listas-séries.txt', "\n$novaserie", FILE_APPEND);