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
    return round(1 / 3 * pi() * pow($hp, 2) * (3 * $R - $hp), 2);
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




?>
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KVolume</title>
    <link rel="stylesheet" href="./css/p3.css">
    <link rel="apple-touch-icon" sizes="180x180" href="./img/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/icons/favicon-16x16.png">
    <link rel="manifest" href="./img/icons/site.webmanifest">
</head>

<body>
    <header id="main-header">
        <div class="headings">
            <h1 class="bg-header"><span class="header-span">K</span>Volume</h1>
            <h3 class="sm-header">A simple volume calculator</h3>
        </div>
    </header>
    <main id="main-content">
        <div class="container">
            <table class="volume">
                <tr>
                    <th colspan=4>Volume of Shapes</th>
                </tr>
                <tr>
                    <th>Shape</th>
                    <th>Values</th>
                    <th>Formula</th>
                    <th>Answer</th>
                </tr>
                <tr>
                    <td>Sphere</td>
                    <td>r = 5</td>
                    <td>Volume = 4&frasl;3&pi;r&sup3;</td>
                    <td><?php echo calcSphere(5);  ?></td>
                </tr>
                <tr>
                    <td>Cone</td>
                    <td>r = 3
                        h = 5
                    </td>
                    <td>Volume = 1&frasl;3&pi;r&sup2;h</td>
                    <td><?php echo calcCone(3, 5);  ?></td>
                </tr>
                <tr>
                    <td>Cube</td>
                    <td>a = 10
                    </td>
                    <td>Volume = a&sup3;</td>
                    <td><?php echo calcCube(10);  ?></td>
                </tr>
                <tr>
                    <td>Cylinder</td>
                    <td>r = 1
                        h = 2
                    </td>
                    <td>Volume = &pi;r&sup2;h</td>
                    <td><?php echo calcCyl(1, 2);  ?></td>
                </tr>
                <tr>
                    <td>Tank</td>
                    <td>l = 1
                        w = 2
                        h = 3
                    </td>
                    <td>Volume = lwh</td>
                    <td><?php echo calcTank(1, 2, 3);  ?></td>
                </tr>
                <tr>
                    <td>Capsule</td>
                    <td>r = 3
                        h = 7
                    </td>
                    <td>Volume = 4&frasl;3&pi;r&sup3; + &pi;r&sup2;h</td>
                    <td><?php echo calcCaps(3, 7);  ?></td>
                </tr>
                <tr>
                    <td>Spherical Cap</td>
                    <td>r = 2
                        R = 3
                        h = 4
                    </td>
                    <td>Volume = 1&frasl;3&pi;h&sup2;(3R - h)</td>
                    <td><?php echo calcCap(2, 3, 4, 1);  ?> or
                        <?php echo calcCap(2, 3, 4, 2);  ?>
                    </td>
                </tr>
                <tr>
                    <td>Conical Frustum</td>
                    <td>r = 12
                        R = 2
                        h = 3
                    </td>
                    <td>Volume = 1&frasl;3&pi;h(r&sup2; + rR + R&sup2;)</td>
                    <td><?php echo calcFrust(12, 2, 3);  ?>
                    </td>
                </tr>

            </table>
        </div>
    </main>
    <footer id="main-footer">
        <div class="footings">
            <h2 class="bg-footer"><i>2021 &copy; Charles King. All rights reserved</i></h2>
        </div>
    </footer>
    <script src="../js/main.js"></script>
</body>

</html>