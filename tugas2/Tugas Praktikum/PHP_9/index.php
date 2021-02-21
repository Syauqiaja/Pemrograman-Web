<!DOCTYPE html>
<html lang="en">
<head>
    <Title>Tugas 1</Title>
    <link rel="stylesheet" href="stl.css">
</head>
<body>
    <div id="Header">
        <b><span style="color: #CC2936;">INI HANYA </span>HEADER</b>
    </div>
    <div id="navbar">
        <ul>
        <li><a href="">Home</a></li>
        <li><a href="">Info</a></li>
        <li><a href="">Help</a></li>
        <li><a href="">News</a></li>
        <li style="float: right;"><a href="">Login</a></li>
        </ul>
    </div><br><br>
    <div id="leftrow">
        <h1 style="color : rgb(68, 68, 68); text-align:center;">PENDAFTARAN</h1><br>
        <form action="pro.php" method="POST" id="form1">
            <div>
            Nama Lengkap <span style="color: red;">*</span> <br>
            <input type="text" name = "nama" id="nama" class="txt"><br><br>
            </div> 


            <div>
                Jenis Kelamin <br>
                <label><input type="radio" name="kelamin" id="kelamin" value="pr"> Perempuan </label><br>
                <label><input type="radio" name="kelamin" id="kelamin" value="lk"> Laki-laki</label> <br>
            </div> <br>


            Alamat <br>
            <div>
            <input type="text" id="alamat"class="txt"><br><br>
            </div> 


            Telepon <span style="color: red;">*</span><br>
            <div>
            <input type="text" id="telepon"class="txt" name="telp"><br><br>
            </div> 


            <div>
            Kota <br>
            <input type="text" id="kota"class="txt"><br><br>
            </div> 


            <div>
                Tanggal Lahir <br>
                <input type="date" name="date" id="tanggal">   
            </div><br>


            <div>
            Pendidikan <span style="color: red;">*</span><br>
            <select id="pendidikan" name="pend">
                <option value="">--Pilih--</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="D3">D3</option>
                <option value="S1">S1</option>
            </select>
            </div><br>


            <div>
                Minat Olahraga <br>
                <label><input type="checkbox" name="hobi" id="hobi" value="game"> Bermain Game </label><br>
                <label><input type="checkbox" name="hobi" id="hobi" value="bola"> Sepak Bola </label><br>
                <label><input type="checkbox" name="hobi" id="hobi" value="mancing"> Memancing </label><br>
                <label><input type="checkbox" name="hobi" id="hobi" value="basket"> Basket </label><br>
                <label><input type="checkbox" name="hobi" id="hobi" value="voli"> Voli </label><br>
            </div> <br>

            
            <div>
            Email <span style="color: red;">*</span><br>
            <input type="email" name="email" id="idemail"class="txt"><br><br>
            </div>
            <div>
            Password <span style="color: red;">*</span><br>
            <input type="password" name="pass" id="passid"class="txt"><br><br>
            </div>
            <div>
            Confirm Password <span style="color: red;">*</span><br>
            <input type="password" name="conpass"class="txt"> <br> <br>
            </div>
            <div>
            Pengalaman <span style="color: red;">*</span><br>
            <textarea id="big" name="peng" placeholder="Ceritakan pengalamanmu..."></textarea>
            </div><br>
            <div>
                <input type="reset" value="Hapus"> <input type="submit" value="Kirim" name="login">
            </div>
            
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
            <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
            <script src="scr.js"></script>
</body>
</html>