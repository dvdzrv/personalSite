<!doctype html>
<html lang="sk">
<aside class="float_left">
    <h2>Zanechaj komentár:</h2>
    <p>Čauko, zanechaj svoj unikátny odkaz na tejto stránke:</p>
    <form action="uloz.php" method="post">
        <label for="name">Tvoje ctené meno:</label>
        <input type="text" name="name" id="name">
        <label for="message">Tvoja jedinečná správa:</label>
        <input type="text" name="message" id="message">
        <button type="submit">Poslať</button>
        <button class="refreshIMG"><a class="refreshIMG" href="../index.php">Refresh</a></button>
    </form>
    <section style="overflow:scroll;" class="chats" id="chatBar">
        <?php //include_once "chat.php"; ?>
    </section>
</aside>