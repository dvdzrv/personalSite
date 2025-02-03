<?php

$env = parse_ini_file(".env");

$DB_host = $env['DB_HOST'];
$DB_user = $env['DB_USER'];
$DB_pass = $env['DB_PASS'];
$DB_name = $env['DB_NAME'];

$DB_con = mysqli_connect($DB_host, $DB_user, $DB_pass, $DB_name);


$DB_req = "INSERT INTO `messages` (`ID`, `name`, `message`) VALUES (NULL, '" . $_POST["meno"] ."', '" . $_POST["sprava"] . "')";
$DB_res = mysqli_query($DB_con, $DB_req);
header("location: index.php");
?>