<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Import Data Member</title>
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
				<h1><li class="fa fa-vcard"></li>&nbsp; Import <font color="orange">Data Member</font></h1>
				<div class="breadcrumb" style="height: 30px;">
				<ol class="breadcrumb">
					<li><span class="fa fa-home"></span>&nbsp;</li>
					<li><font face="ubuntu"><b>egorithm</b></font></li>
					<li>project</li>
					<li><div class="badge">excel</div> Importer</li>
				</ol>
			</div>
			</div>
			
			<form method="post" action="import_member.php" enctype="multipart/form-data"><br>
				<table class="table-condensed table-hover table-responsive" style="width: 40%;" height="150">
					<tr>
						<td><center><b>File Import</b></center></td>
					</tr>
					<tr>
						<td>
							<div class="input-group">
								<span class="input-group-addon">Browse the file</span>
								<input type="file" name="filename" required class="form-control">
							</div>
						</td>
					</tr>
					<tr>
						<td><center><button type="submit" name="submit" class="btn btn-block btn-warning"><li class="fa fa-upload"></li>&nbsp;&nbsp;Upload!</button></center></td>
					</tr>
				</table>
			</form>
			<br>
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