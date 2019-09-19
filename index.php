<?php include("header.php"); ?>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head><body><ol><b>mysql</b>
<li>s1connect.php</li>
<li><a href="2_create.php">create</a></li>
<li><a href="3_select.php">select</a></li>
<li><a href="4_insert.php">insert</a></li>
<li><a href="5_delete.php">delete</a></li>
<li><a href="6_update.php">update</a></li>
<li><a href="7_drop.php">drop</a></li>
</ol>
<?php
  if(file_exists("3_select.php")) include("3_select.php");
?>
<?php include("footer.php"); ?>