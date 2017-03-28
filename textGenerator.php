<html>
<header>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
	<script src="bootstrap/jquery.min.js"></script>
	<script src="bootstrap/bootstrap.min.js"></script>
<title>Descriptive Text Generator</title>
</header>
<body>
	<div align="center">
	<hr>
		<h1><li class="fa fa-pencil"></li>&nbsp;&nbsp;Descriptive <font color="orange">Text Generator</font></h1>
<hr><br>
<form method="post" action="">
<table class="table-bordered table-condensed table-hover table-responsive table-striped">
<tr>
	<td colspan="2"><b><center><font color="orange">Only Available in Bahasa</font></center></b></td>
</tr>
<tr>
<td width="100">Nama</td>
<td><input class="form-control" name="Nama" type="text" autofocus required="required" placeholder=" Nama"></td>
</tr>
<tr>
<td width="100">Kelas</td>
<td><input class="form-control" name="Kelas" type="number" autofocus min="0" max="6" required="required" placeholder=" Kelas"></td>
</tr>
<tr>
<td width="100">Sekolah</td>
<td><input class="form-control" name="Sekolah" type="text" autofocus required="required" placeholder=" (Jenjang) (Nama Sekolah)"></td>
</tr>
<tr>
<td width="100">Hobi</td>
<td><input class="form-control" name="Hobi" type="text" autofocus required="required" placeholder=" Hobi"></td>
</tr>
<tr>
<td height="42" colspan="2"><center><input name="kirim" type="submit" value="Submit" class="btn-lg btn-block btn btn-warning"></center></td>
</tr>
</table>
</form>
<br>
<?php
if(isset($_POST['kirim'])){
	echo "<table class='table-bordered table-condensed table-hover table-responsive table-striped'>";
	echo "<tr><td>";
	echo "<center><b>";
	echo "Result";
	echo "</td></tr>";
	echo "<tr><td>";
	echo "Saya bernama ";
	echo $_POST['Nama'];
	echo ". Sekarang saya bersekolah di ";
	echo $_POST['Sekolah'];
	echo " kelas ";
	echo $_POST['Kelas'];
	echo ". Aku memiliki hobi yaitu ";
	echo $_POST['Hobi'];
	echo ".";
	echo "</td></tr>";
	echo "</table>";
}
?>
<hr>
<footer>Descriptive Text Generator | PHP Project
<br> Made by <b>Farell Faiz <li class="fa fa-check-circle"></li></b></footer></div>
</div>
</body>
</html>