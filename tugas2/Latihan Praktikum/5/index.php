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
        function show(kal, war, uku) {
            var kalimat = new String(kal);
            if(war == "Biru"){
                kalimat=kalimat.fontcolor("blue");
            }else if(war == "Merah"){
                kalimat=kalimat.fontcolor("red");
            }else if(war == "Hitam"){
                kalimat=kalimat.fontcolor("black");
            }else if(war == "Hijau"){
                kalimat=kalimat.fontcolor("green");
            }
            kalimat=kalimat.fontsize(parseInt(uku));
            document.writeln(kalimat);
        }
    </script>

    Text &nbsp&nbsp&nbsp: <input type="text" id="txt"> <br>
    Warna &nbsp: <select id="warna">
                <option value="Biru">Biru</option>
                <option value="Merah">Merah</option>
                <option value="Hitam">Hitam</option>
                <option value="Hijau">Hijau</option>
            </select> <br>
    Ukuran : <input type="number" id="size"> <br>
    <input type="button" value="Cetak" onclick="show(txt.value, warna.value, size.value)">
</body>
</html>