<?php
    $atual = new DateTime();
    $especifica = new DateTime('1990-01-22');
    $texto = new DateTime(' +1 month');

    print_r($atual);
    print_r($especifica);
    print_r($texto);

?>