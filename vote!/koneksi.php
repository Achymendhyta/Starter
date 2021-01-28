<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			$host="localhost";
			$uname="root";
			$pwd="";
			$koneksi=mysqli_connect($host,$uname,$pwd)or die(mysqli_error());
			mysqli_select_db($koneksi,"vote");
		?>
	</body>
</html>