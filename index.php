<!doctype html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Osobný blog</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" type="image/x-icon" href="images/logo.png">
</head>
<body>
    <?php include_once "reusable/header.php"; ?>

    <br>

    <main>
        <section>
            <h2>Kto som ja? Iba developer poza touto stránkou.</h2>
            <article>
                <h3>Kto je to Kaneki?</h3>
                <img src="images/lily.webp" alt="Projekt image">
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
                <h3>No kto som naozaj ja?</h3>
                <img src="images/kaneki.png" alt="">
                <h4>Študent Strednej odbornej školy technickej v Rožňave, na odbore Informačné a sieťové technológie, ktorý dostal za úlohu vytvoriť web na hodine Tvorba Webu.</h4>
                <p>
                    Som žiakom triedy II.C, perfektného kolektívu tvoreného rozmanitými osobnosťami.<br>
                    Okrem projektov a programovaniu sa venujem aj hraniu na gitare, kresleniu a čítaniu. No však programovanie je asi mojou najobľúbenejšou činnosťou. Venujem sa mu už dosť dlho, ale tento rok, som konečne dostal pocit, že mám dostatok schopností na vytvorenie väčšieho osobného projektu, no na to nemám dostatok času.<br>
                    <br>
                    Medzi moje názory patrí:
                </p>
                <ul>
                    <li>
                        Programovanie s AI nie je programovanie. AI nebude nikdy schopné tvoriť perfektný kód.
                    </li>
                    <li>
                        <a href="https://sk.wikipedia.org/wiki/Linux_(opera%C4%8Dn%C3%BD_syst%C3%A9m)">Linux</a> je najlepší operačný systém.
                    </li>
                    <li>
                        <a href="https://lignux.org/the-say-lignux-campaign.html">RMS</a> je fanatik.
                    </li>
                    <li>
                        Horúca čokoláda > Čaj > Káva
                    </li>
                    <li>
                        Metal > Pop
                    </li>
                    <li>
                        Neverím v žiadne náboženstvo. Verím Darvinovej Terórii evolúcie. Verím Teórii veľkého filtra. Mám liberálne a progresívne politické názory.
                    </li>
                    <li>
                        Predchádzajúcou vetou som naštval polku Slovenska.
                    </li>
                </ul>
            </article>

            <br>

            <article>
                <h3>Aké technológie ovládam?</h3>
                <img src="images/coffee.png" alt="">
                <h4>Python 3, HTML 5, CSS 3, PHP, C, SQL, Git & Github</h4>
                <p>
                    Tieto technológie ovládam, vďaka škole a vďaka samo štúdiu doma.<br>
                    Plánujem sa naučiť aj programovací jazyk Java. <br>
                    Môj najobľúbenejší programovací jazyk je momentálne Python. Obľúbil som si jeho jednoduchosť ale zároveň prístup mnohých knižníc, ktoré dopĺňajú tento jazyk.
                    Okrem Pythonu však obľubujem PHP, umožňujúce my tvoriť dynamické webové stránky. Žiadna stránka sa však nezaobíde bez databázy. Mnou často používané databázy sú MySQL a SQLite.
                </p>
                <br>
                <br>
                <br>
                <br>
                <h4>Ako je postavená táto stránka?</h4>
                <img src="images/powered_by_linux.png" alt="">
                <p>
                    Pomocou LAMP stacku, zloženého z Linuxu, Apache web serveru, MySQL a PHP. Tento stack je spustený na lokálnom serveri.<br>
                    Na serveri je možné robiť administratívu databázy pomocou PHPMyAdmin.
                </p>
            </article>

        </section>

        <br>
        <br>
        <br>

    </main>



    <?php include_once "reusable/left_aside.php" ?>

    <?php include_once "reusable/right_aside.php" ?>

    <?php include_once "reusable/footer.php" ?>


    <script>
        //Script presmeruje užívateľa na druhú stránku, v prípade, že je na telefóne. Spraví tak, iba ak na stránke užívateľ ešte nebol.
        document.addEventListener("DOMContentLoaded", function () {
            const hasVisited = localStorage.getItem('hasVisited');
            const screenWidth = window.innerWidth;

            if (!hasVisited && screenWidth < 800) {
                localStorage.setItem('hasVisited', 'true');
                window.location.href = '/index_telefon.php';
            }
        });
    </script>
</body>
</html>
