<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/menu.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="img/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/icons/favicon-16x16.png">
    <link rel="manifest" href="img/icons/site.webmanifest">
    <title>Menu | TSA 2</title>
</head>

<body id="body">
    <main id="main-content">
        <div class="card">
            <div class="cover">
                <span class="cover-text">
                    <h2>Hover over me</h2>
                </span>
            </div>
            <div class="contents">
                <span class="button p1"><a href="serv/p1.php">Problem 1</a></span>
                <span class="button p2"><a href="serv/p2.php">Problem 2</a></span>
                <span class="button p2"><a href="serv/p3.php">Problem 3</a></span>
                <span class="button p2"><a href="serv/p4.php">Problem 4</a></span>
                <span class="button p2"><a href="serv/p5.php">Problem 5</a></span>
            </div>
        </div>
    </main>
</body>
<script type="text/javascript" src="../js/vanilla-tilt.min.js"></script>
<script>
    VanillaTilt.init(document.querySelectorAll(".card"), {
        max: 25,
        speed: 400,
        glare: true,
        "max-glare": 1,
    });
</script>

</html>