
if (isset($_SESSION['username'])
and isset($_SESSION['password'])) {
    echo "Selamat anda telah login!";
    echo "<a href=\"logout.php\">Logout</a>";
} else {
    echo "Anda belum login";
}