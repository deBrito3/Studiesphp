<?php

$texto = "Texto com palavrões cacete e gota";


echo str_replace(['cacete','gota'], '***', $texto);