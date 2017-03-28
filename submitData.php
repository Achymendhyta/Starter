<html>
	<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
	<script src="bootstrap/jquery.min.js"></script>
	<script src="bootstrap/bootstrap.min.js"></script>
		<title>Submit Data</title>
	</head>
	<body>
	<div align="center">
	<hr>
		<h1><li class="fa fa-download"></li>&nbsp;&nbsp;Submit <font color="orange">Data</font></h1>
	<hr>
		<form method="post" action="">
		  <table width="336" border="0" class="table-bordered table-condensed table-hover table-responsive table-striped">
		    <tbody>
		      <tr>
				  <td colspan="2"><center><strong>Form</strong></center></td>
	          </tr>
		      <tr>
		        <td width="90">No</td>
		        <td width="240"><input class="form-control" name="No" type="number" required="required" id="No" placeholder="Insert Number Here" size="40" min="1"></td>
	          </tr>
		      <tr>
		        <td width="90">Nama</td>
		        <td><input class="form-control" name="Nama" type="text" required="required" id="Nama" placeholder="Kimi no Namae wa?!" size="40"></td>
	          </tr>
		      <tr>
		        <td width="90">Kelas</td>
		        <td><input class="form-control" name="Kelas" type="text" required="required" id="Kelas" placeholder="Your Class" size="40"></td>
	          </tr>
		      <tr>
		        <td width="90">Alamat</td>
		        <td><input class="form-control" name="Alamat" type="text" required="required" id="Alamat" placeholder="Address" size="40"></td>
	          </tr>
		      <tr>
		        <td colspan="2"><center><input class="btn-block btn-lg" type="submit" name="simpan" id="simpan" value="Save"></center></td>
	          </tr>
	        </tbody>
	      </table>
			
		</form>
		<?php
		include "koneksi.php";
		if(isset($_POST['simpan'])){
			$qi=mysql_query("insert into biodata(No, Nama, Kelas, Alamat)
			values('$_POST[No]','$_POST[Nama]','$_POST[Kelas]','$_POST[Alamat]')")
				or die(mysql_error());
			if($qi){
				echo "<b>";
				echo "<font color='light blue'>";
				echo "Data saved";
				echo "</font>";
				echo "</b>";
				echo "<br>";
			echo "The";
			echo "<b>";
			echo " result";
			echo "</b>";
			echo " can be viewed";
			echo "<a href='biodata.php'>";
			echo "<underline>";
			echo " here";
			echo "</underline>";
			echo "</a>";
			echo ".";
			}else{
				echo "<b>";
				echo "<font color'red'>";
				echo "Failed to save data";
				echo "</font>";
				echo "</b>";
			}
		}
		?>
		<hr>
</body>
<footer><center>
	Homepage | PHP Project<br>Made by <b>Farell Faiz <li class="fa fa-check-circle"></li></b></center></footer>
		</div>
</html>