<html>
<body>
<?php
$kampusku="STEKOM"
$alamat1="Jl. Majapahit 304 Semarang";
$alamat2="Jl. Majapahit 605 Semarang";
echo"<form action=\"linkform4.php\" method=\post\">";
echo"Mengrim 3 variabel sekaligus ke halaman link4.php<br>";
echo"<input name=\"kampusku\" type=\"hidden\"value=\"$kampusku\">";
echo"<input name=\"alamat1\" type=\"hidden\"value=\"$alamat1\">";
echo"<input name=\"alamat2\" type=\"hidden\"value=\"$alamat2\">";
echo"<input name=\"kirim\" type=\"submit\"value=\"kirimkan\">";
echo"</form>"
?>
</body>
</html>