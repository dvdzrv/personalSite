<?php
$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "Sklad123.";
$DB_name = "SzomolaiProjekt";

$DB_con = mysqli_connect($DB_host, $DB_user, $DB_pass, $DB_name);


$DB_req = "INSERT INTO `messages` (`ID`, `name`, `message`) VALUES (NULL, '" . $_POST["meno"] ."', '" . $_POST["sprava"] . "')";
$DB_res = mysqli_query($DB_con, $DB_req);
header("location: index.php");
?>