<?php

$env = parse_ini_file(".env");

$DB_host = $env['DB_HOST'];
$DB_user = $env['DB_USER'];
$DB_pass = $env['DB_PASS'];
$DB_name = $env['DB_NAME'];

$DB_con = mysqli_connect($DB_host, $DB_user, $DB_pass, $DB_name);

if (isset($_POST["name"]) and isset($_POST["message"])){
    $DB_req = "INSERT INTO `messages` (`ID`, `name`, `message`) VALUES (NULL, '" . $_POST["meno"] ."', '" . $_POST["sprava"] . "')";
    $DB_res = mysqli_query($DB_con, $DB_req);
    mysqli_close($DB_con);
    header("location: index.php");
} else {
    echo "Empty name or message!";
}
?>