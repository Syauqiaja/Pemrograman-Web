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
            overflow: scroll;
            height: 350px;
        }
        #blok{
            position: relative;
            top: 40%;
            float: left;
            width: 50px;
            height: 40px;
        }
    </style>
    <title>Tugas 4</title>
</head>
<body>

</body>
</html>
<?php
    $warna = array("red", "orange", "yellow", "green", "blue", "navy","indigo");
    echo "<div id='page' style='height: 200px; font-family: Segoe UI; line-height:20px; font-size :15px; font-weight : 400;'>";

    for($i = 0; $i<count($warna); $i++){
        echo "<div id='blok'style='background-color:$warna[$i];'></div>";
    }
    echo "</div>";
?>