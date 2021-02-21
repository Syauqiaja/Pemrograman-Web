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
        
        $min = $_POST['min'];
        $max = $_POST['max'];
        
        for($i=$min; $i<=$max; $i++){
            $isPrime = "true";
            for($j=2; $j*$j<=$i; $j++){
                if($i%$j == 0){
                    $isPrime = "false";
                    break;
                }
            }
            if($isPrime == "true"){
                echo "$i &nbsp";
            }
        }
        echo "</div>";
    }
?>