<?php include("header.php"); ?>

<form action=4_insert.php>
<input name=nid value=>
<input name=nname value=>
<input name=sup value=>
<input name=qpu value=>
<input name=up value=>
<input type=submit value=s4insert.php>
</form>
<?php
if (!isset($_GET['nid']) || !isset($_GET['nname'])) exit;
require("1_connect.php");
$sql="insert into $tb values('".$_GET['pdid']."','".$_GET['pdname']."','".$_GET['supplierid']."','".$_GET['quantityperunit']."','".$_GET['unitprice']."')";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "$sql : succeeded";
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		echo "$sql : succeeded";
	mysql_close($connect);
}
?>
<?php include("footer.php"); ?>