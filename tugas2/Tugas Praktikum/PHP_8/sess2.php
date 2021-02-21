<?php
session_start();
if(isset($_SESSION['login'])){
    echo "<h2>Anda sudah masuk ke halaman ini !, hanya orang tertentu yang bisa </h2><br>";
    echo "<h3>Klik <a href='sess3.php'> di sini</a> untuk log out session</h3><br>";
}else{
    die("<h1 style='color:red;'> ANDA DILARANG MASUK, LOGIN TERLEBIH DAHULU 
        <a href='index.php'>DI SINI!!</a></h1>");
}