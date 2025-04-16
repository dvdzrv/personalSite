<!doctype html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Osobný blog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="images/logo.png">
</head>
<body>
<header>
    <h1>Dávid Szomolai:</h1>
    <h1>Osobné portfólio</h1>
    <img src="images/logo.png" alt="Logo" style="height: auto; width: 1%; display: inline; margin-top: 0.15em;">
    <br>
    <nav>
        <a href="index.php">Osobný blog</a>
        <a href="portfolio.php">Osobné portfólio</a>
        <!-- <a href="booru.php">Booru</a> -->
        <a href="rules.php">Pravidlá internetu</a>
    </nav>
</header>



<main>
    <section>
        <h2>Artemis</h2>
        <article>
            <h3>Tým v slovenskom kole súťaže CanSat, ktorého som členom.</h3>
            <img src="images/cansat.png" alt="Projekt image">
            <h4>Zúčastnil som sa súťaže CanSat v týme Artemis. Moja rola bola naprogramovať satelit a statickú stanicu.</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
            </p>
        </article>

        <br>
        <br>
        <br>
        <br>

        <article>
            <h3>1. miesto na východoslovenskom kole.</h3>
            <img src="" alt="">
            <h4>Ako týmu sa nám podarilo vyhrať prvé miesto na východoslovenskom semifinále.</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
            </p>
        </article>
    </section>

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
            <img></img>
            <h4></h4>
            <p></p>
        </article>

    </section>


    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</main>



<aside class="float_left">
    <h2>Zanechaj komentár:</h2>
    <p>Čauko, zanechaj svoj unikátny odkaz na tejto stránke:</p>
    <form action="uloz.php" method="post">
        <label for="name">Tvoje ctené meno:</label>
        <input type="text" name="name" id="name">
        <label for="message">Tvoja jedinečná správa:</label>
        <input type="text" name="message" id="message">
        <button type="submit">Poslať</button>
        <button class="refreshIMG"><a class="refreshIMG" href="index.php">Refresh</a></button>
    </form>
    <section style="overflow:scroll;" class="chats" id="chatBar">
        <?php

            $env = parse_ini_file(".env");

            $DB_host = $env['DB_HOST'];
            $DB_user = $env['DB_USER'];
            $DB_pass = $env['DB_PASS'];
            $DB_name = $env['DB_NAME'];


            $DB_con = mysqli_connect($DB_host, $DB_user, $DB_pass, $DB_name);

            $DB_req = "SELECT name, message FROM messages ORDER BY ID DESC";
            $DB_res = mysqli_query($DB_con, $DB_req);
            if (mysqli_num_rows($DB_res) > 0) {
        while($row = mysqli_fetch_assoc($DB_res)) {
        echo "<p><b>".$row['name']."</b>: ".$row['message']."</p>";
        }
        }else {
        echo "Nič tu nie je.";
        }
        mysqli_close($DB_con);
        ?>
    </section>

</aside>



<aside class="float_right">
    <h1>Uvítanie</h1>
    <p>
        Vitaj, na mojej osobnej stránke, užívateľ. Moje meno je Dávid Szomolai, tiež nazývaný Kaneki alebo dvdzrv (davidzroznavy).
    </p>
    <p>
        Cieľom tejto stránky je sa čo najautenticky priblížiť vizuálu blogu v ére Web 1.0 a zárovaň obsahovať moderné funkcie.
    </p>
    <p>
        Zdrojový kód tejto stránky bude publikovaný na <a href="https://github.com/dvdzrv/">mojom Githube.</a> Prosím inšpiruj sa alebo mi pomôž a moju stránku oprav.
    </p>
    <p>
        Dátum a čas na serveri pri načítaní stránky: <br> <?php echo date("d.M.Y H:i:s");?>
    </p>
    <br>
    <br>
    <br>
    <a href="login.php"><img style="width: 35%; height: auto;" src="images/xenia1.png" alt="Xenia The Linux Fox" class="small_tags"></a>
    <!-- <img src="images/valid-html-blue.png" alt="This site has valid HTML!" style="width:7.5em; height:auto;">
     <img src="images/valid-css-blue.png" alt="This site has valid CSS!" style="width:7.5em; height:auto;"> -->
</aside>


<footer>
    <p>
        Kontakt: <br>
        Email: email@email.com <br>
        Adresse: Adresse <br>
    </p>
    <p>
        Links: <br> <br>
        <a href="https://myanimelist.net/animelist/Davidzroznavy"><img class="imgLink" src="./images/MyAnimeList_Logo.png" alt="MyAnimeList Logo"></a>
        <a href="https://www.instagram.com/davidzroznavy/"><img class="imgLink" src="./images/instagram.png" alt="Instagram Logo"></a>
        <a href="https://www.tiktok.com/@davidzroznavy"><img class="imgLink" src="./images/tiktok.png" alt="TikTok Logo"></a>
        <a href="https://github.com/dvdzrv/"><img class="imgLink" src="./images/github.webp" alt="GitHub Logo"></a>
    </p>
</footer>
</body>
</html>

