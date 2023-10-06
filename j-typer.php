<?php
$data = '09-03-1995';
$data1 = DateTime::createFromFormat("d-m-Y", $data);
echo $data1->format("d-m-Y");

?>