<html>
	<head>
		<title>Koneksi</title>
	</head>
	<body>
		<div align="center">
			<?php
			$host="localhost";
			$user="root";
			$pwd="";
			$db="faiz";
			$can=mysql_connect($host,$user,$pwd)or die(mysql_error());
			mysql_select_db($db,$can);
			?>
		</div>
	</body>
</html>