<?php include("header.php"); ?>
<?php
$myForm = '<body>
<form action="5_delete.php">
<input name="delid" value="1001">
<input type="submit" value="5_delete.php">
</form>';
if (!isset($_GET['delid'])) { 
  echo $myForm;
  exit;
}
require("1_connect.php");
$sql="delete from $tb ";
$sql.="where pdid ='".$_GET['delid']."'";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		header("location: index.php");	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		header("location: index.php");
	mysql_close($connect);
}
?>
<?php include("footer.php"); ?>