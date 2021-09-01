<?php

$php_start = getrusage();

require_once 'validator.php';
require_once 'hit_result.php';

global $y;
global $x;
global $r;

if (isset($_POST['y_value']) && isset($_POST['x_value']) && isset($_POST['r_value'])) {
    $y = $_POST['y_value'];
    $x = $_POST['x_value'];
    $r = $_POST['r_value'];

    if (validate($y, $x, $r)) {
        $time = time();

        $hit_result = hit_result($y, $x, $r);

        $php_time = getrusage() - $php_start;

        echo <<<_END
        <tr>
            <th>$x</th>
            <th$y</th>
            <th$r</th>
            <th>$time</th>
            <th>$php_time</th>
            <th>$hit_result</th>
        </tr>
_END;
    }
}