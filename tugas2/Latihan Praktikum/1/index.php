<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script lang="javascript">
        var b1,b2,b3;
        var ha1=0,ha2=0,ha3=0;
        var j1=0,j2=0,j3=0;
        b1 = prompt("Masukkan nama barang 1");
        ha1 = prompt("Masukkan Harga "+b1);
        j1 = prompt("Kuantitas "+b1);
        b2 = prompt("Masukkan nama barang 2");
        ha2 = prompt("Masukkan Harga "+b2);
        j2 = prompt("Kuantitas "+b2);
        b3 = prompt("Masukkan nama barang 3");
        ha3 = prompt("Masukkan Harga "+b3);
        j3 = prompt("Kuantitas "+b3);

        document.write("<table border=1>");
        document.write("<tr><th>Nama Barang</th><th>Harga Barang</th><th>Kuantitas</th><th>Harga</th></tr>");
        document.write("<tr><td>"+b1);
        document.write("</td><td>"+ha1);
        document.write("</td><td>"+j1);
        document.write("</td><td>"+(ha1*j1));
        document.writeln("</td></tr>");
        document.write("<tr><td>"+b2);
        document.write("</td><td>"+ha2);
        document.write("</td><td>"+j2);
        document.write("</td><td>"+(ha2*j2));
        document.write("</td></tr>");
        document.write("<tr><td>"+b3);
        document.write("</td><td>"+ha3);
        document.write("</td><td>"+j3);
        document.write("</td><td>"+(ha3*j3));
        document.write("</td></tr>");
        // document.write("<tr><td>"+b2+"</td><td>"+ha2+"</td><td>"+j2+"</td><td>"+(h2*j2)+"</td></tr>");
        // document.write("<tr><td>"+b3+"</td><td>"+ha3+"</td><td>"+j3+"</td><td>"+(h3*j3)+"</td></tr>");
        document.write("<tr><td></td><td></td><td>Total</td><td>"+((ha1*j1)+(ha2*j2)+(ha3*j3)));
        document.write("</td></tr></table>");
    </script>
</body>
</html>