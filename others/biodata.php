<html>
	<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
	<script src="bootstrap/jquery.min.js"></script>
	<script src="bootstrap/bootstrap.min.js"></script>
		<title>Data Siswa</title>
	</head>
	<body>
	<div align="center">
	<hr>
	<h1><li class="fa fa-th-list"></li>&nbsp;&nbsp;Data Siswa 
		<font color="orange">Al-Azhar Syifa Budi Parahyangan</font></h1>
		<hr><br>
	<table class="table-bordered table-condensed table-responsive table-hover table-striped">
	<tr>
		<td colspan="5"><b><center>Data Siswa</center></b></td>
	</tr>
	<tr>
		<td><b><center>No</center></b></td>
		<td><b><center>Nama</center></b></td>
		<td><b><center>Kelas</center></b></td>
		<td><b><center>Alamat</center></b></td>
		<td><b><center>Action</center></b></td>
	</tr>
		<?php
		include "koneksi.php";
		$qs=mysql_query("select *from biodata")
			or die(mysql_error());
		while($d=mysql_fetch_array($qs)){
			echo "<tr>";
			echo "<td>";
			echo "<center>";
			echo $d['No'];
			echo "</center>";
			echo "</td>";
			echo "<td>";
			echo $d['Nama'];
			echo "</td>";
			echo "<td>";
			echo $d['Kelas'];
			echo "</td>";
			echo "<td>";
			echo "<center>";
			echo $d['Alamat'];
			echo "</center>";
			echo "</td>";
			echo "<td>";
		?>
		<a href="delete.php?id=<?php echo $d['No'];?>">
			<center><button class="btn-link btn-block"><li class="fa fa-trash"></li></button></center>
		</a>
		<?php 
			echo "</td>";
			echo "</tr>";
		}
		?>
		<tr>
			<td colspan="5"><center>You can <b>submit</b> your data <a href="submitData.php"><button class="btn btn-primary">Here</button></a></td>
		</tr>
		</table>
		<br><hr>
	</body>
	<footer>Student List | PHP Project
	<br>Made by <b>Farell Faiz <li class="fa fa-check-circle"></li></b>
	</footer>
		</div>
<br>
</html>