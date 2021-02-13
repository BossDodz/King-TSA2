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
        <div class="container">
            <?php
            $bday = 31;
            echo "<table><tr>";
            echo "<th>Monday</th>
                        <th>Tuesday</th>
                    <th>Wednesday</th>
                     <th>Thursday</th>
                    <th>Friday</th>
                 <th>Saturday</th>
                 <th>Sunday</th>
                 </tr><tr>      
                ";
            for ($day = 1; $day <= 31; ++$day) {
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



            ?>
        </div>
    </main>
</body>

</html>