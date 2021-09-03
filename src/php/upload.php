<?php

if (isset($_POST["Y_value"]) && isset($_POST["X_value"]) && isset($_POST["R_value"])) {
    if (validate($_POST["Y_value"], $_POST["X_value"], $_POST["R_value"])) {

        $x = $_POST["X_value"];
        $y = $_POST["Y_value"];
        $r = $_POST["R_value"];

        $hit_result = hit_result($y, $x, $r);

        echo $data = <<<_END
        <tr>
            <th>$x</th>
            <th$y</th>
            <th$r</th>
            <th>time</th>
            <th>php_time</th>
            <th>$hit_result</th>
        </tr>
_END;
        return;
    }

    echo 'Валидация не прошла!';
    return;
}