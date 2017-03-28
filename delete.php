<html>
<head>
<title>Delete</title>
<body>
<?php
include "koneksi.php";
$del=mysql_query("
	delete from biodata
	where no='$_GET[id]'")
	or die(mysql_error());
if($del){
	?>
<script language="javascript">document.location="biodata.php";alert="Data deleted"</script>
<?php
}else{
	echo "Failed to delete data";
	echo "<br>";
	echo "click";
	echo "<a href='biodata.php'> here</a>";
	echo " to go back.";
}
?>
</body>
</html>