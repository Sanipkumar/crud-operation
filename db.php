<?php
 $host="localhost";
 $user="root";
 $pass="";
 $db="iconn";

 $con=new mysqli($host,$user,$pass,$db);
 if($con->connect_error)
	 {
	 	die ("faild");
	 }

 ?>