<?php

	include "db.php";
	$sl=$_GET['id'];
	$sql="DELETE FROM student WHERE Serialno ='$sl'";
	if($con ->query ($sql)===TRUE)
	{
		header("location:show.php?msg=1");
	}
	else
	{
		header("location:show.php?msg=2");
	}

?>