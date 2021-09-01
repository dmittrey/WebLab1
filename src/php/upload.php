<?php

$php_start = getrusage();

require_once 'validator.php';
require_once 'hit_result.php';

$y = "";
$x = 0;
$r = 0;

if (isset($_POST['Y_value']) && isset($_POST['X_value']) && isset($_POST['R_value'])) {
    $y = $_POST['Y_value'];
    $x = $_POST['X_value'];
    $r = $_POST['R_value'];
}

if (validate($y, $x, $r)) echo "proebalisb";
else {
    $time = time();

    $hit_result = hit_result($y, $x, $r);

    $php_time = getrusage() - $php_start;
}