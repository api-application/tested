<?php
$servername = "freedb.tech";
$username = "freedbtech_gunio";
$password = "Ola502837571";
$dbname = "freedbtech_zenondbajax";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
