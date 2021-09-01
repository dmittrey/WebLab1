<?php

$rustart = getrusage();

//хороший тон и предостережение GET запросов
$y = "";
$x = 0;
$r = 0;

if (isset($_POST['Y_value']) && isset($_POST['X_value']) && isset($_POST['R_value'])) {
    $y = $_POST['Y_value'];
    $x = $_POST['X_value'];
    $r = $_POST['R_value'];
}

$time = time();

$hit_result = hit_result($y, $x, $r);

$ru = getrusage();

$rn = $ru - $rustart;