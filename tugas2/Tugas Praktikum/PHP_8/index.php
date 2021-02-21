<?php
session_start();
if(isset($_POST['login'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if($user == "Syauqi" && $pass == "12345"){
        $_SESSION['login'] = $user;
        echo "<h1>Anda berhasil MASUK </h1>";
        echo "<h2>Klik <a href='sess2.php'>di sini </a> untuk menuju ke halaman pemeriksaan <br>";
    }else{
        echo "Login Gagal";
    }
}else{
?>
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
    <h1>Login Page</h1>
    <form action="" method="post">
        <span>Username</span><br>
        <input type="text" name="user" id="input"> <br><br>
        <span>Password</span><br>
        <input type="password" name="pass" id="input"> <br><br>
        <input type="submit" value="Login" id="log" name="login"> <a href="">Forgot password?</a>
    </form>
</div>
</body>
</html>
<?php
    }
?>