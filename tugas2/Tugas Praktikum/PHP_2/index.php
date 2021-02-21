<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tugas 1</title>
</head>
<body>
<div id="page">
    <h1>Berapa kali kamu makan dalam sehari?</h1>
    <form action="pro.php" method="post">
        <span>Makan sehari : </span> 
        <select name="makan" id="makan">
            <option value="">--Pilihan--</option>
            <option value="12x">Dua hari 1x</option>
            <option value="1x">Sehari 1x</option>
            <option value="2x">Sehari 2x</option>
            <option value="3x">Sehari 3x</option>
            <option value="4x">Sehari 4x</option>
            <option value="5x">Sehari 5x</option>
        </select> <br><br> <br>
        <input type="submit" value="submit" id="log" name="login">
    </form>
</div>
</body>
</html>