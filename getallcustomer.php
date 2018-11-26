<?php
 $query = "SELECT * FROM customer ORDER BY lastName";
 $result = mysqli_query($connection,$query);
 if (!$result) {
 die("databases query failed.");
 }
?>

<table>
 <tr>
<th>Customer ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>City</th>
<th>Phone Number</th>
<th>Agent ID</th>
</tr>



<?php
//echo 'CustomerID  FirstName  LastName  City  Phone  AgentID';
 while ($row = mysqli_fetch_assoc($result)) {
?>

<tr>
<td><?php echo $row["customerID"]; ?></td>
<td><?php echo $row["firstName"]; ?></td>
<td><?php echo $row["lastName"]; ?></td>
<td><?php echo $row["customerCity"]; ?></td>
<td><?php echo $row["phoneNum"]; ?></td>
<td><?php echo $row["agentid"]; ?></td>
</tr>

<?php
// echo '<option>';
   // echo $row["customerID"].", ".$row["firstName"].", ".$row["lastName"].", ".$row["customerCity"].", ".$row["phoneNum"].", ".$row["agentid"]."</option>";
 }

 mysqli_free_result($result);
// mysqli_close($connection);
?>
</table>


