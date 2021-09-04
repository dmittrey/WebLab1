<?php

require_once "hit_result.php";
require_once "validator.php";

date_default_timezone_set('Europe/Moscow');

$start = microtime(true);
$current_time = date("H:i:s");

$x = $_POST["x"];
$y = $_POST["y"];
$r = $_POST["r"];

if (validate($y, $x, $r)) {
    $hit_result = hit_result($y, $x, $r) ? "<span style='color: green'>TRUE</span>" : "<span style='color: red'>FALSE</span>";

    $script_time = number_format(microtime(true) - $start, 8, ".", "") * 1000000;

    $result[] = 'ok';

    $result[] = <<<_END
        <tr>
            <th>$x</th>
            <th>$y</th>
            <th>$r</th>
            <th>$current_time</th>
            <th>$script_time</th>
            <th>$hit_result</th>
        </tr>
_END;

    echo json_encode($result);
} else {
    $result[] = 'error';

    $result[] = "Validation error!";

    echo json_encode($result);
}

return;