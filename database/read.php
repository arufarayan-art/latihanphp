<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "latihanphp";

$conn = new mysqli($hostname, $username, $password, $dbname) or die("Koneksi gagal: " . $conn->connect_error);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "SELECT `id`, `nama_hero`, `tipe_hero`, `damage` FROM `latihanphp`.`tabel_hero_mm` WHERE `id` = 1";

$query = $conn->query($sql);

if ($query->num_rows != 0) {
    while ($row = $query->fetch_assoc()) {
       // var_dump($row);
       echo $row["nama_hero"] . " - " . $row["tipe_hero"] . " - " . $row["damage"];
    }
}else {
    var_dump($query);
}