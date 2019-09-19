<?php include("header.php"); ?>
<form action="6_update.php">
<input name="pdid" value="">
<input name="pdname" value="">
<input name="supplierid" value="">
<input name="quantityperunit" value="">
<input name="unitprice" value="">
<input type="submit" value="6_update.php">
</form>
<?php
if (!isset($_GET['id'])) { exit; }
require("pro_s1connect.php");
$sql.="update a_products set ";
$sql.="pdid ='". $_GET['pdid'] ."', ";
$sql.="pdname ='". $_GET['pdname'] ."', ";
$sql.="unitprice ='". $_GET['unitprice'] ."', ";
$sql.="quantityperunit ='". $_GET['quantityperunit'] ."', ";
$sql.="unitprice ='". $_GET['unitprice'] ."' ";
$sql.="where pdid ='". $_GET['pdid'] ."'";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=pro_s0index.php'/>";	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : True";
	else 
		echo "<meta http-equiv='refresh' content='0; url=pro_s0index.php'/>";
	mysql_close($connect);
}
?>

<?php include("footer.php"); ?>