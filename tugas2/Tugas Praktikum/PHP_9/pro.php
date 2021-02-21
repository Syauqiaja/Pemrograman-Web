<!DOCTYPE html>
<html lang="en">
<head>
    <Title>Tugas 1</Title>
    <link rel="stylesheet" href="stl.css">
</head>
<body>
    <div id="Header">
        <b><span style="color: #CC2936;">INI HANYA </span>HEADER</b>
    </div>
    <div id="navbar">
        <ul>
        <li><a href="">Home</a></li>
        <li><a href="">Info</a></li>
        <li><a href="">Help</a></li>
        <li><a href="">News</a></li>
        <li style="float: right;"><a href="">Login</a></li>
        </ul>
    </div><br><br>
    <div id="leftrow">
        <h1 style="color : rgb(68, 68, 68); text-align:center;">Data Kamu</h1><br>
<?php
    if(isset($_POST['login'])){
        echo "Nama : ".$_POST['nama']." <br>";
        echo "Jenis kelamin : ".$_POST['kelamin']." <br>";
    }
?>

    </div>
</body>
</html>