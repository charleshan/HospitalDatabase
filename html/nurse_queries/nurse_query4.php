<?php
$column = $_POST['patient_update_info'];
$value = $_POST['value'];
$pid = $_POST['pid'];

$con = mysqli_connect('localhost','eece304','eece304Rocks!','hospital');

$sql="UPDATE Assigned_Patient SET " . $column . "=" . $value . " WHERE PID=" . $pid;
echo $sql;

$result = mysqli_query($con,$sql);

mysqli_close($con);
?>

<meta http-equiv="refresh" content="1;/HospitalDatabase/html/nurse.php">
<script type="text/javascript">
    window.location.href = "/HospitalDatabase/html/nurse.php"
</script>