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


function makeTable()
{
    global $month_s, $bday, $month;
    if (!validate($month_s, $bday)) {
        echo "<span class='error'>Selected date is invalid.</span>";
    } else if (validate($month_s, $bday)) {
        echo "<h1 class='month_name'>" . ucfirst($month_s) . "</h1>";
        echo "<div class='container'><table><tr>";
        echo "<th>Monday</th>
                <th>Tuesday</th>
            <th>Wednesday</th>
             <th>Thursday</th>
            <th>Friday</th>
         <th>Saturday</th>
         <th>Sunday</th>
         </tr><tr>      
        ";
        for ($day = 1; $day <= $month; $day++) {
            if ($day % 7 == 0) {
                if ($day == $bday) {
                    echo "<td class='mark'>$day</td></tr><tr>";
                } else {
                    echo "<td>$day</td></tr><tr>";
                }
            } else {
                if ($day == $bday) {
                    echo "<td class='mark'>$day</td>";
                } else {
                    echo "<td>$day</td>";
                }
            }
        }
        echo "</tr></table></div>";
    }
}
