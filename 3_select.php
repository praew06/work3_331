<?php
require("1_connect.php");
$sql="select * from $tb";
if((int)phpversion() >= 7) {
	$result = $connect->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<center>" ."pdid: " . $row["pdid"]. "- pdname: " . $row["pdname"]. "- supplierid: " . $row["supplierid"]."- quantityperunit: " . $row["quantityperunit"]."- unitprice: " . $row["unitprice"]. "<br/>";
		}
	} else {
		echo "no results";
	}
	$connect->close();
} else {	
	if (!$result=mysql_db_query($db,$sql)) die("Query : failed");
	echo "Display all records : <br/>";
	while ($object = mysql_fetch_object($result)) {
		echo $object->eid . "  " . $object->ename . "<br/>";
	}
	echo "Total " . mysql_num_rows($result) ." records";
	mysql_close($connect);
}
echo "<center><a href=pro_s0index.php>back</a>";
?>