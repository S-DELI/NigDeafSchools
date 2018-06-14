<?php
$server = "localhost";
$username = "root";
$pass = "";
$dbname = "deafsearch";

$conn = new mysqli($server, $username, $pass);
mysqli_select_db($conn, $dbname);


?>