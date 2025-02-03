<!doctype html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>
    <?php
        if (isset($_POST ['password'])) {
            $env = parse_ini_file(".env");
            $pass = $env['ADMIN_PASS'];
            if($_POST ['password'] ==  $pass) {
                echo "Spravne heslo.";
            } else {
                echo "ŠPATNE HESLO";
            }
        } else {
            echo "
                <form action=\"admin.php\" method=\"post\">
                <label for=\"password\">Heslo:</label>
                <input name=\"password\" type=\"text\">
                <button type=\"submit\">Prihlásiť sa.</button>
                </form>";
        }

    ?>




</body>
</html>