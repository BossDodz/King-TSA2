<?php
$isGood = !empty($_GET["months"] && $_GET["day"]);

if ($isGood) {
    $bday = $_GET["day"];
    $month_s = $_GET["months"];
    $month = 0;
}

// 
$month31 = array('january', 'march', 'may', 'july', 'august', 'october', 'december');
$month30 = array('april', 'june', 'september', 'november');

function validate($month, $day)
{
    global $month31, $month30;
    if (in_array($month, $month31) && ($day > 31 || $day <= 0)) {
        return false;
    } else if (in_array($month, $month30) && ($day > 30 || $day <= 0)) {
        return false;
    } else if ($month === "february" && (($day > 29 || $day <= 0))) {
        return false;
    } else {
        return true;
    }
}

if (in_array($month_s, $month31)) {
    $month = 31;
} else if (in_array($month_s, $month30)) {
    $month = 30;
} else {
    $month = 29;
}
