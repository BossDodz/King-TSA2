<?php require_once('./partials/_partial2.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KFruits</title>
    <link rel="stylesheet" href="../css/serv/p2.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/icons/favicon-16x16.png">
    <link rel="manifest" href="../img/icons/site.webmanifest">
</head>

<body>
    <header id="main-header">
        <div class="headings">
            <h1 class="bg-header"><span class="header-span">K</span>Fruits</h1>
            <h3 class="sm-header">A simple fruit facts web-app</h3>
        </div>
    </header>
    <main id="main-content">
        <div class="card">
            <p>
                A <span class="text-special">fruit</span> is the seed-bearing structure in flowering plants (also known as angiosperms) formed from the ovary after flowering.
                Fruits are the means by which angiosperms disseminate seeds. Edible fruits, in particular, have propagated with the movements of humans and animals in a symbiotic relationship as a means for seed dispersal and nutrition; in fact, humans and many animals have become dependent on fruits as a source of food.
                Fruits are an excellent source of essential vitamins and minerals, and they are high in fiber. Fruits also provide a wide range of health-boosting antioxidants, including flavonoids. Eating a diet high in fruits and vegetables can reduce a person's risk of developing heart disease, cancer, inflammation, and diabetes.
            </p>
        </div>
        <div class="table-container">
            <h1 class="label"><span class="text-special">10 Fruits</span> and some facts about them</h1>
            <table>
                <?php populate() ?>
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