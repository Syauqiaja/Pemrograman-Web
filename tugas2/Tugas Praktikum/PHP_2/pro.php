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
        echo "<div id='page' style='height: 300px; font-family: Segoe UI; padding:90px 0px; font-size :35px; font-weight : 700; text-align:center; box-sizing:border-box;'>";
        if($_POST['makan'] != ""){
            switch($_POST['makan']){
                case "12x" :
                    echo "Kamu pasti kelaparan";
                    break;
                case "1x" :
                    echo "Makanlah lebih banyak";
                    break;
                case "2x" :
                    echo "Cukup, tambah lagi agar lebih sehat";
                    break;
                case "3x" :
                    echo "Sudah cukup, semoga kamu sehat";
                    break;
                case "4x" :
                    echo "Sepertinya terlalu banyak";
                    break;
                case "5x" :
                    echo "Makanmu terlalu banyak, gak takut gendut?";
                    break;
            }
        }
        echo "</div>";
    }
?>