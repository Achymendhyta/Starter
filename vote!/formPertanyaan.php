<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Form Pertanyaan</title>
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
				<h1><li class="fa fa-edit"></li>&nbsp; Form <font color="orange">Pertanyaan</font></h1>
				<div class="breadcrumb" style="height: 30px;">
				<ol class="breadcrumb">
					<li><span class="fa fa-home"></span>&nbsp;</li>
					<li><font face="ubuntu"><b>egorithm</b></font></li>
					<li>project</li>
					<li>vote!</li>
				</ol>
			</div>
			</div>
			
			<form id="form1" name="form1" method="post">
				<table class="table-condensed table-hover table-responsive" width="30%">
					<tr>
						<td>
							<div class="input-group">
								<span class="input-group-addon"><li class="fa fa-sort-numeric-asc"></li></span>
								<input type="text" name="kd_vote" class="form-control" required placeholder="Kode Vote">
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="input-group">
								<span class="input-group-addon"><li class="fa fa-question"></li>&nbsp;</span>
								<input type="text" name="pertanyaan" class="form-control" required placeholder="Pertanyaan">
							</div>
						</td>
					</tr>
					<tr>
						<td colspan="2"><center><button type="submit" name="vote" class="btn btn-block btn-warning"><li class="fa fa-check"></li> &nbsp;Save</button></center></td>
					</tr>
				</table>
			</form>
			
			<!-- Mesin -->
			<?php
				include "koneksi.php";
				if(isset($_POST['vote'])){
					$kd_vote=$_POST['kd_vote'];
					$pertanyaan=$_POST['pertanyaan'];
					$simpan=mysqli_query("insert into pertanyaan(kd_vote,pertanyaan)values($kd_vote,$pertanyaan)")or die(mysqli_error());
				if($simpan){
					echo "Data Saved";
				}else{
					echo "Failed :(";
				}
				}
			?>
			
			<!--Footer -->
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
		</div>
	</body>
</html>