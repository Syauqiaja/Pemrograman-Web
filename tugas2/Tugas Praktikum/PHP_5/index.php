<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color: rgb(23, 23, 43);
        }
        #page{
            background-color: white;
            border-radius: 5px;
            position: relative;
            margin-top: 13%;
            left: 33%;
            width: 400px;
            padding: 12px 18px;
            height: 350px;
        }

        table,tr,td,th{
            padding: 5px 15px;
            border: 2px solid rgb(60, 60, 110);
            border-collapse: collapse;
        }
    </style>
    <title>Tugas 4</title>
</head>
<body>
</body>
</html>
<?php
    
        $row = array(
            array("Sepeda", "1", "20000"),
            array("Baju", "5", "4000"),
            array("Laptop", "2", "10000"),
            array("Micin", "9", "2000"),
            array("Pensil", "5", "1500")
        );
        
        echo "<div id='page' style='height: 200px; font-family: Segoe UI; line-height:20px; font-size :15px; font-weight : 400;'>";
        echo "<table>";
        echo "<tr><th>Barang</th><th>Kuantitas</th><th>Harga</th><th>Total Harga</th></tr>";
        for($i=0; $i<count($row); $i++){
            echo "<tr>";
            for($j=0; $j<count($row[$i]); $j++){
                echo "<td>";
                echo ($row[$i][$j]);
                echo "</td>";
            }
            echo "<td>"; echo ($row[$i][1]*$row[$i][2]); echo"</td>";
            echo "</tr>";
        }
        
        echo "</table></div>";
?>