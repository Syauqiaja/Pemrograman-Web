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
        var sen=0, sel=0, rab=0, kam=0, jum=0;

        sen = prompt("Jumlah mahasiswa yang masuk pada senin");
        sel = prompt("Jumlah mahasiswa yang masuk pada selasa");
        rab = prompt("Jumlah mahasiswa yang masuk pada rabu");
        kam = prompt("Jumlah mahasiswa yang masuk pada kamis");
        jum = prompt("Jumlah mahasiswa yang masuk pada jumat");
        
        document.write("Senin &nbsp: ");
        for(var i=0; i<sen; ++i){
            document.write("x");
        }
        document.write("<br>");
        document.write("Selasa : ");
        for(var i=0; i<sel; ++i){
            document.write("x");
        }
        document.write("<br>");
        document.write("Rabu &nbsp&nbsp: ");
        for(var i=0; i<rab; ++i){
            document.write("x");
        }
        document.write("<br>");
        document.write("Kamis : ");
        for(var i=0; i<kam; ++i){
            document.write("x");
        }
        document.write("<br>");
        document.write("Jumat &nbsp: ");
        for(var i=0; i<jum; ++i){
            document.write("x");
        }
        document.write("<br>");
    </script>
</body>
</html>