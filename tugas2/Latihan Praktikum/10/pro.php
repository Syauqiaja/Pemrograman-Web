<?php
    if(isset($_POST['submit'])){
        if(isset($_POST['user']) && isset($_POST['sandi'])){
            $username = $_POST['user'];
            $sandi = $_POST['sandi'];
            if($username == "Syauqi" && $sandi == "1234"){
                echo "<h1>LOGIN BERHASIL</h1>";
            }else{
                echo "<h1>LOGIN GAGAL</h1>";
            }
        }
    }
?>