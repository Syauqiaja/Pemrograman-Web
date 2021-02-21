<!DOCTYPE html>
<html lang="en">
<head>
    <Title>Tugas 1</Title>
    <link rel="stylesheet" href="le.css">
</head>
<body>
    <script lang="javascript">
        function cekstr(val){
            if(parseInt(val) == val){
                return false;
            }
            return true;
        }
        function cekform(){
            if(form1.nama.value == ""){
                form1.nama.focus();
                alert("Nama belum diisi!");
                return;
            }else if(form1.telepon.value == ""){
                form1.telepon.focus();
                alert("Nomor telepon belum diisi!");
                return;
            }else if(form1.pendidikan.value == "pilih"){
                form1.pendidikan.focus();
                alert("Pendidikan belum dipilih!");
                return;
            }else if(form1.big.value.length <= 50){
                form1.big.focus();
                alert("Pengalaman harus lebih dari 50 karakter!");
                return;
            }

            if(form1.nama.value != ""){
            
                if(!cekstr(form1.nama.value)){
                    form1.nama.focus();
                    alert("Nama harus berupa String !");
                    return;
                }
            }
            if(form1.telepon.value != ""){
                var x = parseInt(form1.telepon.value);
                if(x != form1.telepon.value){
                    form1.telepon.focus();
                    alert("Telepon harus berupa Number");
                    return;
                }else if(form1.telepon.value.length >8 || form1.telepon.value.length<6){
                    form1.telepon.focus();
                    alert("Telepon harus terdiri dari 6-8 angka!");
                    return;
                }   
            }
            if(form1.kota.value != ""){
                if(!cekstr(form1.kota.value)){
                    form1.kota.focus();
                    alert("Kota harus berupa String!");
                    return;
                }
            }
            if(form1.alamat.value != ""){
                if(!cekstr(form1.alamat.value)){
                    form1.alamat.focus();
                    alert("Kota harus berupa String!");
                    return;
                }
            }
            if(form1.tgl.value !=""||form1.tgl.value !=""||form1.thn.value !=""){
                if(cekstr(form1.tgl.value) || cekstr(form1.bln.value) || cekstr(form1.thn.value)){
                    alert("Gunakan angka pada tanggal, bulan dan tahun!");
                    return;
                }
                if(parseInt(form1.tgl.value) < 1 || parseInt(form1.tgl.value) > 31){
                    form1.tgl.focus();
                    alert("Masukkan tanggal antara 1-31");
                    return;
                }
                if(parseInt(form1.bln.value) < 1 || parseInt(form1.bln.value) > 12){
                    from1.bln.focus();
                    alert("Masukkan bulan antara 1-12");
                    return;
                }
                if(parseInt(form1.thn.value) < 1990 || parseInt(form1.thn.value) > 2018){
                    form1.thn.focus();
                    alert("Masukkan tahun antara 1990-2018");
                    return;
                }
            }
            document.form1.submit();
            
        }
    </script>
    <div id="Header">
        <b><span style="color: rgb(68, 68, 68);">INI HANYA </span>HEADER</b>
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
        <form action="pro.php" id="form1" onsubmit="cekform()">
            <div>
            Nama Lengkap <span style="color: red;">*</span> <br>
            <input type="text" id="nama"><br><br>
            </div> 
            Alamat <br>
            <div>
            <input type="text" id="alamat"><br><br>
            </div> 
            Telepon <span style="color: red;">*</span><br>
            <div>
            <input type="text" id="telepon"><br><br>
            </div> 
            <div>
            Kota <br>
            <input type="text" id="kota"><br><br>
            </div> 
            <div>
            Tanggal Lahir <br>
            <div>
            <input type="text" id="tgl" placeholder="1-31" style="width: 50px;"> / <input type="text" id="bln" placeholder="1-12" style="width: 50px;"> / <input type="text" id="thn" placeholder="1990-2018" style="width: 100px;">
            </div>
            </div><br>
            <div>
            Pendidikan <span style="color: red;">*</span><br>
            <select id="pendidikan">
                <option value="pilih">--Pilih--</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="D3">D3</option>
                <option value="S1">S1</option>
            </select>
            </div><br>
            <div>
            Pengalaman <span style="color: red;">*</span><br>
            <textarea id="big" placeholder="Ceritakan pengalamanmu..."></textarea>
            </div><br>
            <div>
                <input type="reset" value="Hapus"> <input type="button" value="Kirim"  onclick="cekform()">
            </div>
        </form>
    </div>
</body>
</html>