<?php
 $query = "select *  from customer";
 $result = mysqli_query($connection,$query);
 if (!$result) {
 die("databases query failed.");
 }
  while ($row = mysqli_fetch_assoc($result)) {
 echo '<option value="'.$row["customerID"] . '">';
     echo $row["customerID"] . "</option>";
 }
 mysqli_free_result($result);
?>




