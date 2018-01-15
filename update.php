<?php
	include "db.php";
	if (isset($_POST['submit'])) {
		$Name=$_POST['name'];
		$Roll=$_POST['roll'];
		$Reg=$_POST['reg'];
		$sql="UPDATE student SET name='$Name', Roll='$Roll', Reg='$Reg' WHERE Serialno=9";
		if($con->query($sql)===TRUE){
			echo"Data updated";
		}
		else{
			echo"Data not updated";
			}

	}
		


?>