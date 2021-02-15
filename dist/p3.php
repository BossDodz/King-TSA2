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
            <div class="form-container">
                <h2 class="label">Select and input the values</h2>
                <form action="p3.php" method="get">
                    <label for="shape"></label>
                    <select name="shapes" id="shapes">
                        <option selected disabled>Choose shape</option>
                        <option value="sphere">Sphere</option>
                        <option value="cone">Cone</option>
                        <option value="cube">Cube</option>
                        <option value="cylinder">Cylinder</option>
                        <option value="r-tank">Rectangular Tank</option>
                        <option value="capsule">Capsule</option>
                        <option value="s-cap">Spherical Cap</option>
                        <option value="c-frustum">Conical Frustum</option>
                        <option value="ellipsoid">Ellispoid</option>
                        <option value="s-pyramid">Square Pyramid</option>
                        <option value="tube">Tube</option>
                    </select>
                    <div class="section-container">
                        <div class="sec r">
                            <div class="img-container">
                                <img src="" alt="" id="r-pic">
                            </div>
                            <div class="inputs">
                                <div class="inp">
                                    <input type="number" placeholder="Radius (r)" autocomplete="off" name="rvalue">
                                    <select name="runit1" id="unit">
                                        <option value="" selected disabled>--</option>
                                        <option value="cm">cm</option>
                                        <option value="m">m</option>
                                        <option value="km">km</option>
                                    </select>
                                </div>
                                <input type="submit" value="CALCULATE">
                            </div>
                        </div>
                        <div class="sec rh">
                            <div class="img-container">
                                <img src="" alt="" id="rh-pic">
                            </div>
                            <div class="inputs">
                                <div class="inp">
                                    <input type="number" placeholder="Base radius (r)" autocomplete="off" name="rhvalue1">
                                    <select name="rhunit1" id="unit">
                                        <option value="" selected disabled>--</option>
                                        <option value="cm">cm</option>
                                        <option value="m">m</option>
                                        <option value="km">km</option>
                                    </select>
                                </div>
                                <div class="inp">
                                    <input type="number" placeholder="Height (h)" autocomplete="off" name="rhvalue2">
                                    <select name="rhunit2" id="unit">
                                        <option value="" selected disabled>--</option>
                                        <option value="cm">cm</option>
                                        <option value="m">m</option>
                                        <option value="km">km</option>
                                    </select>
                                </div>
                                <input type="submit" value="CALCULATE">
                            </div>
                        </div>
                        <div class="sec c">
                            <div class="img-container">
                                <img src="" alt="" id="c-pic">
                            </div>
                            <div class="inputs">
                                <div class="inp">
                                    <input type="number" placeholder="Edge length (a)" autocomplete="off" name="cvalue">
                                    <select name="cunit1" id="unit">
                                        <option value="" selected disabled>--</option>
                                        <option value="cm">cm</option>
                                        <option value="m">m</option>
                                        <option value="km">km</option>
                                    </select>
                                </div>
                                <input type="submit" value="CALCULATE">
                            </div>
                        </div>
                        <div class="sec lwh">
                            <div class="img-container">
                                <img src="" alt="" id="rt-pic">
                            </div>
                            <div class="inputs">
                                <div class="inp">
                                    <input type="number" placeholder="Length (l)" autocomplete="off" name="lwhvalue1">
                                    <select name="lwhunit1" id="unit">
                                        <option value="" selected disabled>--</option>
                                        <option value="cm">cm</option>
                                        <option value="m">m</option>
                                        <option value="km">km</option>
                                    </select>
                                </div>
                                <div class="inp">
                                    <input type="number" placeholder="Width (w)" autocomplete="off" name="lwhvalue2">
                                    <select name="lwhunit2" id="unit">
                                        <option value="" selected disabled>--</option>
                                        <option value="cm">cm</option>
                                        <option value="m">m</option>
                                        <option value="km">km</option>
                                    </select>
                                </div>
                                <div class="inp">
                                    <input type="number" placeholder="Height (h)" autocomplete="off" name="lwhvalue3">
                                    <select name="lwhunit3" id="unit">
                                        <option value="" selected disabled>--</option>
                                        <option value="cm">cm</option>
                                        <option value="m">m</option>
                                        <option value="km">km</option>
                                    </select>
                                </div>
                                <input type="submit" value="CALCULATE">
                            </div>
                        </div>
                        <div class="sec rrh">
                            <div class="img-container">
                                <img src="" alt="" id="sc-pic">
                            </div>
                            <div class="inputs">
                                <div class="inp">
                                    <input type="number" placeholder="Base Radius (r)" autocomplete="off" name="rrhvalue1">
                                    <select name="rrhunit1" id="unit">
                                        <option value="" selected disabled>--</option>
                                        <option value="cm">cm</option>
                                        <option value="m">m</option>
                                        <option value="km">km</option>
                                    </select>
                                </div>
                                <div class="inp">
                                    <input type="number" placeholder="Ball Radius (R)" autocomplete="off" name="rrhvalue2">
                                    <select name="rrhunit2" id="unit">
                                        <option value="" selected disabled>--</option>
                                        <option value="cm">cm</option>
                                        <option value="m">m</option>
                                        <option value="km">km</option>
                                    </select>
                                </div>
                                <div class="inp">
                                    <input type="number" placeholder="Height (h)" autocomplete="off" name="rrhvalue3">
                                    <select name="rrhunit3" id="unit">
                                        <option value="" selected disabled>--</option>
                                        <option value="cm">cm</option>
                                        <option value="m">m</option>
                                        <option value="km">km</option>
                                    </select>
                                </div>
                                <input type="submit" value="CALCULATE">
                            </div>
                        </div>
                        <div class="sec rrh-c">
                            <div class="img-container">
                                <img src="" alt="" id="cf-pic">
                            </div>
                            <div class="inputs">
                                <div class="inp">
                                    <input type="number" placeholder="Top Radius (r)" autocomplete="off" name="rrhcvalue1">
                                    <select name="rrhcunit1" id="unit">
                                        <option value="" selected disabled>--</option>
                                        <option value="cm">cm</option>
                                        <option value="m">m</option>
                                        <option value="km">km</option>
                                    </select>
                                </div>
                                <div class="inp">
                                    <input type="number" placeholder="Bottom Radius (R)" autocomplete="off" name="rrhcvalue2">
                                    <select name="rrhcunit2" id="unit">
                                        <option value="" selected disabled>--</option>
                                        <option value="cm">cm</option>
                                        <option value="m">m</option>
                                        <option value="km">km</option>
                                    </select>
                                </div>
                                <div class="inp">
                                    <input type="number" placeholder="Height (h)" autocomplete="off" name="rrhcvalue3">
                                    <select name="rrhcunit3" id="unit">
                                        <option value="" selected disabled>--</option>
                                        <option value="cm">cm</option>
                                        <option value="m">m</option>
                                        <option value="km">km</option>
                                    </select>
                                </div>
                                <input type="submit" value="CALCULATE">
                            </div>
                        </div>
                        <div class="sec abc">
                            <div class="img-container">
                                <img src="" alt="" id="e-pic">
                            </div>
                            <div class="inputs">
                                <div class="inp">
                                    <input type="number" placeholder="Axis 1 (a)" autocomplete="off" name="abcvalue1">
                                    <select name="abcunit1" id="unit">
                                        <option value="" selected disabled>--</option>
                                        <option value="cm">cm</option>
                                        <option value="m">m</option>
                                        <option value="km">km</option>
                                    </select>
                                </div>
                                <div class="inp">
                                    <input type="number" placeholder="Axis 2 (b)" autocomplete="off" name="abcvalue2">
                                    <select name="abcunit2" id="unit">
                                        <option value="" selected disabled>--</option>
                                        <option value="cm">cm</option>
                                        <option value="m">m</option>
                                        <option value="km">km</option>
                                    </select>
                                </div>
                                <div class="inp">
                                    <input type="number" placeholder="Axis 3 (c)" autocomplete="off" name="abcvalue3">
                                    <select name="abcunit3" id="unit">
                                        <option value="" selected disabled>--</option>
                                        <option value="cm">cm</option>
                                        <option value="m">m</option>
                                        <option value="km">km</option>
                                    </select>
                                </div>
                                <input type="submit" value="CALCULATE">
                            </div>
                        </div>
                        <div class="sec ah">
                            <div class="img-container">
                                <img src="" alt="" id="sp-pic">
                            </div>
                            <div class="inputs">
                                <div class="inp">
                                    <input type="number" placeholder="Base Edge (a)" autocomplete="off" name="ahvalue1">
                                    <select name="ahunit1" id="unit">
                                        <option value="" selected disabled>--</option>
                                        <option value="cm">cm</option>
                                        <option value="m">m</option>
                                        <option value="km">km</option>
                                    </select>
                                </div>
                                <div class="inp">
                                    <input type="number" placeholder="Height (h)" autocomplete="off" name="ahvalue2">
                                    <select name="ahunit2" id="unit">
                                        <option value="" selected disabled>--</option>
                                        <option value="cm">cm</option>
                                        <option value="m">m</option>
                                        <option value="km">km</option>
                                    </select>
                                </div>
                                <input type="submit" value="CALCULATE">
                            </div>
                        </div>
                        <div class="sec ddl">
                            <div class="img-container">
                                <img src="" alt="" id="t-pic">
                            </div>
                            <div class="inputs">
                                <div class="inp">
                                    <input type="number" placeholder="Outer Diameter (d1)" autocomplete="off" name="ddlvalue1">
                                    <select name="ddlunit1" id="unit">
                                        <option value="" selected disabled>--</option>
                                        <option value="cm">cm</option>
                                        <option value="m">m</option>
                                        <option value="km">km</option>
                                    </select>
                                </div>
                                <div class="inp">
                                    <input type="number" placeholder="Outer Diameter (d2)" autocomplete="off" name="ddlvalue2">
                                    <select name="ddlunit2" id="unit">
                                        <option value="" selected disabled>--</option>
                                        <option value="cm">cm</option>
                                        <option value="m">m</option>
                                        <option value="km">km</option>
                                    </select>
                                </div>
                                <div class="inp">
                                    <input type="number" placeholder="Length (l)" autocomplete="off" name="ddlvalue3">
                                    <select name="ddlunit3" id="unit">
                                        <option value="" selected disabled>--</option>
                                        <option value="cm">cm</option>
                                        <option value="m">m</option>
                                        <option value="km">km</option>
                                    </select>
                                </div>
                                <input type="submit" value="CALCULATE">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </main>
    <footer id="main-footer">
        <div class="footings">
            <h2 class="bg-footer"><i>2021 &copy; Charles King. All rights reserved</i></h2>
        </div>
    </footer>
    <?php
    if (!empty($_GET["shapes"])) {
        $shape = $_GET["shapes"];
        $vals = array();
        $units = array();

        foreach ($_GET as $key => $value) {
            if (preg_match('/(value)/', $key) && $value !== "") {
                array_push($vals, $value);
                echo $value;
            } else if (preg_match('/(unit)/', $key) && $value !== "") {
                array_push($unis, $value);
                echo $value;
            }
        }


        print_r($units, $vals);
    }
    ?>
    <script src="../js/main.js"></script>
</body>

</html>