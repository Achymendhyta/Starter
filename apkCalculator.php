<html>
<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
	<script src="bootstrap/jquery.min.js"></script>
	<script src="bootstrap/bootstrap.min.js"></script>
<title> Calculator </title>
</head>
<body>
<div align="center">
<hr>
	<h1><li class="fa fa-calculator"></li>&nbsp;&nbsp;Calculator</h1>
<hr><br>
<form method="post" action="">
<table class="table-condensed table-striped table-hover table-responsive table-bordered">
	<tr>
		<td><b><center>1<sup>st</sup> Number</center></b></td>
		<td><input type="number"name="A1" required="required" placeholder="Please enter number" class="form-control"></td>
	</tr>
	<tr>
		<td><b><center>2<sup>nd</sup> Number</center></b></td>
		<td><input type="number"name="A2" required="required" placeholder="Please enter number" class="form-control"></td>
	</tr>
	<tr>
		<td colspan="2">
			<center>
			<div class="btn-group btn-lg">
			<input type="submit" name="Tambah" value=" + " role="button" class="btn btn-danger">
			<input type="submit" name="Kurang" value=" - " role="button" class="btn btn-warning">
			<input type="submit" name="Kali" value=" x " role="button" class="btn btn-success">
			<input type="submit" name="Bagi" value=" / " role="button" class="btn btn-primary">
			</center>		
			</div>
		</td>
	</tr>
</table><br>

</form>
<br>
<?php
if(isset($_POST['Tambah'])){
$Plus=$_POST['A1']+$_POST['A2'];
echo "<b>";
echo $_POST['A1'];
echo "</b>";
echo " + ";
echo "<b>";
echo $_POST['A2'];
echo "</b>";
echo " = ";
echo "<b>";
echo $Plus;
echo "</b>";}
if(isset($_POST['Kurang'])){
$Minus=$_POST['A1']-$_POST['A2'];
echo "<b>";
echo $_POST['A1'];
echo "</b>";
echo " - ";
echo "<b>";
echo $_POST['A2'];
echo "</b>";
echo " = ";
echo "<b>";
echo $Minus;
echo "</b>";}
if(isset($_POST['Kali'])){
$Times=$_POST['A1']*$_POST['A2'];
echo "<b>";
echo $_POST ['A1'];
echo "</b>";
echo " x ";
echo "<b>";
echo $_POST['A2'];
echo "</b>";
echo " = ";
echo "<b>";
echo $Times;}
if(isset($_POST['Bagi'])){
$Divided=$_POST['A1']/$_POST['A2'];
echo "<b>";
echo $_POST['A1'];
echo "</b>";
echo " / ";
echo "<b>";
echo $_POST['A2'];
echo "</b>";
echo " = ";
echo "<b>";
echo $Divided;
echo "</b>";}
?>
<hr>
<footer>Calculator | PHP Project
<br>Made by <b>Farell Faiz <li class="fa fa-check-circle"></li></b>
</footer>
</div>
</body>
</html>