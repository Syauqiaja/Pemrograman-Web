<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pilih band favorit anda </h1> <br>
    <form action="pro.php" method="POST">
        <input type="checkbox" name="band[]" value="Padi"> Padi <br>
        <input type="checkbox" name="band[]" value="Sehila on 7"> Sehila on 7 <br>
        <input type="checkbox" name="band[]" value="Dewa 19"> Dewa 19 <br>
        <input type="checkbox" name="band[]" value="Ungu"> Ungu <br>
        <input type="submit" name="submit" value="Pilih"> <br>
    </form>
</body>
</html>