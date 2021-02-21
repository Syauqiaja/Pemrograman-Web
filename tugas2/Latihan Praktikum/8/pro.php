<?php
    if(isset($_POST['submit'])){
        if(!empty($_POST['band'])){
            foreach($_POST['band'] as $checked){
                echo "+ $checked <br>";
            }
        }
    }
?>