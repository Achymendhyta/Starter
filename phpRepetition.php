<html>
	<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
	<script src="bootstrap/jquery.min.js"></script>
	<script src="bootstrap/bootstrap.min.js"></script>
		<title>Repetition and Odd-Even Number</title>
	</head>
	<body>
		<div align="center">
			<hr>
			<h1><li class="fa fa-repeat fa-spin"></li>&nbsp;&nbsp;Repetition and <font color="orange">Odd-Even Number</font></h1>
			<hr><br>
			<form method="post" action="">
				<table class="table-bordered table-condensed table-hover table-responsive table-striped">
					<tr>
						<td colspan="2"><center><b>Repetition and Odd-Even Number</b></center></td>
					</tr>
					<tr>
						<td>Nominal</td>
						<td><input name="number" type="number" placeholder="<1 Nominal" required="required" min="2" max="50" class="form-control"></td>
					</tr>
					<tr>
						<td colspan="2"><center><input type="submit" name="kirim" class="btn-block btn-lg btn-primary btn"></center></td>
					</tr>
				</table>
			</form>
		<?php
		if(isset($_POST['kirim'])){
			for($a=1;$a<$_POST['number'];$a++){
				echo "|";
				echo "&nbsp;";
				echo $a;
				echo "&nbsp;";
				
			}
			echo "|";
			echo "<br>";
		if($_POST['number']%2==0){
			echo "<b>";
			echo $_POST['number'];
			echo "</b>";
			echo " = ";
			echo "<b>";
			echo "Even";
			echo "</b>";
			echo " / ";
			echo "<b>";
			echo "Genap";
			echo "</b>";
		}else{
			echo "<b>";
			echo $_POST['number'];
			echo "</b>";
			echo " = ";
			echo "<b>";
			echo "Odd";
			echo "</b>";
			echo " / ";
			echo "<b>";
			echo "Ganjil";
			echo "</b>";
			}
		}
		?>
			<hr></div>
		<footer><center>Repetition and Odd-Even | PHP Project<br>
			Made by <b>Farell Faiz <li class="fa fa-check-circle"></li></b></center></footer>
	</body>
</html>