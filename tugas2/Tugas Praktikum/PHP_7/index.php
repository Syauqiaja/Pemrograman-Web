<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color: rgb(23, 23, 43) ;
        }
        #page{
            background-color: white;
            border-radius: 5px;
            position: relative;
            margin-top: 13%;
            left: 33%;
            width: 400px;
            padding: 12px 18px;
            height: 350px;
        }

    </style>
    <title>Tugas 4</title>
</head>
<body>

</body>
</html>
<?php
    $bil = 2020;
    $ang = 2020;
    echo "<div id='page' style='height: 200px; font-family: Segoe UI; line-height:20px; font-size :15px; font-weight : 400;'>";

    echo "Menggunakan funtion passing by value : <br>";
    echo "Nilai variable awal : $bil <br>";
    byvalue($bil);
    function byvalue($a){
        $a -= 1000;
    echo "Dalam fungsi : $a <br>";
    }
    echo "Sesudah fungsi : $bil <br><br>";

    echo "Menggunakan funtion passing by reference : <br>";
    echo "Nilai variable awal : $bil <br>";
    byref($ang);
    function byref(&$a){
        $a -= 1000;
    echo "Dalam fungsi : $a <br>";
    }
    echo "Sesudah fungsi : $ang <br><br>";

    echo "</div>";
?>