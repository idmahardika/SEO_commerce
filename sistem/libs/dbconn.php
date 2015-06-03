<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "seo_commerce"; //tinggal ganti nama db
// menyambungkan ke sql
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_errno) {
    printf("Connect failed: %s\n", $conn->connect_error);
    exit();
}