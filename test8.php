<?php
    $atual = new DateTime();
    $especifica = new DateTime('1990-01-22');
    $texto = new DateTime(' +1 month');

    echo $atual->format('d-m-Y H:i:s');
    ?><br /><?php
    echo $especifica ->format('1990-01-22');
    ?><br /><?php
    echo $texto->format('d-m-Y H:i:s');

?>