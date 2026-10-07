<?php

//$namaHero = $_GET["nama"];
//echo "Nama hero saya: ".$namaHero;

if (isset($_GET["nama"])) {
    $namaHero = $_GET["nama"];
    echo "Nama hero saya: " . $namaHero;
}

if (isset($_POST["nama"])) {
    $namaHero = $_POST["nama"];
    echo "Nama hero saya: " . $namaHero;
}

?>

<form action="data.php" method="GET">
    Nama hero: <input type="text" name="nama">
    <input type="submit" />
</form>
<form action="session.php" method="POST">
    Username: <input type="text" name="username">
    Password: <input type="password" name="password">
    <input type="submit" />
</form>