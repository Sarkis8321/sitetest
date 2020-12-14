<?php

$pr = $_GET['text'];

$ar = array();

$ar[1] = "10";
$ar[2] = "20";
$ar[3] = "30";
$ar[4] = "40";
$ar[5] = "50";
$ar[6] = $pr;
$a = json_encode($ar);


echo $a;

?>