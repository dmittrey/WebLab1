<?php

$php_start = getrusage();

require_once 'validator.php';
require_once 'hit_result.php';

if (isset($_POST['y']) && isset($_POST['x']) && isset($_POST['r'])) {
    $y = $_POST['y'];
    $x = $_POST['x'];
    $r = $_POST['r'];

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