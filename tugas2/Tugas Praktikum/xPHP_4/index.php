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
    <h1>Cetak Kwitansi</h1>
    <form action="pro.php" method="post">
        <div class="contain left">
            Barang 1 <br>
            <input type="text" name="brg1[]">
        </div>
        <div class="contain mid">
            Kuantitas 1 <br>
            <input type="text" name="brg1[]">
        </div>
        <div class="contain right">
            Harga 1 <br>
            <input type="text" name="brg1[]">
        </div> <br>
        <div class="contain left">
            Barang 2 <br>
            <input type="text" name="brg2[]">
        </div>
        <div class="contain mid">
            Kuantitas 2 <br>
            <input type="text" name="brg2[]">
        </div>
        <div class="contain right">
            Harga 2 <br>
            <input type="text" name="brg2[]">
        </div> <br>
        <div class="contain left">
            Barang 3 <br>
            <input type="text" name="brg3[]">
        </div>
        <div class="contain mid">
            Kuantitas 3 <br>
            <input type="text" name="brg3[]">
        </div>
        <div class="contain right">
            Harga 3 <br>
            <input type="text" name="brg3[]">
        </div>
        <input type="submit" value="Submit" id="log"name="login">
    </form>
</div>
</body>
</html>