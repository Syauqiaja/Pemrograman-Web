<?php
    if(isset($_POST['submit'])){
        $kartun = $_POST['film'];
        echo "Film kartun kesukaan anda adalah : <b style='color:blue'> $kartun </b>";
    }
?>