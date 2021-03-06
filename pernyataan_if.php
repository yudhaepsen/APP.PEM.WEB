<html><head><title> Statement IF </title></head>
<body>
<?php  error_reporting(0);
echo "<form action=\$php_self\" method=\"post\">";
$nilai1=$_POST['nilai1'];
echo"Berapa Nilai PHPmu? :
<input name=\"nilai1\" value=\"$nilai1\" size=\"3\" type=\"text\" value =\"$nilai1\">
<input name=\"cek\" type=\"submit\" value=\"Cek\"> </form>";
if($_POST['cek']) //perintah untuk menguji penekanan tombol Cek
{echo"<br><h1>";
	if ($nilai1=="")
		{echo"Anda Belum menentukan Nilai..!";}
	elseif(!is_numeric($nilai1)) //jika nilai tidak bertype numeric
		{echo"Ini Bukan Nilai Angka";}
	else
		{
			if($nilai1<=30) //statement pertama
				{echo"Anda mendapat nilai huruf <b> E </b>";}
			elseif ($nilai1<=50) //statement kedua
				{echo"Anda mendapat nilai huruf <b> D </b>";}
			elseif ($nilai1<=70) //statement ketiga
				{echo"Anda mendapat nilai huruf <b> C </b>";}
			elseif ($nilai1<=85) //statement keempat
				{echo"Anda mendapat nilai huruf <b> AB </b>";}
			else
				{echo"Anda mendapat nilai huruf <b> A </b>";}
		}
	echo"</h1>";
}
?>
</body>
</html>