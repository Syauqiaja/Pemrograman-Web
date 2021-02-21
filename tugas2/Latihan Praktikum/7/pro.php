<?php
    if (isset($_POST['submit'])) {
        $jur = $_POST['jur'];
        echo "<h1> Jurusanmu adalah <span style='color:red'> $jur </span></h1>";
    }
?>