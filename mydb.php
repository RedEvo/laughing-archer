<?php
$q = $_GET['q'];

$con = mysqli_connect('localhost','root','root','core');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql = 'SELECT System, SystemName from tbl_' . $q . ' where AssessmentCurrent="Medium" and Assignation="Life"';
//echo $sql;
$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
<th>System</th>
<th>System Name</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['System'] . "</td>";
  echo "<td>" . $row['SystemName'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>