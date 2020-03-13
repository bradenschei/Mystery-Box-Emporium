<?php

$dbServername = 'localhost';
$dbUsername = 'mahs_bscheidecker';
$dbPassword = 'mustangs';
$dbName = 'mahs_bscheidecker';

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
}
