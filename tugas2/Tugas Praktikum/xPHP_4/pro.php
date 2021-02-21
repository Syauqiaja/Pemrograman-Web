<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tugas 4 Reply</title>
</head>
<body>
</body>
</html>
<?php
    if(isset($_POST['login'])){
        echo "<div id='page' style='height: 200px; font-family: Segoe UI; line-height:20px; font-size :15px; font-weight : 400;'>";
        echo "<table><tr><th>Nama Barang</th><th>Quantitas</th><th>Harga</th>";
        for($i = 0; $i<count($a); $i++){
            if($a[i] != $_POST['login']){
                for($j=0; $j<count($a[$i]); $j++){
                    echo "<td> $a[$i][$j] </td>";
                }
            }
        }
        echo "</tr></table>";
    }
?>