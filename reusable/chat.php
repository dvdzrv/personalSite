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