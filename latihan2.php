<html>
<head>
<title>MENGENAL FUNGSI STRING</title>
</head>
<body>
<?php
echo "Nama  : Yayuk Kurniawati<br>";
echo "Kelas : SKA-15.A2<br>";
echo "NPM   : 888740306150114<br>";
echo "Matakuliah   : Pemrograman Web<br>";
echo "<hr>";
echo "<h3>Program Sederhana Mengenal Fungsi String</h3>";
echo "<hr>";
echo"<b>";
	$a=100; $b=50;
	echo" \$a=100 <br> \$b=50<br><br>";
	echo" Hasil a x b = ".($a*$b)."<br>";
	echo" Hasil a + b = ".($a+$b)."<br>";
	echo" Hasil a - b = ".($a-$b)."<br>";
	echo" Hasil a / b = ".$a/$b."<br>";
	echo" Hasil a % b = ".$a%$b."<br><br><br>";
	
	echo"Apakah a <= b ? <br> Jwb:";
		if($a<=$b)
			{echo"benar";}
			else
			{echo"salah";}
	echo"<br><br>Apakah a == b ? <br> Jwb:";
		if($a==$b)
			{echo"benar";}
			else
			{echo"salah";}
	echo"<br><br>Apakah a <> b ? <br> Jwb:";
		if($a<>$b)
			{echo"benar";}
			else
			{echo"salah";}
	echo"<br>";
?>
</body>
</html>