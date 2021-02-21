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
        function tambah(a,b){
            a=parseInt(a);
            b=parseInt(b);
            alert(a+b);
        }
        function kurang(a,b){
            a=parseInt(a);
            b=parseInt(b);
            alert(a-b);
        }
        function kali(a,b){
            a=parseInt(a);
            b=parseInt(b);
            alert(a*b);
        }
        function bagi(a,b){
            a=parseInt(a);
            b=parseInt(b);
            alert(a/b);
        }
    </script>
    Masukkan Angka 1 : <input type="text" id="a1"><br/>
    Masukkan Angka 2 : <input type="text" id="a2"><br/>
    <input type="button" value="+" onclick="tambah(a1.value, a2.value)">
    <input type="button" value="-" onclick="kurang(a1.value, a2.value)">
    <input type="button" value="x" onclick="kali(a1.value, a2.value)">
    <input type="button" value="/" onclick="bagi(a1.value, a2.value)">
</body>
</html>