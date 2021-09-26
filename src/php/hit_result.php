<?php

function isHit($x, $y, $r)
{
    return isYellowZone($x, $y, $r) || isBlueZone($x, $y, $r) || isGreenZone($x, $y, $r);
}

function isYellowZone($x, $y, $r)
{
    return ($x * $x + $y * $y <= $r*$r / 4) && ($x >= 0) && ($y >= 0);
}

function isBlueZone($x, $y, $r)
{
    return ($x <= 0) && ($x >= (-1 * $r)) && ($y >= 0) && ($y <= $r);
}

function isGreenZone($x, $y, $r)
{
    return ($x >= 0) && ($y <= 0) && ($y >= 2 * $x - $r);
}