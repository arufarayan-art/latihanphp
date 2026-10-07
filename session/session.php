<?php

session_start();

$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

if (isset($_SESSION['username'])
and isset($_SESSION['password'])) {
    echo "Selamat anda telah login!";
} else {
    echo "Anda belum login";
}