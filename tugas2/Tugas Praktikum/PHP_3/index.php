<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tugas 4</title>
</head>
<body>
<div id="page">
    <h1>Pilih Hobi</h1>
    <form action="pro.php" method="post">
        <span id="left"><input type="checkbox" name="hobi[]" value="Berenang"> Berenang</span>
        <span id="right"><input type="checkbox" name="hobi[]" value="Melukis"> Melukis</span> <br><br>
        <span id="left"><input type="checkbox" name="hobi[]" value="Membaca"> Membaca</span>
        <span id="right"><input type="checkbox" name="hobi[]" value="Main Game"> Main Game</span> <br><br>
        <span id="left"><input type="checkbox" name="hobi[]" value="Memasak"> Memasak</span>
        <span id="right"><input type="checkbox" name="hobi[]" value="Memancing"> Memancing</span> <br><br><br>
        <input type="submit" value="Submit" id="log"name="login">
    </form>
</div>
</body>
</html>