<?php

$arquivo = fopen('series-antigas.txt', 'a');

$serie = PHP_EOL . 'Breaking Bad';

fwrite($arquivo,$serie);

fclose($arquivo);