<?php
	include "db.php";
	if(isset($_GET['msg']))
	{
		$m=$_GET['msg'];
		if($m==1)
		{
			echo "delet successfull";
		}
		else
		{
			echo "Not delete";
		}
	}
	$sql="SELECT * FROM student";
	$result= $con ->query($sql);
	echo "<table border='2'>
		<tr>
			<td>Serialno </td>
			<td>Name</td>
			<td>Roll</td>
			<td>Reg</td>
			<td>semester</td>
			<td>shift</td>
			<td>Email</td>
			<td>Password</td>
			<td>operation</td>
		</tr>";

	while($data = $result->fetch_assoc())
	{
	echo "<tr>
			<td>".$data['Serialno']."</td>
			<td>".$data['Name']."</td>
			<td>".$data['Roll']."</td>
			<td>".$data['Reg']."</td>
			<td>".$data['semester']."</td>
			<td>".$data['shift']."</td>
			<td>".$data['Email']."</td>
			<td>".$data['Password']."</td>
			<td> <a href=\"delet.php?id=".$data['Serialno']."\">Delete</a> </td>
		 </tr>";
	}
?>