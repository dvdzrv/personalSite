<!doctype html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Osobné portfólio</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/portfolio.css">
    <link rel="icon" type="image/x-icon" href="images/logo.png">
</head>
<body>
    <?php include_once "reusable/header.php"; ?>

    <br>

    <main>
        <div class="github_chart">
            <h2>GitHub</h2>
            <h3>Graf aktivity na platforme GitHub.</h3>
            <img src="./images/github_contrib.png" alt="Graf aktivity na platforme GitHub.">
            <p>Graf zobrazuje kedy prispievam na platformu GitHub, tj. kedy programujem.</p>
        </div>

        <br>

        <section>
            <h2>Artemis</h2>
            <article>
                <h3>Tým v slovenskom kole súťaže CanSat, ktorého som členom. <a href="./galeria.php">Galéria</a></h3>
                <img src="images/cansat.png" alt="Projekt image">
                <h4>Zúčastnil som sa súťaže CanSat v týme Artemis. Moja rola bola naprogramovať satelit a statickú stanicu.</h4>
                <p>
                    CanSat je medzinárodná technická súťaž pre študentov stredných a vysokých škôl, v ktorej tímy navrhujú, zostroja a vypustia malý funkčný satelit – veľký približne ako plechovka od nápoja (odtiaľ názov CanSat – can = plechovka, sat = satelit).
                    Cieľom súťaže je simulovať skutočnú vesmírnu misiu. Úlohou študentov je navrhnúť satelit, ktorý sa po vypustení (napr. z rakety alebo dronu) bezpečne znáša na zem pomocou padáka, a pri tom zbiera dáta ako napríklad teplota, tlak či nadmorská výška. Okrem toho si tímy často vymýšľajú aj vlastnú sekundárnu misiu – napríklad detekciu znečistenia vzduchu, lokalizáciu pomocou GPS či meranie UV žiarenia.
                </p>
            </article>

            <br>
            <br>
            <br>
            <br>

            <article>
                <h3>1. miesto na východoslovenskom kole.</h3>
                <img src="images/cansat_prve.png" alt="">
                <h4>Ako týmu sa nám podarilo vyhrať prvé miesto na východoslovenskom semifinále.</h4>
                <p>Náš tím Artemis dosiahol obrovský úspech – získali sme prvé miesto na semifinále súťaže CanSat. Po dlhých dňoch príprav, konštruovania a testovania sa náš miniatúrny satelit vo veľkosti plechovky osvedčil v ostrej konkurencii tímov z východného Slovenska.
                    V rámci misie sme navrhli a postavili satelit, ktorý počas zostupu na padáku zbieral údaje o atmosférickom tlaku, teplote a nadmorskej výške. Okrem povinnej primárnej misie sme úspešne realizovali aj vlastnú sekundárnu misiu – meranie kvality ovzdušia pomocou senzorov pre CO₂ a škodlivé častice.</p>
                <h3>3. miesto na celoslovenskom kole.</h3>
                <h4>Ako týmu sa nám podarilo vyhrať tretie miesto na celoslovenskom finále.</h4>
            </article>
        </section>


        <!-- Predpísané tagy pre článok
        <section>
            <h2></h2>
            <article>
                <h3></h3>
                <img src="" alt="">
                <h4></h4>
                <p></p>
            </article>
            <article>
                <h3></h3>
                <img src="" alt="">
                <h4></h4>
                <p></p>
            </article>

        </section>
        -->

        <br>
        <br>
        <br>

    </main>



    <?php include_once "reusable/left_aside.php" ?>

    <?php include_once "reusable/right_aside.php" ?>

    <?php include_once "reusable/footer.php" ?>
</body>
</html>

