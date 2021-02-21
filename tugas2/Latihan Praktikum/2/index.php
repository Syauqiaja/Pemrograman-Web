<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script lang="javascript">
        var jam=0;
        var pagi = "<h1>Selamat Pagii.!!!</h1>";
        var siang = "<h1>Selamat Siang.!!!</h1>";
        var sore = "<h1>Selamat Sore.!!!</h1>";
        var malam = "<h1>Selamat Malam.!!!</h1>";
        var tidur = "<h1>Selamat Tidur...</h1>";

        jam = prompt("Jam Berapa Sekarang?");

        if(jam>=6 && jam<=10){
            document.writeln(pagi);
        }else if(jam>=11 && jam<=14){
            document.writeln(siang);
        }else if(jam>=15 && jam<=17){
            document.writeln(sore);
        }else if(jam>=18 && jam<=24){
            document.writeln(malam);
        }else if(jam>=1 && jam<=6){
            document.writeln(tidur);
        }
    </script>
</body>
</html>