<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "sqmap";

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn  = new mysqli($host, $username, $password, $dbname);
} catch (PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}
?>
