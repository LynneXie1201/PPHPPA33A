
<?php
 $whichCus = $_POST["pickacustomer"]; //get selected customer value from the form
 $query =' SELECT *  FROM customer  WHERE customer.customerID = "' .$whichCus . '"'; //fill in wi$

 $result = mysqli_query($connection, $query);
 if (!$result) {
 die("databases query on get Phone Number failed. ");
 }

 echo "<ul>"; //put the artwork in an unordered bulleted list
while ($row = mysqli_fetch_assoc($result)) {
  echo "<li>";
    echo $row["customerID"]." ".$row["firstName"]." ".$row["lastName"]."'s phone number is ".$row["phoneNum"]."</li>";
}
 echo "</ul>"; //end the bulleted list
 mysqli_free_result($result);
?>

