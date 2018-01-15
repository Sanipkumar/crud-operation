<?php

	include "db.php";
	if(isset($_POST['submit']))
	{
		$Name=$_POST['name'];
		$Roll=$_POST['roll'];
		$Reg=$_POST['reg'];
		$semester=$_POST['sem'];
		$shift=$_POST['shif'];
		$Email=$_POST['mail'];
		$Password=md5($_POST['pass']);
		$sql="INSERT INTO student(Name,Roll,Reg,semester,shift,Email,Password) VALUES('$Name','$Roll','$Reg','$semester','$shift','$Email','$Password')";
		if($con->query($sql)=== TRUE)
		{
			header("location:show.php");
		}
	    else
	    {
	    	echo "Data not inserted".$con->connect_error;
	    }
	}
	else
		{
			header("location:form.php");
		}
	?>