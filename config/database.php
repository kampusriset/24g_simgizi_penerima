<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "sim_gizi";

try {
    $conn = new PDO(
        "mysql:host=$dbHost;dbname=$dbName",
        $dbUser,
        $dbPass
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}