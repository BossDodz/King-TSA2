<?php

function calcSphere($r)
{
    return round(4 / 3 * pi() * pow($r, 3), 2);
}
function calcCone($r, $h)
{
    return round(1 / 3 * pi() * pow($r, 2) * $h, 2);
}
function calcCube($a)
{
    return round(pow($a, 3), 2);
}
function calcCyl($r, $h)
{
    return round(pi() * pow($r, 2) * $h, 2);
}
function calcTank($l, $w, $h)
{
    return round($l * $w * $h, 2);
}
function calcCaps($r, $h)
{
    return round((4 / 3 * pi() * pow($r, 3)) + pi() * pow($r, 2) * $h, 2);
}
function calcCap($r, $R, $flag)
{
    $hp = $R + sqrt(pow($R, 2) - pow($r, 2));
    $hm = $R - sqrt(pow($R, 2) - pow($r, 2));
    if ($flag === 1) {
        return round(1 / 3 * pi() * pow($hp, 2) * (3 * $R - $hp), 2);
    } else if ($flag === 2) {
        return round(1 / 3 * pi() * pow($hm, 2) * (3 * $R - $hm), 2);
    }
}
function calcFrust($r, $R, $h)
{
    return round(1 / 3 * pi() * $h * (pow($r, 2) + $r *  $R + pow($R, 2)), 2);
}
