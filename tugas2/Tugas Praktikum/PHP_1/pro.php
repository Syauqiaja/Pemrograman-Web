<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tugas 1 Reply</title>
</head>
<body>
</body>
</html>
<?php
    if(isset($_POST['login'])){
        echo "<div id='page' style='height: 200px; font-family: Segoe UI; line-height:200px; font-size :35px; font-weight : 700; text-align:center;'>";
        if($_POST['user'] == "Admin"){
            if($_POST['pass'] == "passadmin"){
                echo "Selamat Datang Pak Boss!";
            }else{
                echo "Maaf, log in gagal";
            }
        }else if($_POST['user'] == "Client"){
            if($_POST['pass'] == "passclient"){
                echo "Selamat Datang Client!";
            }else{
                echo "Maaf, log in gagal";
            }
        }else{
            echo "Maaf, log in gagal";
        }
        echo "</div>";
    }
?>