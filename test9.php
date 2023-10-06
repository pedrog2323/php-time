<?php
    $data = new DateTime('28-09-2023');
    $data ->modify('+1 month');
    echo $data->format('d-m-Y H:i:s');
?>