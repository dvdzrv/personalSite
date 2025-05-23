<!doctype html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css">
    <title>Admin</title>
</head>
<body>
    <?php include_once "reusable/header.php"; ?>

    <?php
        if (!empty($_POST ['username']) AND !empty($_POST ['password'])) {
            $env = parse_ini_file(".env");
            $DB_host = $env['DB_HOST'];
            $DB_user = $env['DB_USER'];
            $DB_pass = $env['DB_PASS'];
            $DB_name = $env['DB_NAME'];

            $DB_con = mysqli_connect($DB_host, $DB_user, $DB_pass, $DB_name);

            $DB_req = "SELECT username, password FROM users WHERE username = '" . $_POST['username'] . "'";
            $DB_res = mysqli_query($DB_con, $DB_req);


            if(mysqli_num_rows($DB_res) > 0){
                $row = mysqli_fetch_assoc($DB_res);
                if ($_POST['password'] == $row['password']) {
                    echo "Správne heslo.";
                } else {
                    echo "Nesprávne heslo.";
                }
            } else {
                echo "Zlé prihlasovacie meno!";
            }
            mysqli_close($DB_con);
        } else {
            if (!empty($_POST ['username']) OR !empty($_POST ['password'])) {
                echo "Prázdne meno alebo heslo!";
            }
            echo "
                <form action=\"login.php\" method=\"post\">
                <label for=\"username\">Prihlasovacie meno:</label>
                <input name=\"username\" type=\"text\">
                <label for=\"password\">Heslo:</label>
                <input name=\"password\" type=\"password\">
                <button type=\"submit\">Prihlásiť sa.</button>
                </form>";
        }
    ?>


    <?php include_once "reusable/left_aside.php" ?>

    <?php include_once "reusable/right_aside.php" ?>

    <?php include_once "reusable/footer.php" ?>

</body>
</html>