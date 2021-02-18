<?php require_once('./partials/_partial3.php') ?>
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KVolume</title>
    <link rel="stylesheet" href="../css/serv/p3.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/icons/favicon-16x16.png">
    <link rel="manifest" href="../img/icons/site.webmanifest">
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
                    <th colspan=4 id="main-table-header">Volume of Shapes</th>
                </tr>
                <tr>
                    <th>Shape</th>
                    <th>Values</th>
                    <th>Formula</th>
                    <th>Answer</th>
                </tr>
                <tr>
                    <td>Sphere<br>
                        <img src="https://d26tpo4cm8sb6k.cloudfront.net/img/ball.png" alt="" srcset="">
                    </td>
                    <td><span class="var1">r</span> = 5</td>
                    <td>Volume = 4&frasl;3&pi;<span class="var1">r</span>&sup3;</td>
                    <td><?php echo calcSphere(5);  ?></td>
                </tr>
                <tr>
                    <td>Cone<br>
                        <img src="https://d26tpo4cm8sb6k.cloudfront.net/img/cone.png" alt="" srcset="">
                    </td>
                    <td><span class="var1">r</span> = 3
                        <span class="var2">h</span> = 5
                    </td>
                    <td>Volume = 1&frasl;3&pi;<span class="var1">r</span>&sup2;<span class="var2">h</span></td>
                    <td><?php echo calcCone(3, 5);  ?></td>
                </tr>
                <tr>
                    <td>Cube<br>
                        <img src="https://d26tpo4cm8sb6k.cloudfront.net/img/cube.png" alt="" srcset="">
                    </td>
                    <td><span class="var1">a</span> = 10
                    </td>
                    <td>Volume = <span class="var1">a</span>&sup3;</td>
                    <td><?php echo calcCube(10);  ?></td>
                </tr>
                <tr>
                    <td>Cylinder<br>
                        <img src="https://d26tpo4cm8sb6k.cloudfront.net/img/cylinder.png" alt="" srcset="">
                    </td>
                    <td><span class="var1">r</span> = 1
                        <span class="var2">h</span> = 2
                    </td>
                    <td>Volume = &pi;<span class="var1">r</span>&sup2;<span class="var2">h</span></td>
                    <td><?php echo calcCyl(1, 2);  ?></td>
                </tr>
                <tr>
                    <td>Tank<br>
                        <img src="https://d26tpo4cm8sb6k.cloudfront.net/img/prism.png" alt="" srcset="">
                    </td>
                    <td><span class="var1">l</span> = 1
                        <span class="var2">w</span> = 2
                        <span class="var3">h</span> = 3
                    </td>
                    <td>Volume = <span class="var1">l</span><span class="var2">w</span><span class="var3">h</span></td>
                    <td><?php echo calcTank(1, 2, 3);  ?></td>
                </tr>
                <tr>
                    <td>Capsule<br>
                        <img src="https://d26tpo4cm8sb6k.cloudfront.net/img/capsule.png" alt="" srcset="">
                    </td>
                    <td><span class="var1">r</span> = 3
                        <span class="var2">h</span> = 7
                    </td>
                    <td>Volume = 4&frasl;3&pi;<span class="var1">r</span>&sup3; + &pi;r&sup2;<span class="var2">h</span></td>
                    <td><?php echo calcCaps(3, 7);  ?></td>
                </tr>
                <tr>
                    <td>Spherical Cap<br>
                        <img src="https://d26tpo4cm8sb6k.cloudfront.net/img/cap.png" alt="" srcset="">
                    </td>
                    <td><span class="var1">r</span> = 2
                        <span class="var2">R</span> = 3
                        <span class="var3">h</span> = 4
                    </td>
                    <td>
                        <i>New <span class="var3">h</span></i> = <span class="var2">R</span> &PlusMinus; &Sqrt;<span class="var2">R</span>&sup2; - &Sqrt;<span class="var1">r</span>&sup2;<br>
                        Volume = 1&frasl;3&pi;h&sup2;(3<span class="var2">R</span> - <span class="var3">h</span>)
                    </td>
                    <td><?php echo calcCap(2, 3, 1);  ?> or
                        <?php echo calcCap(2, 3, 2);  ?>
                    </td>
                </tr>
                <tr>
                    <td>Conical Frustum<br>
                        <img src="https://d26tpo4cm8sb6k.cloudfront.net/img/conical-frustum.png" alt="" srcset="">
                    </td>
                    <td><span class="var1">r</span> = 12
                        <span class="var2">R</span> = 2
                        <span class="var3">h</span> = 3
                    </td>
                    <td>Volume = 1&frasl;3&pi;<span class="var3">h</span>(<span class="var1">r</span>&sup2; + <span class="var1">r</span><span class="var2">R</span> + <span class="var2">R</span>&sup2;)</td>
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
</body>

</html>