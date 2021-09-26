<?php

require_once "hit_result.php";
require_once "validator.php";

date_default_timezone_set('Europe/Moscow');

$start = microtime(true);
$current_time = date("H:i:s");

if (isset($_POST["x"]) && isset($_POST["y"]) && isset($_POST["r"])) {

    $x = $_POST["x"];
    $y = $_POST["y"];
    $r = $_POST["r"];

    $allowedValuesOfX = ['-4', '-3', '-2', '-1', '0', '1', '2', '3', '4'];
    $allowedValuesOfR = ['1', '2', '3', '4', '5'];

    if (in_array($x, $allowedValuesOfX) && preg_match("/^((-?[0-3].\d*(?=[1-9])[1-9])|0|(-?[12]))$/", $y) && in_array($r, $allowedValuesOfR)) {

        $hit_result = isHit($x, $y, $r) ? "<span style='color: green'>TRUE</span>" : "<span style='color: red'>FALSE</span>";

        $script_time = number_format(microtime(true) - $start, 8, ".", "") * 1000000;

        die(<<<_END
        <tr>
            <th>$x</th>
            <th>$y</th>
            <th>$r</th>
            <th>$current_time</th>
            <th>$script_time</th>
            <th>$hit_result</th>
        </tr>
_END
        );
    }
}
die("Data is incorrect!");