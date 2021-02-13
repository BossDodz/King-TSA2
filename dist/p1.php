<?php
require_once('./_partial.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/p1.css">
    <title>Problem 1</title>
</head>

<body>
    <header id="main-header">
        <div class="headings">
            <h1 class="heading-bg"><span class="heading-span">K</span>Calendar</h1>
            <h3 class="heading-sm">A simple birthday marker</h3>
        </div>
    </header>
    <main id="main-content">
        <div class="inputs">
            <form action="p1.php" method="get">
                <ul class="inp-item">
                    <li class="list-item"><label for="months">Select month:</label>
                        <select name="months" id="months">
                            <option value="january">January</option>
                            <option value="february">February</option>
                            <option value="march">March</option>
                            <option value="april">April</option>
                            <option value="may">May</option>
                            <option value="june">June</option>
                            <option value="july">July</option>
                            <option value="august">August</option>
                            <option value="september">September</option>
                            <option value="october">October</option>
                            <option value="november">November</option>
                            <option value="december">December</option>
                        </select>
                    </li>
                    <li class="list-item"><label for="day">Select day:</label>
                        <input type="number" name="day" id="day" autocomplete="off" required>
                    </li>
                    <li class="list-item">
                        <input type="submit" value="Submit" id="btn-submit">
                    </li>
                </ul>
            </form>
        </div>
        <?php
        if ($isGood) {
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



        ?>
    </main>
</body>

</html>