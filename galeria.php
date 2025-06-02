<!doctype html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galéria</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/galeria.css">
    <link rel="icon" type="image/x-icon" href="images/logo.png">
</head>

<body>
    <?php include_once "reusable/header.php"; ?>

    <br>

    <main>
        <section>
            <h1>CanSat:</h1>
            <div class="gallery">
                <a target="_blank" href="./images/cansat_prve.png">
                    <img src="./images/cansat_prve.png" alt="Fotografia týmu Artemis po výhre na semifinále">
                </a>

                <a target="_blank" href="./images/cansat_prezentovanie.png">
                    <img src="./images/cansat_prezentovanie.png" alt="Fotografia týmu Artemis. Prezentovanie projektu na ZŠ">
                </a>

                <a target="_blank" href="./images/cansat_satelit.png">
                    <img src="./images/cansat_satelit.png" alt="Obrázok satelitu týmu Artemis">
                </a>

                <a target="_blank" href="./images/cansat_stanica.jpg">
                    <img src="./images/cansat_stanica.jpg" alt="Obrázok stanice týmu Artemis">
                </a>

                <a target="_blank" href="./images/cansat_antena2.png">
                    <img src="./images/cansat_antena2.png" alt="Obrázok antény.">
                </a>

                <a target="_blank" href="./images/cansat_merania.png">
                    <img src="./images/cansat_merania.png" alt="Merania padákov.">
                </a>
            </div>
        </section>
    </main>

    <?php include_once "reusable/left_aside.php" ?>

    <?php include_once "reusable/right_aside.php" ?>

    <?php include_once "reusable/footer.php" ?>
</body>
</html>
