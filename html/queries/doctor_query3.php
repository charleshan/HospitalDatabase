<?php
// Nurse selects patient ID and want where the patient room is.
$q = $_GET['q'];

$con = mysqli_connect('localhost','eece304','eece304Rocks!','hospital');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT PID,RoomNumber FROM Assigned_Patient WHERE PID='".$q."'";
$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
  <th>PID</th>
  <th>RoomNumber</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['PID'] . "</td>";
  echo "<td>" . $row['RoomNumber'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
