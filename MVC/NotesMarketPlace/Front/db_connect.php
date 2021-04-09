<?php

$dBServerName = "localhost";
$dBUserName = "root";
$dBPassword = "";
$dBDataBase = "notes_marketplace";

// Connect to Database
$conn = mysqli_connect($dBServerName,$dBUserName,$dBPassword,$dBDataBase);
if(!$conn) {
    die("Connection Failed " . mysqli_connect_error($conn));
}


?>