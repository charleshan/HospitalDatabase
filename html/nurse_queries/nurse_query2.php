<?php
	$pid =  $_POST["pid"];
	$roomNumber = $_POST["roomNumber"];
	$address = $_POST["address"];
	$ccn = $_POST["ccn"];
	$pname = $_POST['pname'];
	$age = $_POST['age'];
	$weight = $_POST['weight'];
	$height = $_POST['height'];
	$queueNumber = $_POST['queueNumber'];

	$con = mysqli_connect('localhost','eece304','eece304Rocks!','hospital');

	// INSERT INTO Assigned_Patient VALUES (34, 3, NULL, 1220, “Taylor Fisher”, 45, NULL, 170);
	$sql = "INSERT INTO Assigned_Patient VALUES (" .$pid. "," .$roomNumber. ",\"" .$address. "\"," .$ccn. ",\"" .$pname. "\"," .$age. "," .$weight. "," .$height. ")";
	echo $sql;
	
	$result = mysqli_query($con,$sql);

	echo '<script type="text/javascript">alert("' .echo mysqli_error($con);. '"); </script>';
	mysqli_close($con);

?>

<!-- <meta http-equiv="refresh" content="1;/HospitalDatabase/html/nurse.php">
<script type="text/javascript">
    window.location.href = "/HospitalDatabase/html/nurse.php"
</script> -->