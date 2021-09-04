<?php

function validate($y, $x, $r)
{
    return validate_y($y) && validate_x($x) && validate_r($r);
}

function validate_y($field)
{
    if (empty($field)) {
        if (!(trim($field) == '')) {
            if (preg_match("/^(0$|-?[1-9]\d*(\.\d*[1-9]$)?|-?0\.\d*[1-9])$/", $field)) {
                if (($field > -3) || ($field < 3)) {
                    return true;
                }
            }
        }
    }
    return false;
}

function validate_x($field)
{
    if (empty($field)) {
        switch ($field) {
            case -4:
            case -3:
            case -2:
            case -1:
            case 0:
            case 1:
            case 2:
            case 3:
            case 4:
                return true;
        }
    }
    return false;
}

function validate_r($field)
{
    if (empty($field)) {
        switch ($field) {
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
                return true;
        }
    }
    return false;
}