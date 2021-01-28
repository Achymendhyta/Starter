<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calculator</title>
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
	<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
	<style>
			.footer{
				position: fixed;
				left: 0;
				bottom: 0;
				width: 100%;
			}
			 a{
				color: #000;
				color:#000;
				text-decoration:none;
			}
	</style>
</head>
<body>
	
	<div align="center">
		<div class="well">
			<h1>
				<li class="fa fa-calculator"></li>&nbsp; Simple <font color="orange">Calculator</font>
			</h1>
			<div class="breadcrumb" style="height: 30px;">
				<ol class="breadcrumb">
					<li><span class="fa fa-home"></span>&nbsp;</li>
					<li><font face="ubuntu"><b>egorithm</b></font></li>
					<li>project</li>
					<li>calculator</li>
				</ol>
			</div>
		</div>
		
		<form id="form1" name="form1" method="post">
			<table class="table-hover table-condensed table-responsive" style="width: 30%; height: 10%;">
				<tr>
					<td colspan="2"><button type="submit" name="all" class="btn btn-default btn-block">Stanley's Maths!</button></td>
				</tr>
				<tr>
					<td><center><b>1<sup>st</sup> Number</b></center></td>
					<td><input name="angka1" type="number" required="required" id="angka1" class="form-control" placeholder="Input your first number here."></td>
				</tr>
				<tr>
					<td><center><b>2<sup>nd</sup> Number</b></center></td>
					<td><input name="angka2" type="number" required="required" class="form-control" id="angka2" placeholder="Input your second number here."></td>
				</tr>
				<tr>
					<td colspan="2"><center>
						<div class="btn-group" role="group">
							<button type="submit" name="tambah" class="btn btn-danger"><center>+</center></button>
							<button type="submit" name="kurang" class="btn btn-warning"><center>-</center></button>
							<button type="submit" name="kali" class="btn btn-success"><center>x</center></button>
							<button type="submit" name="bagi" class="btn btn-info"><center>:</center></button>
						</div></center>
					</td>
				</tr>
			</table>
		</form>
		
		<?php
			if(isset($_POST['tambah'])){
				$angka1=$_POST['angka1'];
				$angka2=$_POST['angka2'];
				$tambah=$angka1 + $angka2;
				echo $tambah;
			}
			if(isset($_POST['kurang'])){
				$angka1=$_POST['angka1'];
				$angka2=$_POST['angka2'];
				$kurang=$angka1 - $angka2;
				echo $kurang;
			}
			if(isset($_POST['kali'])){
				$angka1=$_POST['angka1'];
				$angka2=$_POST['angka2'];
				$kali=$angka1 * $angka2;
				echo $kali;
			}
			if(isset($_POST['bagi']));
				$angka1=$_POST['angka1'];
				$angka2=$_POST['angka2'];
				$bagi=$angka1 / $angka2;
				echo $bagi;
		?>
		<footer class="footer"><hr>
				<div align="left" class="col-lg-1" style="padding-bottom: 20px; color: black">
					<a href="../index.html">
						<button class="btn"><span class="fa fa-chevron-left"></span></button>
					</a>
				</div>
				<div style="padding-top: 6px; padding-right: 100px;">
					Made with <font color="#FF8DF0"><li class="fa fa-heart"></li></font> by <font color="orange"><b>Farell Faiz</b></font>
				</div>
			</footer>
</body>
</html>