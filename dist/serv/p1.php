<?php
require_once('./partials/_partial.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/serv/p1.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/icons/favicon-16x16.png">
    <link rel="manifest" href="../img/icons/site.webmanifest">
    <title>KCalendar</title>
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
            makeTable();
        }
        ?>
    </main>
</body>

</html>