<!doctype html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Osobné portfólio</title>
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
            <a href="index.php">Osobné portfólio</a>
            <a href="">LINK2</a>
            <a href="">LINK3</a>
        </nav>
    </header>



    <main>
        <section>
            <article>
                <h3>Kto je to Kaneki?</h3>
                <img src="images/lily.webp" alt="Projekt image">
                <img src="images/kaneki.jpg" alt="Projekt image">
                <h4>Okrem mojej prezývky na internete a prihlasovacieho mena na každom mojom počítači, <a href="https://tokyoghoul.fandom.com/wiki/Ken_Kaneki">Kaneki</a> je postava z anime a mangy <a href="https://en.wikipedia.org/wiki/Tokyo_Ghoul">Tokyo Ghoul</a>.</h4>

                <p>
                    Prečo som si vybral práve Kanekiho, ako moju prezývku? Neviem, jednoducho som si pri výbere užívateľského mena nevedel vybrať nič iné.
                    <br>
                    Tokyo Ghoul je ale séria, ktorú mám veľmi rád a jej spracovanie v <a href="https://sk.wikipedia.org/wiki/Manga">mange</a> by som odporučil každému.
                    Príbeh sa odohráva v modernom fikcionálnom Japonsku, v meste Tokyo, v ktorom sa nachádzajú <a href="https://tokyoghoul.fandom.com/wiki/Ghoul">ghoulovia</a>, ľudsky vyzerajúce tvory, ktoré však pre prežitie musia jesť ľudské mäso.
                    Príbeh začína predstavením Kena Kanekiho, ako človeka, ktorý sa ghoulom stane, po transplantácii orgánov od ghoula. Tokyo Ghoul perfektne zachytáva pohľady na svet dvoch strán stvorených si odporovať, ľudí a ghoulov.
                    No Kaneki vidí tento svet z obidvoch strán, dokáže ich zjednotiť a zastaviť zbytočné krvi prelievanie?
                </p>
                <p>
                    Tokyo Ghoul je sprevádzaný výborným Sound Trackom. Vypočuj si môj výber skladieb z tohto soundracku tu:
                    <a href="https://youtube.com/playlist?list=PL3v00cnKcREFYkPuUNB2iJp43_I7QxzSV&si=MtelVGeicW6vARgC">Kanekiho Tokyo Ghoul Playlist</a>
                </p>
            </article>

            <br>

            <article>
                <h3>Nazov projektu</h3>
                <img src="" alt="">
                <p>
                    Projekt. <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. <br>
                </p>
            </article>


        </section>
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
            Vitaj na mojej osobnej stránke, užívateľ. Moje meno je Dávid Szomolai, tiež nazývaný Kaneki alebo dvdzrv (davidzroznavy).
        </p>
        <p>
            Cieľom tejto stránky je sa čo najautenticky priblížiť vizuálu Web 1.0 a zárovaň obsahovať moderné funkcie.
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
        <a href="login.php"><img style="width: 35%; height: auto;" src="images/xenia1.png" alt="Xenia The Linux Fox"></a>
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
