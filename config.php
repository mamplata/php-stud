<?php
$servername = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'dbStudent';

$conn = new mysqli($servername, $username, $pass, $dbname);

if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}
