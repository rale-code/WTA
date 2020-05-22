<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "homestead";
$password = "secret";
$dbname = "atp";

$GLOBALS['conn'] = new mysqli($servername, $username, $password, $dbname);
$conn = $GLOBALS['conn'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
