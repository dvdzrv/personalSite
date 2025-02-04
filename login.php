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
        if (isset($_POST ['password'], $_POST ['username'])) {
            echo $_POST['username'] . $_POST['password'];
            echo "ta dačo nejde";
            $env = parse_ini_file(".env");
            $DB_host = $env['DB_HOST'];
            $DB_user = $env['DB_USER'];
            $DB_pass = $env['DB_PASS'];
            $DB_name = $env['DB_NAME'];
            echo "ta dačo nejde";

            $DB_con = mysqli_connect($DB_host, $DB_user, $DB_pass, $DB_name);
            echo "ta dačo nejde";

            $DB_req = mysqli_query($DB_con, "SELECT username, password FROM users WHERE username = '" . $_POST['username'] . "'");
            $DB_res = mysqli_query($DB_con, $DB_req);
            echo "ta dačo nejde";
            echo $_POST['username'] . $_POST['password'];
            echo "ta dačo nejde";

            if(mysqli_num_rows($DB_req) > 0){
                echo "ta dačo nejde";
                $row = mysqli_fetch_assoc($DB_req);
                echo $row['username'] . $row['password'];
            } else {
                echo "ŠPATNE HESLO";
            }
            mysqli_close($DB_con);
        } else {
            echo "
                <form action=\"login.php\" method=\"post\">
                <label for=\"username\">Meno:</label>
                <input name=\"username\" type=\"text\">
                <label for=\"password\">Heslo:</label>
                <input name=\"password\" type=\"password\">
                <button type=\"submit\">Prihlásiť sa.</button>
                </form>";
        }
    ?>




</body>
</html>