<?php
session_start();
if(isset($_SESSION['login'])){
    unset($_SESSION['login']);
    session_destroy();

    echo "<h2>Anda sudah berhasil LOG OUT</h2> <br>";
    echo "<h2><a href='index.php'>Klik disini untuk login</a><h2><br>";
    echo "<h2>Anda Tidak bisa lagi masuk ke <a href='sess2.php'>halaman ini (halaman pemeriksaan)</a></h2><br>";
}