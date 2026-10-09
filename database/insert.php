<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "latihanphp";

$conn = new mysqli($hostname, $username, $password, $dbname) or die("Koneksi gagal: " . $conn->connect_error);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// membuat sql string untuk insert ke database
$sql = "INSERT INTO `latihanphp`.`tabel_hero_mm` (`nama_hero`, `tipe_hero`, `damage`) 
VALUES ('claude', 'trinity', 300),
       ('granger', 'marksman', 400),
       ('lancelot', 'assassin', 500)";

// eksekusi sql string ke database
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
